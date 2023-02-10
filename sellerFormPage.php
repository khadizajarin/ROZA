<?php


    /*include('config/bd_connect.php');
    $errors = array('fname'=> ' ','lname'=> ' ','mobile1'=> ' ',' mobile2'=> ' ', 'email'=> ' ', 'address1'=> ' ', 'address2'=> ' ', 'city'=> ' ');
    $fname =$lname= $mobile1= $mobile2= $email = $address1 = $address2 = $city = ' ';
  
    if(isset($_POST['submit'])){

      if(!array_filter($errors)){

          $fname = mysqli_real_escape_string($conn, $_POST['fname']);
          $lname = mysqli_real_escape_string($conn, $_POST['lname']);
          $mobile1 = mysqli_real_escape_string($conn, $_POST['mobile1']);
          $mobile2 = mysqli_real_escape_string($conn, $_POST['mobile2']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
          $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
          $city = mysqli_real_escape_string($conn, $_POST['city']);
          
          //create sql
          $sql = "INSERT INTO seller('fname','lname','mobile1',' mobile2', 'email', 'address1', 'address2', 'city') VALUES ('$fname','$lname','$mobile1', '$mobile2','$email', '$address1','$address2','$city')";

          if(mysqli_query($conn, $sql)){
            echo "Entries added!";
          }else{
              echo 'query error: '. mysqli_error($conn);
        }
    }
}*/




     include('config/bd_connect.php');

     $fname =$lname= $mobile1= $mobile2= $email = $address1 = $address2 = $city = ' ';
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile1 = $_POST['mobile1'];
        $mobile2 = $_POST['mobile2'];
        $email = $_POST['email'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];

    // using sql to create a data entry query
    $sql = "INSERT INTO seller( 'fname' ,'lname', 'mobile1', 'mobile2', 'email', 'address1', 'address2', 'city') VALUES ( '$fname','$lname' ,'$mobile1','$mobile2','$email', '$address1', '$address2','$city')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs){
        echo "Entries added!";
    }
    // close connection
    mysqli_close($conn);
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>


<body style="font-family:Arial, Helvetica, sans-serif;" class="m-2 p-2">
  <header>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg  bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="img-fluid" src="/images/logos/artive4.jpeg" alt="Logo" width="95" height="35"
            class="d-inline-block align-text-top">

        </a>
      </div>
    </nav>
  </header>


  <main>

    <!-- BANNER SECTION -->
    <section class="d-flex flex-column justify-content-center align-items-center"
      style="background-image: url(/images/backgrounds/background5.jpg.jpeg); height: 110vh; width: 100%; background-size: cover;width: 100%;  background-position: center;">

      <!-- FORM TITLE -->
      <h1 class="fw-semibold text-dark" style="font-size: 40px; margin-left: 415px;">
        Create New Account
      </h1>

      <!-- FORM SECTION -->
      <section class="me-sm-5" style="margin-left: 950px; margin-right: 20px;">
        <div class="row">
          <div class="col mb-2">
            <label for="inputEmail4" class="form-label mb-0">First Name</label>
            <input type="text" class="form-control" placeholder="" aria-label="First name" name = "fname"
              style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col mb-2">
            <label for="inputEmail4" class="form-label mb-0">Last Name</label>
            <input type="text" class="form-control" placeholder="" aria-label="Last name" name = "lname"
              style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
        </div>
        <form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" >
          <div class="col-md-12 mb-2">
            <label for="inputEmail4" class="form-label mb-0">Mobile No-1</label>
            <input type="tel" class="form-control" id="inputEmail4"  name = "mobile1"
              style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col-md-12  mb-2">
            <label for="inputEmail4" class="form-label mb-0">Mobile No-2</label>
            <input type="tel" class="form-control" id="inputEmail4" name = "mobile2"
              style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col-md-6  mb-2">
            <label for="inputEmail4" class="form-label mb-0">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name = "email"
              style="background: transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col-md-6  mb-2">
            <label for="inputPassword4" class="form-label mb-0">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name = "password"
              style="background: transparent; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col-12 mb-2">
            <label for="inputAddress" class="form-label mb-0">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "address1"
              style="background:transparent; border: 2px solid; border-color: black; border-radius: 18px;" required>
          </div>
          <div class="col-11 mb-2" style="margin-left: 78px; margin-right: 20px;">
            <label for="inputAddress2" class="form-label mb-0">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name = "address2"
              style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;">
          </div>
          <div class="col-md-10 mb-2" style="margin-left: 120px; margin-right: 20px;">
            <label for="inputCity" class="form-label mb-0">City</label>
            <input type="text" class="form-control" id="inputCity" name = "city"
              style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;" >
          </div>
          <div class="col-md-6 mb-2" style="margin-left: 200px; margin-right: 20px;">
            <label for="inputState" class="form-label mb-0">State</label>
            <select id="inputState" class="form-select"
              style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;" >
              <option selected>Choose</option>
              <option>CU</option>
              <option>Chawkbazar</option>
              <option>Muradpur</option>
              <option>Hali-Shohor</option>
            </select>
          </div>
          <div class="col-md-2  mb-2">
            <label for="inputZip" class="form-label mb-0">Zip</label>
            <input type="text" class="form-control" id="inputZip"
              style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;">
          </div>
          <div class="col-12 mb-2" style="margin-left: 200px; margin-right: 20px;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="autoSizingCheck"
                style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;">
              <label class="form-check-label" for="autoSizingCheck">
                Remember me
              </label>
            </div>
          </div>
          <div class="col-12 mb-2" style="margin-left: 200px; margin-right: 20px;">
            <button type="submit" name = submit 
              style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
              class="btn btn-primary text-dark px-5">Sign in</button>
          </div>
        </form>
      </section>
    </section>
  </main>





  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>