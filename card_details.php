<?php
include_once './header.php'; 
?>

<main class="main">
    <div class="container">
        <div class="row mx-1 my-1 justify-content-center">
            <h1 class="my-4 text-white text-center fw-bold">Card Details</h1>
            <div class="col-12 col-lg-7 px-3 px-md-5 py-4 bg-white rounded">
                <form id="cardDetailsForm">

                <input type="hidden" id="firstName" value="<?= $_GET['first_name'] ?? null ?>">
                <input type="hidden" id="lastName" value="<?= $_GET['last_name'] ?? null ?>">
                <input type="hidden" id="email" value="<?= $_GET['email'] ?? null ?>">
                <input type="hidden" id="phoneNumber" value="<?= $_GET['phone_number'] ?? null ?>">
                <input type="hidden" id="address" value="<?= $_GET['address'] ?? null ?>">
                <input type="hidden" id="city" value="<?= $_GET['city'] ?? null ?>">
                <input type="hidden" id="state" value="<?= $_GET['state'] ?? null ?>">

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="cardType" type="radio" class="form-check-input" value="1" required>
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="cardType" type="radio" class="form-check-input" value="2" required>
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                </div>

                <div class="row gy-3 mb-5">
                    <div class="col-md-12">
                        <label for="cc-number" class="">Card number <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="cardNumber" placeholder="Card Number" required>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="cc-expiration" class="">Expiration (mm/yy) <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="cardExpiration" placeholder="Expiration" required>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="">CVV <span class="text-muted">*</span></label>
                        <input type="text" class="form-control rounded-0" id="cardCvv" placeholder="CVV" required>
                        <div class="invalid-feedback">
                            Security code required
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

