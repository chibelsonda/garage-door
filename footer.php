<footer>

<div class="main-footer">
    <div class="container-flex">
        <div class="row pb-5 pt-5 px-3 px-lg-5">
            <div class="col-sm-12 col-md-3 my-3">
                <img src="assets/img/logo.png" alt="logo">

                <p class="mt-4">
                Our mission is to provide you with 100% customer satisfactory as well as take care of our customers by excelling in creating the garage door that you want and the service that you deserve.
                </p>
            </div>
            <div class="col-sm-12 col-md-3 my-3">
                <h3 class="fw-bold">SERVICES</h3>
                <ul>
                    <li><a href="#" class="text-white text-decoration-none">Garage Door Repairs </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Garage Cable Repairs </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Automatic Door Openers </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Broken Springs </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Commercial Repair </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Commercial Cables </a></li>
                    <li><a href="#" class="text-white text-decoration-none">Commercial Openers</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Commercial Springs</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 my-3">
                <h3 class="fw-bold">QUICK LINKS</h3>
                <ul>
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Shop</a></li>
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Servies</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Location</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Design</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Gallery</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Certificate</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Terms Of Service</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 my-3">
                <h3 class="fw-bold">CONTACTS</h3>
                <ul>
                    <li>
                        <a href="#" class="nav-link text-white">617-693-5485</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">Email Us</a>
                    </li>
                    <li>
                        Commonwealth Ave Unit 715 <br>
                        Boston, MA 02135
                    </li>
                    <li>
                        Monday - Thursday : 8 AM - 6 PM <br>
                        Friday - Sunday : Closed
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

 <div class="sticky-footer footer fixed-bottom mt-auto bg-light">
    <div class="container">
        <div class="row py-2">
            <div class="text-center">
                <button type="button" class="yellow-btn">BOOK AN APOINTMENT</button> <span class="text-warning fw-bold">OR</span>
                <a href="#" class="black-btn">
                    <img loading="lazy" src="./assets/img/phone-.svg" alt="" width="30">CALL:617-693-5485
                </a>
            </div>
        </div>
    </div>
 </div>

</footer>


<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/user.js"></script>

<script> 
  let navbar = document.getElementById("nav-section");
  let subheaderLogo = document.getElementById("subheader-logo");
  let contactNumber = document.getElementById("contact-number");
  let navOffset = navbar.offsetTop;
  
  subheaderLogo.style.display = 'none';

  window.addEventListener("scroll", () => {
    if (window.scrollY >= navOffset) {
        navbar.classList.add("fixed-top");
        navbar.classList.add("sticky-header")
        subheaderLogo.style.display = 'block';
        contactNumber.style.display = 'block';

    } else {
        navbar.classList.remove("fixed-top");
        navbar.classList.remove("sticky-header");
        subheaderLogo.style.display = 'none';
        contactNumber.style.display = 'none';
    }

  });
</script>

</body>
</html>