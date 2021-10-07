<?php
    if (array_key_exists('index',$_POST)) {
      if ($_POST['index'] == 1) {
        $formlUsername = $_POST['lusername'];
        $formlPassword = $_POST['lpassword'];

        if ($formlUsername == null && $formlPassword == null) header("Location: index.php");

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "robosphere";

        // echo $formUsername.$formPassword;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database_name);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully ";

        $sql = "SELECT password FROM users where username = '$formlUsername'";

        $result_set = mysqli_query($conn,$sql); //returns a non-zero value on success

        if($result_set) 
        {
            $row = mysqli_fetch_assoc($result_set);
            print_r($row);
            if ($formlPassword == $row['password']) { 
                header("Location: home.html"); 
                
                exit;
            } else {
                 header("Location: index.php");
                // echo 'wrong';
            }
            
        }

        mysqli_close($conn);

      } else if ($_POST['index'] == 2) {
        $formsUsername = $_POST['susername'];
        $formsFname = $_POST['sfname'];
        $formsLname = $_POST['slname'];
        $formsEmail = $_POST['semail'];
        $formsPassword = $_POST['spassword'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "robosphere";

        // echo $formUsername.$formPassword;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database_name);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully ";

        $sql = "INSERT INTO users VALUES('$formsUsername','$formsFname','$formsLname','$formsEmail','$formsPassword')";

        $result_set = mysqli_query($conn,$sql); //returns a non-zero value on success

        if($result_set) 
        {
            header("Location: home.html"); 
            }
            mysqli_close($conn);
        }

        
      }
  ?>