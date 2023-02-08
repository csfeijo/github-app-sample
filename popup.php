<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php 
if (isset($_GET['authorized'])) {
  echo 'DEU';
} else {
?>
  <script src="js/redirect.js?no-cache=<?php echo time(); ?>"></script>
<?php
}
?>

</body>
</html>