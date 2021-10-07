<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Robosphere - Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body onload="works()">
    <!-- <div class="bg-img-container">
      <img
        class="bg-img"
        src="https://images.pond5.com/orange-green-technology-background-070787698_prevstill.jpeg"
        alt="technology background"
      />
      <div class="form-box"></div>
    </div> -->
    <section>
      <div class="cover">
        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing</h1>
        <img src="images/laying-robot.png" alt="laying robot saying hi" />
        <p>Robosphere</p>
      </div>
      <div class="form-box">
        <!-- <form class="form">
          <div>
            <h3>Sign Up</h3>
          </div>
          <div>
            <label class="form-label l1">First Name</label>
            <input class="form-input i1" type="text" />
          </div>
          <div>
            <label class="form-label l2">Last Name</label>
            <input class="form-input i2" type="text" />
          </div>
          <div>
            <label class="form-label l3">Phone</label>
            <input class="form-input i3" type="text" />
          </div>
          <div>
            <label class="form-label l4">Email</label>
            <input class="form-input i4" type="text" />
          </div>
          <div>
            <label class="form-label l5">Password</label>
            <input class="form-input i5" type="text" />
          </div>
          
         <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"
              >Email</label
            >
            <div class="col-sm-10">
              <input
                type="email"
                class="form-control"
                id="inputEmail3"
                placeholder="Email"
              />
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"
              >Password</label
            >
            <div class="col-sm-10">
              <input
                type="password"
                class="form-control"
                id="inputPassword3"
                placeholder="Password"
              />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form> -->

        <div class="container">
          <div id="login-card" class="card">
            <div class="card-body">
              <!-- <div class="circle"></div> -->
              <header class="myHed text-center">
                <i class="far fa fa-user"></i>
                <p>LOGIN</p>
              </header>
              <form action="tp.php" method="post" class="main-form text-center">
                <div class="form-group my-0">
                  <label class="my-0">
                    <i class="fas fa fa-user"></i>
                    <input name="lusername" type="text" class="myInput" placeholder="Username" />
                  </label>
                </div>
                <div class="form-group my-0">
                  <label class="my-0">
                    <i class="fas fa fa-lock"></i>
                    <input
                    name="lpassword"
                      type="password"
                      class="myInput"
                      placeholder="Password"
                    />
                  </label>
                </div>
                <label class="check_1">
                  <input type="checkbox" checked />
                  Remember Me
                </label>
                <div class="form-group">
                  <label>
                    <input type="hidden" name="index" value="1">
                    <input
                      type="submit"
                      class="form-control button"
                      value="LOGIN"
                    />
                  </label>
                </div>
                <span id="forgot" class="check_1">Forgot Password?</span><br />
                <span id="signup" class="check_1"
                  >Don't have an account? Sign Up</span
                >
              </form>
            </div>
          </div>

          <div id="signup-card" class="card">
            <div class="card-body">
              <!-- <div class="circle"></div> -->
              <header class="myHed text-center">
                <i class="far fa fa-user"></i>
                <p>SIGN UP</p>
              </header>
              <form action="tp.php" method="post" class="main-form text-center">
                <div class="form-group my-0">
                  <label class="my-0">
                    <i class="fas fa fa-user"></i>
                    <input name="susername" type="text" class="myInput" placeholder="Username" />
                  </label>
                  <label class="my-0">
                    <i class="fas fa fa-user"></i>
                    <input
                    name="sfname"
                      type="text"
                      class="myInput"
                      placeholder="First Name"
                    />
                  </label>
                  <label class="my-0">
                    <i class="fas fa fa-user"></i>
                    <input
                    name="slname"
                      type="text"
                      class="myInput"
                      placeholder="Last Name"
                    />
                  </label>
                  <label class="my-0">
                    <i class="fas fa fa-envelope"></i>
                    <input name="semail" type="text" class="myInput" placeholder="Email" />
                  </label>
                </div>
                <div class="form-group my-0">
                  <label class="my-0">
                    <i class="fas fa fa-lock"></i>
                    <input
                    name="spassword"
                      type="password"
                      class="myInput"
                      placeholder="Password"
                    />
                  </label>
                </div>
                <div class="form-group">
                  <label>
                    <input type="hidden" name="index" value="2">
                    <input
                    id="signup-btn"
                      type="submit"
                      class="form-control button"
                      value="SIGN UP"
                    />
                  </label>
                </div>
                <span id="login" class="check_1"
                  >Already have an account? Login</span
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <script type="text/javascript">
  
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
      defer
    ></script>
    <script src="login.js"></script>
    <?php
    if (array_key_exists('index',$_POST)) {
      if ($_POST['index'] == 1) {
        $formlUsername = $_POST['lusername'];
        $formlPassword = $_POST['lpassword'];

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
            if ($formlPassword == $row['password']) { 
                header("Location: home.html"); 
                exit;
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
  </body>
</html>
