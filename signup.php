<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <script src="https://kit.fontawesome.com/decdc0c2fa.js" crossorigin="anonymous"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
        .nav-item-middle{
            border-right: 2px solid rgb(221, 221, 221);
        }
    </style>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
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

<!-- Signup form -->
    <!-- ============================================================================================================================================== -->
    <div class="container" style="width: 33%;">
    <div class="signinForm m-4 p-4 rounded shadow " >
        <form
        name="signInForm"
        action="/ress/SignupInfo.html"
        onsubmit="validateform()"
        method="post"
      >
        <input
          type="hidden"
          name="_token"
          value="JvjSQA3XUeRZ8a8vFxPseM7TV3YbOD7TlKZntJcr"
          />
          <!-- <div class="alert alert-success text-center shadow-sm" role="alert">
          Donor Login !
        </div> -->
        
        <div>
            <label for="id_username" class="form-label"
            >Email or Phone Number
        </label>
        <input
            type="text"
            name="username"
            class="form-control"
            required
            id="id_username"
            placeholder="Email or Phone Number"
            value=""
            />
        </div>

        <div class="mt-3">
            <label for="id_password" class="form-label">Password</label>
            <input
            type="password"
            name="password"
            class="form-control"
            required
            id="id_password"
            placeholder="password"
            />
            <span class="form-error"></span>
            
        </div>
        
        
        <div class="mt-3">
            <label for="id_password" class="form-label">Confirm Password</label>
            <input
            type="password"
            name="cpassword"
            class="form-control"
            required
            id="id_cpassword"
            placeholder="password"
            />
            <span class="form-error"></span>
            
        </div>
        
        <input
        id="submitBtn"
        class="btn btn-danger my-3 w-100"
        type="submit"
        value="Sign Up"
        onsubmit="validateform()"
        />
        
        <span class="text-dark d-block text-center"
        >Already have any account ?<a
            href="/signin.php"
            class="text-danger text-decoration-none"
            >
            Login</a
            ></span
            >
          </form>
          <script type="text/javascript">
           

          </script>
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