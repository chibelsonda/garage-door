<footer>

<div class="main-footer">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 col-md-3">
                1
            </div>
            <div class="col-12 col-md-3">
                2
            </div>
            <div class="col-12 col-md-3">
                3
            </div>
            <div class="col-12 col-md-3">
                4
            </div>
        </div>
    </div>
</div>

 <div class="sticky-footer footer fixed-bottom mt-auto py-3 bg-light">
    <div class="container">
        <div class="text-center">
            <button type="button" class="btn btn-light text-dark me-2">BOOK AN APOINTMENT</button>
            <button type="button" class="btn btn-primary">
                <img loading="lazy" src="./assets/img/phone-.svg" alt="" width="30">CALL:617-693-5485
            </button>
        </div>
    </div>
 </div>

</footer>

<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script> 
  let navbar = document.getElementById("nav-section");
  let subheaderLogo = document.getElementById("subheader-logo");
  let navOffset = navbar.offsetTop;
  
  subheaderLogo.style.display = 'none';

  window.addEventListener("scroll", () => {
    if (window.scrollY >= navOffset) {
        navbar.classList.add("fixed-top");
        subheaderLogo.style.display = 'block';

    } else {
        navbar.classList.remove("fixed-top");
        subheaderLogo.style.display = 'none';
    }

  });
</script>

</body>
</html>