<?php
require_once 'db_connect.php';
$id= $_GET["id"];
$sql = "SELECT * FROM media WHERE id = $id";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 0) {
    $layout = "<p>No details found for this item.</p>";
} else {
    $row = mysqli_fetch_assoc($result);
    $publishDate = date("F j, Y", strtotime($row["publish_date"]));
    $layout = "<div class='container'>
                    <img src='{$row["image"]}' class='img-fluid' alt='{$row["title"]}' />
                    <h2>{$row["title"]}</h2>
                    <p><strong>ISBN:</strong> {$row["ISBN_code"]}</p>
                    <p><strong>Publish Date:</strong> {$row["publish_date"]}</p>
                    <p><strong>Description:</strong> {$row["short_description"]}</p>
                    <p><strong>Type:</strong> {$row["type"]}</p>
                    <p><strong>Author:</strong> {$row["author_first_name"]} {$row["author_last_name"]}</p>
                    <p><strong>Publisher:</strong> {$row["publisher_name"]}, {$row["publisher_address"]}</p>
              </div>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
<style>
    /* details styling */
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
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #F9F9F9;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .container img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .container h2 {
        color: #333;
        margin-bottom: 15px;
    }
    .container p strong {
        color: #333;
    }
        .social-icons a {
            color: #333;
            margin: 0 15px;
            display: inline-block;
        }
        .social-icons a:hover {
            color: #666;
        }
</style>
</head>
<body>
<!-- details navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">Welcome to Franks Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
    
      <a class="nav-item nav-link" href="#">About Us</a>
      >
    </div>
  </div>
</nav>
<?= $layout ?>
<div class="container mt-3">
    <a href="index.php" class="btn btn-primary">&laquo; Go back</a>
</div>
<!-- details footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>