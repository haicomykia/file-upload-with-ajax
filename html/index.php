<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data" action="index.php">
    <input type="file" name="files[]" id="files" multiple accept="image/*, .pdf">
    <input type="submit" value="Send">
  </form>
  <?php
    var_dump($_FILES['files']['name']);
  ?>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="./index.js"></script>
</body>
</html>