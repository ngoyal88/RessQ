<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Blood Bank</title>
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
      .CSchedule{
        
        margin-top: 10%;
        margin-bottom: 10%;
      }
      .titleCS{
        margin-bottom: 5%;
        color: white;
        padding: 10px;
      }
      .nav-item-middle{
            border-right: 2px solid rgb(221, 221, 221);
        }
        .form-control{
            border-color: #aaa;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <!-- ============================================================================================================================================== -->
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
            <li class="nav-item">
              <a
                class="nav-link nav-item-middle active"
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
            <a  href="/signup.php" class="btn btn-danger btn-lg px-4 me-md-2 d-flex align-items-center justify-content-center" >
              Sign up
            </a>
            <a
              href="/signin.php" class="text-dark text-decoration-none d-flex align-items-center justify-content-center mt-3 ms-xl-4 mt-xl-0" >Sign in</a>
          </div>
        </div>
      </div>
    </nav>
<!-- Blood Camp Schedule -->
<!-- =============================================================================================================================================================================================================================================================== -->

<div class="container CSchedule" >
    <form  class="row">
       
 <div class="col-12 bg-danger titleCS" >
              <h3>Blood Bank Address</h3>
        </div> 
        <div class="form-group col-md-4">
            <label for="inputState"><b>State</b></label>
            <select class="form-control" id="inputState">
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
          <div class="form-group col-md-4">
            <label for="inputDistrict"><b>District</b></label>
            <select class="form-control" id="inputDistrict">
                <option value="">-- select one -- </option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputDate"><b>City</b></label>
            <input type="text" class="form-control" id="inputDate">
          </div>

          
    </form>   
</div>
<div class="container" >
    <form class="row">
        <div class="col-12 bg-danger titleCS" >
              <h3>Blood Bank Details</h3>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-md-6">
                <label for="inputname" class="col-form-label"><b> Blood Bank Name</b></label>
                <input type="text" id="inputname" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            
            <div class="col-md-6">
              <label for="inputHname" class="col-form-label"><b>Parent Hospital Name</b></label>
              <input type="text" id="inputHname" class="form-control" aria-describedby="passwordHelpInline">
            </div>
           
            <div class="col-md-4">
              <label for="inputHname" class="col-form-label"><b>Short Name</b></label>
              <input type="text" id="inputHname" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="category" class="col-form-label"><b>Category</b></label>
              <select class="form-control" id="category">
                <option value="">-- select one -- </option>
                <option value="">Goverment</option>
                <option value="">Private</option>
                <option value="">Charitable</option>
                <option value="">Red Cross</option>
            </select>
            </div>
            <div class="col-md-4">
              <label for="CPerson" class="col-form-label"><b>Contact Person</b></label>
              <input type="text" id="CPerson" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="email" class="col-form-label"><b>Email</b></label>
              <input type="email" id="email" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="Cnumber" class="col-form-label"><b>Contact No.</b></label>
              <input type="tel" id="Cnumber" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="Lnumber" class="col-form-label"><b>License No.</b></label>
              <input type="" id="Lnumber" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="Fdate" class="col-form-label"><b>From Date</b></label>
              <input type="date" id="fdate" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
              <label for="Tdate" class="col-form-label"><b>To Date</b></label>
              <input type="date" id="Tdate" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-md-4">
                <label for="Cfacility" class="col-form-label"><b>Category</b></label>
                <select class="form-control" id="Cfacility">
                  <option value="">-- select one -- </option>
                  <option value="">Yes</option>
                  <option value="">No</option>
               </select>
              </div>
            
          </div>
          <div class="col-12 last-btn">
            <br>
            <input type="submit" class="btn btn-danger" name="Submit">
          </div>
    </form>   
</div>
<div class="container CSchedule" ></div>
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="district.js"></script>


<!-- Footer -->
<!-- ================================================================================================================================================================================================================================== -->
</section>
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
