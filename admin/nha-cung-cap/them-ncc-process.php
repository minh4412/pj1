	<?php
if (isset($_GET["name-ncc"])) {
  $NCC = $_GET["name-ncc"];
  include ('../../connect/open.php');
  $sql = "INSERT INTO nhasx(tenNsx) values ('$NCC')";
  mysqli_query($con, $sql);
  include ('../../connect/close.php');
  header("Location: ../index.php?cat=3");
} else {
  header("Location: ../index.php?cat=3");
}