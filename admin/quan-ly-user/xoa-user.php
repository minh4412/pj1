<?php
if (isset($_GET["id"])) {
  $delete = $_GET["id"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "DELETE FROM user WHERE id=$delete";
  mysqli_query($con, $sql);
  mysqli_close($con);
  header("Location: ../index.php?cat=8");
} else {
  header("Location: ../index.php?cat=8");
}