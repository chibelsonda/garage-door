<?php
include_once './header.php'; 

?>

<main class="main">
    <div class="container">
        <div class="row mx-1 my-1 justify-content-center">

            <h1 class="my-4 text-white text-center fw-bold">Summary</h1>
            <div class="col-12 col-lg-7 px-3 px-md-5 py-4 mb-5 bg-white rounded">
                <form id="checkoutForm">

                <input type="hidden" id="firstName" value="<?= $_GET['first_name'] ?? null ?>">
                <input type="hidden" id="lastName" value="<?= $_GET['last_name'] ?? null ?>">
                <input type="hidden" id="email" value="<?= $_GET['email'] ?? null ?>">
                <input type="hidden" id="phoneNumber" value="<?= $_GET['phone_number'] ?? null ?>">
                <input type="hidden" id="address" value="<?= $_GET['address'] ?? null ?>">
                <input type="hidden" id="city" value="<?= $_GET['city'] ?? null ?>">
                <input type="hidden" id="state" value="<?= $_GET['state'] ?? null ?>">

                <input type="hidden" id="cardType" value="<?= $_GET['card_type'] ?? null ?>">
                <input type="hidden" id="cardNumber" value="<?= $_GET['card_number'] ?? null ?>">
                <input type="hidden" id="cardExpiration" value="<?= $_GET['card_expiration'] ?? null ?>">
                <input type="hidden" id="cardCvv" value="<?= $_GET['card_cvv'] ?? null ?>">

                <h4 class="mb-3">Personal Info</h4>
                <div class="row g-3 mb-5">
                    <div class="col-sm-6">
                        <label class="form-label">First name</label> <br>
                        <label class="fw-bold"><?= $_GET['first_name'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Last name</label> <br>
                        <label class="fw-bold"><?= $_GET['last_name'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Email</label> <br>
                        <label class="fw-bold"><?= $_GET['email'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Phone Number</label> <br>
                        <label class="fw-bold"><?= $_GET['phone_number'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Address </label> <br>
                        <label class="fw-bold"><?= $_GET['address'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City </label> <br>
                        <label class="fw-bold"><?= $_GET['city'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-6">
                        <label for="state" class="form-label">State </label> <br>
                        <label class="fw-bold"><?= $_GET['city'] ?? null ?></label>
                        <hr class="my-1">
                    </div>
                </div>

                <h4 class="mb-3">Card Details</h4>

                <div class="row gy-3">
                    <div class="col-12">
                        <label class="form-label">Card Type</label> <br>
                        <label class="fw-bold"><?= ($_GET['card_type'] ?? null) ? 
                            ($_GET['card_type'] == 1 ? 'Credit Card' : 'Debit Card') : null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <label for="cc-number" class="form-label">Card number</label> <br>
                        <label class="fw-bold"><?= $_GET['card_number'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-4">
                        <label for="cc-expiration" class="form-label">Expiration (mm/yy)</label> <br>
                        <label class="fw-bold"><?= $_GET['card_expiration'] ?? null ?></label>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label> <br>
                        <label class="fw-bold"><?= $_GET['card_cvv'] ?? null ?></label>
                        <hr class="my-1">
                    </div>
                </div>

                <button class="w-100 btn btn-primary btn-md primary-button fw-bold mt-5" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>


</main>


<?php
include_once './footer.php';
?>

