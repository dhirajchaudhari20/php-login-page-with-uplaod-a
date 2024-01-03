<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>Files Upload and Download</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 20px;
      margin-top: 50px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h3 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    input[type="file"] {
      margin-bottom: 10px;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #45a049;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .container {
        width: 90%;
      }
    }
  </style>

</head>
<body>
<div class="container">
    <div class="row">
      <form action="filesLogic.php" method="post" enctype="multipart/form-data" onsubmit="handleFormSubmit()">
        <h3>Upload File</h3>
        <input type="file" name="myfile"> <br>
        <button type="submit" name="save">Upload</button>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <a href="downloads.php">Go to Downloads</a>
    </div>
    <br>
    <div class="row">
      <a href="index.php">Go to Homepage</a>
    </div>
  </div>
</body>
</html>
