<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-RESSQ</title>
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
                  <li><a class="dropdown-item" href="/campSchedule.php">Schedule Blood Donation Camp</a></li>
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

<!-- =============================================================================================================================================================================================================================================================== -->

    <div class="shadow-sm">
        <div class="container col-xxl-8 px-4 py-5 hero">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6 mt-xl-0">
                    <h1 class="headline display-5 fw-bold lh-1 mb-3 text-center text-lg-start">Lorem ipsum dolor, sit amet consectetur adipisicing.</h1>
                    <p class="lead text-center text-lg-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime pariatur quisquam repellendus illo voluptate laudantium eius amet nulla blanditiis!
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center justify-content-lg-start">
                        <a href="/signin.php"
        class="btn btn-danger btn-lg px-4 me-md-2 d-flex align-items-center justify-content-center">
        Donate Blood</a>
                        <a href="/bloodAvailable.php" class="btn btn-outline-danger btn-lg px-4">Need for Blood</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column align-items-center mb-5">
                    <img src="/img/IMG_0016.jpg" class="d-block mx-lg-auto img-fluid" width="700" height="500">
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================================================================================================================= -->
 
    <section id="benefits" class="benefits">
        <div class="container" data-aos="fade-up">
    
            <header class="section-header">
                <h1 class="text-danger">Benefits of Donating Blood</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat amet officiis facilis, eos molestias quibusdam.</p>
            </header>
    
            <div class="row">
    
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center mb-lg-5">
                    <img src="/img/IMG_0013.jpg" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    <span class="text-center imgCreditLink"></span>
                </div>
    
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="fa-solid fa-check fa-2xl" style="color: #000000; "></i> 
                                <h3>   Lorem ipsum dolor sit amet.
                                </h3>
                            </div>
                        </div>
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                              
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
    
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>   
        </div>
    <!-- =================================================================================================================================================== -->
    <!-- FAQ -->

  </div>
</sectio>
    <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h1 class="text-danger">Some useful information about blood donation</h1>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                Condition that make you eligible to donate Blood
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>- You must be at least 17 years old</li>
                                    <li>- You must weigh at least 50 kg..</li>
                                    <li>- The percentage of haemoglobin must be appropriate for© the donation.</li>
                                    <li>- Pregnant women are not eligible for©donation, wait 6 weeks after delivery</li>
                                    <li>- The donor must be free of certain diseases that prevent donation.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                what is donor supposed to do before donating blood
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>- Get enough sleep, at least 5 hours.</li>
                                    <li>- Eat a meal before you donate.</li>
                                    <li>- Bring an ID card to©.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                               Contradiction to Donation
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                <ul>
                                    <li>- The person has not made any donations in the past three months.</li>
                                    <li>- That the donor has not had any recent surgery.</li>
                                    <li>- The donor suffers from any of the following diseases: High blood pressure, diabetes, malaria at least within the last two years©, kidney©failure, enlarged liver, chest disease, rheumatic fever, thyroid disease, hereditary©©morrhage,©and hemorrhage©.</li>
                                    <li>- Pregnant people are not eligible for©donation, wait 6 weeks after delivery.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                How long does donation process takes ?
                            </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Usually 20 minutes. The period to be separated between each donation and the other for the same person is 3 months because this is the ideal period for the©reproduction of blood cells.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                Some recomadation for Donor after Donation process
                            </button>
                        </h2>
                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                <ul>
                                    <li>- A rest of 10 minutes.</li>
                                    <li>- Do not exert yourself excessively physically within two hours of donating.</li>
                                    <li>- Drink fluids to replenish the body.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                               Why should I be blood Donor?
                            </button>
                        </h2>
                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                <ul>
                                    <li>- Every three seconds, a person in the world needs a blood transfusion.</li>
                                    <li>- Your single donation can save 3 people.</li>
                                    <li>- The blood donation process restores the vitality and activity of the body through the renewal of blood cells.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
<!-- =====================================================================================================================================================================================================-->

</section>
<section class="cta py-5 my-5 bg-dark">

<div class="container d-flex flex-column align-items-center">
    <p class="text-white fs-2 text-center">Help people in need of blood !</p>
    <p class="text-white text-center fs-5">The best way to help is of course to register as a blood donor, if you can't do that, you can still help by sharing this website on social media.</p>
    <p class="text-white fs-3">Share on:</p>
</div>

<div class="shareBtns container d-flex flex-column flex-sm-row flex-wrap align-items-center justify-content-center">

    <a href="#" class="btn d-flex align-items-center justify-content-center" target="_blank" rel="nofollow">
        
        <span class="ms-2"><i class="fa-brands fa-facebook-f fa-2xl" style="color: #ffffff;"></i></span>
    </a>

    <a href="#" class="messengerShare btn d-flex align-items-center justify-content-center my-3 my-lg-0 mx-sm-3" target="_blank" rel="nofollow">
        <span class="ms-2"><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></span>
    </a>

    <a href="#" class="whatsappShare btn d-flex align-items-center justify-content-center" target="_blank" rel="nofollow">
        <span class="ms-2"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i></span>
    </a>

</div>

</section>
<section class="stats py-5 container">

<h2 class="text-danger fs-1 text-center mb-4">Types of Blood</h2>

<div class="d-flex flex-wrap align-items-center justify-content-center">

                <a href="/donors/search?blood_group=1"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">A+</span>
            
        </a>
                <a href="/donors/search?blood_group=2"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">A-</span>
          
        </a>
                <a href="/donors/search?blood_group=3"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">B+</span>
          
        </a>
                <a href="/donors/search?blood_group=4"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">B-</span>
          
        </a>
                <a href="/donors/search?blood_group=5"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">O+</span>
            
        </a>
                <a href="/donors/search?blood_group=6"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">O-</span>
          
        </a>
                <a href="/donors/search?blood_group=7"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">AB+</span>
         
        </a>
                <a href="/donors/search?blood_group=8"
            class="statCard d-flex justify-content-center align-items-center mb-4 mx-2 shadow-lg text-decoration-none">
            <span class="bloodGroup text-danger">AB-</span>
           
        </a>
    
</div>

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
