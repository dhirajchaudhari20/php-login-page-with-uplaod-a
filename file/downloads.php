<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4caf50;
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    a {
      text-decoration: none;
      color: #3498db;
    }

    a:hover {
      color: #2980b9;
    }
  </style>
<table>
  <thead>
    <th>ID</th>
    <th>Filename</th>
    <th>Size (in KB)</th>
    <th>Downloads</th>
    <th>Actions</th>
  </thead>
  <tbody>
    <?php foreach ($files as $file): ?>
      <tr>
        <td><?php echo $file['id']; ?></td>
        <td><?php echo $file['name']; ?></td>
        <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
        <td><?php echo $file['downloads']; ?></td>
        <td>
          <a href="downloads.php?file_id=<?php echo $file['id'] ?>" target="_blank">View</a> |
          <a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</body>
</html>