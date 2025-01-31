<?php
include_once './header.php'; 
?>
 <main class="main">
    <div class="container">
        <div class="row mx-1 my-1 justify-content-center">
            <h1 class="my-4 text-white text-center fw-bold">User Details</h1>
            <div class="col-12 col-lg-7 px-3 px-md-5 py-4 bg-white rounded">
                <form id="userDetailsForm">
            
                <div class="row g-3 mb-5">
                    <div class="col-sm-6">
                        <label for="firstName" class="">First name <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="firstName" placeholder="First Name" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="">Last name <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="lastName" placeholder="Last Name" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="">Email <span class="text-muted">*</span></label>
                        <input type="email" class="form-control rounded-0" id="email" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phoneNumber" class="">Phone Number <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="phoneNumber" placeholder="Phone Number" required>
                    </div>

                    <div class="col-12">
                        <label for="address" class="">Address <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="address" placeholder="Address" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="">City <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="city" placeholder="City" required>
                        <div class="invalid-feedback">
                            City code required.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="state" class="">State <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="state" placeholder="State" required>
                        <div class="invalid-feedback">
                            State code required.
                        </div>
                    </div>
                </div>

                <button class="w-100 btn btn-primary btn-md primary-button fw-bold" type="submit">NEXT</button>
                </form>
            </div>
        </div>
    </div>

 </main>

<?php
include_once './footer.php';
?>