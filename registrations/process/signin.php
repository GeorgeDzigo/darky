<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $conn = new mysqli("localhost", "root", "gabogio210", "portfolio");
      $name  = $_POST['signinUsernamemail'];
      $password  = $_POST['signinPassword'];

      $sql = "SELECT * FROM users WHERE username = '$name' AND user_password = '$password'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                  if ($row['username'] == $name && $row['user_password'] == $password) {
                        $_SESSION['username'] = $name;
                        $_SESSION['username'];
                        header("location: ../../index.php?access=granted");
                        
                  } else {
                        header("location: ../signupin.php?access=denied?wrongpass");
                       
                  }
            }
      } else {
            header("location: ../signupin.php?access=denied?wrongpass");
           
      }
      $conn->close();
} else {
      header("location: ../signupin.php?access=denied");
      exit();
}
