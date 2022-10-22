<?php
if (isset($_POST['plsubmit'])) {

require 'database.php';

$phone = $_POST['lphone'];
$password = $_POST['lpassword'];

if (empty($phone) || empty($password)) {
  header("Location: MLR.php?error=emptyfields");
  exit();
}
else {
  $sql = "SELECT * FROM passenger WHERE Phone=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: PLR.php?sql_error");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "i", $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $hpass = password_verify($password, $row['Password_']);
      
      if ($hpass == false) {
        header("Location: PLR.php?wrong_password");
        exit();
      }
      else if ($hpass == true) {
        session_start();
        $_SESSION['usersPhone'] = $row['Phone'];
        header("Location: Pset.php?Login_Success ");
        exit();
      }
      else {
        header("Location: PLR.php?wrong_password");
        exit();
      }
    }
    else {
      header("Location: PLR.php?no_user");
      exit();
    }
  }
}

}
else {
	header("Location:  PLR.php");
}


?>
