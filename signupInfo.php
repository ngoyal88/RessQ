<!doctype html>
<html  dir="ltr">
<head>
    <title>Register</title>

    
    <script src="https://kit.fontawesome.com/decdc0c2fa.js" crossorigin="anonymous"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <style>
      .nav-item-middle{
          border-right: 2px solid rgb(221, 221, 221);
      }
  </style>

<body>
  <nav
  class="navbar navbar-expand-xl navbar-light bg-white shadow-sm sticky-lg-top"
>
  <div class="container">
    <a class="navbar-brand d-flex" href="/home.php">
      <h1>RessQ</h1>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarToggler"
      aria-controls="navbarToggler"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-between"
      id="navbarToggler"
    >
      <div class="languageSwitcher text-center"></div>

      <ul class="navbar-nav mb-2 mb-lg-0 fw-bold">
        <li class="nav-item-middle">
          <a
            class="nav-link active"
            aria-current="page"
            href="/home.php"
            >Home</a
          >
        </li>
        <li class="nav-item-middle dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Want to Donate</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/campSchedule.php">Blood Donation Camp Schedule</a></li>
            <li><a class="dropdown-item" href="/signupInfo.php">Add Donor</a></li>
            <li><a class="dropdown-item" href="/addBloodBank.php">Add Blood Bank</a></li>
          </ul>
      </li>
      <li class="nav-item-middle dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Looking for Blood</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/bloodAvailable.php">Blood Available</a></li>
          </ul>
      </li>
        </li>
        <li class="nav-item">
                <a href="/AboutUs.php" style="text-decoration: none;">
                <button
                type="button"
                class="nav-link btn btn-link"
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
              >
              About
              </button>
              </a>
            </li>
      </ul>

      <div class="d-flex flex-column flex-xl-row">
        <a
          href="/signup.php"
          class="btn btn-danger btn-lg px-4 me-md-2 d-flex align-items-center justify-content-center"
        >
          Sign up
        </a>
        <a
          href="/signin.php"
          class="text-dark text-decoration-none d-flex align-items-center justify-content-center mt-3 ms-xl-4 mt-xl-0"
          >Sign in</a
        >
      </div>
    </div>
  </div>
</nav>


<div class="container" style=" width: 50%;">

    <div class="formFieldsWrapper m-4" >
        
        <form class="row g-3" action="" method="post">
            <div class="col-md-6">
              <label for="inputfname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputfname" name="firstName"/>
            </div>
            <div class="col-md-6">
              <label for="inputlname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputlname" name="lastName"/>
            </div>
            <div class="col-md-6">
              <label for="inputdob" class="form-label">DOB</label>
              <input type="date" class="form-control" id="inputdob" name="dob" />
            </div>
            <div class="col-md-6">
              <label for="inputtel" class="form-label">Phone No.</label>
              <input type="tel" class="form-control" id="inputtel" name="phonenumber"/>
            </div>
            <div class="col-md-6">
              <label for="inputemail" class="form-label">Email ID</label>
              <input type="email" class="form-control" id="inputemail" name="emailid"/>
            </div>
            <div class="col-md-3">
              <label for="inputbg" class="form-label" >Blood Group</label>
              <select id="inputState" class="form-select" name="bg">
                <option selected>Choose...</option>
                <option>A+</option>
                <option>O+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>O-</option>
                <option>B-</option>
                <option>AB-</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="inputgender" class="form-label">Gender</label>
              <select id="inputState" class="form-select" name="gender">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputid" class="form-label">Goverment ID </label>
              <select id="inputState" class="form-select" name="govtid">
                <option selected>Choose...</option>
                <option>Adhaar Card</option>
                <option>Pan Card</option>
                <option>Driving License</option>
                <option>Voter Id Card</option>
              </select>
            </div>
    
            <div class="col-md-6">
              <label for="inputidno" class="form-label">Goverment ID No.</label>
              <input type="text" class="form-control" id="inputeidno" name="govtno" />
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                placeholder="1234 Main St"
                name="address"
              />
            </div>
    
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name="city" />
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select" name="state">
                <option value="SelectState">Select State</option>
                <option value="Andra Pradesh">Andra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madya Pradesh">Madya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttaranchal">Uttaranchal</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadeep">Lakshadeep</option>
                <option value="Pondicherry">Pondicherry</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip" />
            </div>
            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Any Previous Medical Condition ?</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
                name="text"
              ></textarea>
            </div>
    
            <span>
              <div class="col-12">
                <p>Are willing to donate blood ?</p>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Yes
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                      No
                  </label>
                </div>
    
                
              </div>
            </span>
    
            
            <input type="submit" class="btn btn-danger" name="Register">
        </form>
    </div>
</div>
<footer class="bg-dark">
<div class="container d-flex flex-column align-items-center py-5">
    <a href="/home.php"><h1 style="color: #ffffff; text-decoration: none;">RessQ</h1></a>

    <div class="d-flex flex-column flex-sm-row align-items-center">
        <a class="footerLink text-decoration-none text-white px-3 mt-3" href="/signin.php">Blood Donor</a>
        <a class="footerLink text-decoration-none text-white px-3 mt-3" href="/bloodAvailable.php">Need For Blood</a>
    </div>

    <div class="w-75">
        <p class="text-white mt-3 text-center fw-bold">
            
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis aperiam nam at sunt officiis doloremque nobis animi accusamus ducimus iure ipsum, adipisci dolores a tempora! Perferendis mollitia quia harum eius!</p>
    </div>

    <span class="text-white">---</span>

    <div class="w-75">
        <p class="text-white mt-3 text-center">
        Access Source code on Github
        <br>
        <br>
        <a class="btn github align-items-center" href="#" rel="nofollow" >
            <i class="fa-brands fa-github fa-2xl" style="color: #ffffff;"></i>
            </a>
        </p>

     
    </div>

    <span class="text-white mt-3">Follow Us On:</span>
    <div class="findUsOnSocialMedia bg-dark d-flex justify-content-end align-items-center">
        <div class="social-btns">
            <a class="btn facebook" href="" target="_blank">
                <i class="fa-brands fa-facebook-f fa-2xl" style="color: #ffffff;"></i></a>
            <a class="btn instagram" href="" target="_blank">
                <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i>
                </a>

        </div>
    </div>

</div>

</footer>


</body>

</html>


<?php

      if($_POST['Register']){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $DOB = $_POST['dob'];
        $Phonenumber = $_POST['phonenumber'];
        $email = $_POST['emailid'];
        $Bloodgroup = $_POST['bg'];
        $gender = $_POST['gender'];
        $Govtid = $_POST['govtid'];
        $Govtno = $_POST['govtno'];
        $Address = $_POST['address'];
        $City = $_POST['city'];
        $State = $_POST['state'];
        $Zip = $_POST['zip'];
        $textarea = $_POST['text'];
        $flexradio = $_POST['flexRadioDefault'];

        $query = "INSERT INTO signupid values('$firstName','$lastName','$DOB','$Phonenumber','$email','$Bloodgroup','$gender','$Govtid','$Govtno','$Address','$City','$State','$Zip','$textarea','$flexradio')";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "bloodbank";

        $connection = new mysqli($servername,$username,$password,$database);
        if($connection->connect_error){
            die("Connection failed: " . $connection->connect_error);
        }
        $data = mysqli_query($connection,$query);

        if($data){
            echo "Data Inserted into db";
        }
        else{
            echo "Failed";
        }

      }
?>