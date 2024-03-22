<?php
require_once "db_connect.php";

// Check if the 'publisher' parameter is set in the URL
if (isset($_GET['publisher'])) {
    // Retrieve the publisher name from the URL
    $publisher_name = $_GET['publisher'];

    // Prepare and execute SQL query to fetch media items by publisher name
    $sql = "SELECT * FROM media WHERE publisher_name = '$publisher_name'";
    $result = mysqli_query($connect, $sql);

    // Check if the query was successful and if media items were found
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch media items from the result set
        $media_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Media items not found, display a message
        $message = "No media items found for publisher: " . $publisher_name;
    }
} else {
    // 'publisher' parameter not set in the URL, display an error message
    $message = "Publisher name not specified";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Published by Publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .navbar-custom {
            background-color: beige;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: black;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #666;
        }
        .ml-auto .nav-item:not(:last-child) {
            margin-right: auto;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">Welcome to Franks Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      
     
      <a class="nav-item nav-link" href="#">Details</a>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Media Published by Publisher: <?php echo isset($publisher_name) ? $publisher_name : ""; ?></h1>
        <?php if (isset($media_items) && !empty($media_items)) : ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($media_items as $media) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="<?php echo $media['image']; ?>" class="card-img-top image-height" alt="Media Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $media['title']; ?></h5>
                                <p class="card-text">Author: <?php echo $media['author_first_name'] . " " . $media['author_last_name']; ?></p>
                                <p class="card-text">ISBN: <?php echo $media['ISBN_code']; ?></p>
                                <p class="card-text">Description: <?php echo $media['short_description']; ?></p>
                                <p class="card-text">Type: <?php echo $media['type']; ?></p>
                                <a href="details.php?id=<?php echo $media['id']; ?>" class="btn btn-primary">Details</a>
                                <a href="index.php">Go back</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p><?php echo isset($message) ? $message : "No media items found"; ?></p>
        <?php endif; ?>
        <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
