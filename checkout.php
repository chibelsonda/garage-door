<?php

include_once './header.php'; 

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);

$card = [
    'card_type' => 1,
    'card_number' => '3423423423423',
    'card_exp_date' => '12/23'
];
$db->insert('payment_details', $card);

// echo $db->getLastInsertedId();


?>
 <main class="main">

    <div class="container">
        <div class="row mx-1 my-1 justify-content-center">
            <h2 class="mb-1 mt-1 text-white">Checkout</h2>
            <div class="col-12 col-lg-7 px-5 py-4 bg-white rounded">
                <form class="needs-validation" novalidate>
                
                <h4 class="mb-3">Personal Info</h4>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phoneNumber" class="form-label">Phone Number <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">City <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="city" placeholder="" required>
                        <div class="invalid-feedback">
                            City code required.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="state" class="form-label">State <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="state" placeholder="" required>
                        <div class="invalid-feedback">
                            State code required.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Card Details</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                </div>

                <div class="row gy-3">

                    <div class="col-md-12">
                        <label for="cc-number" class="form-label">Card number <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="cc-expiration" class="form-label">Expiration (mm/yy) <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV <span class="text-muted">*</span></label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-md primary-button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

 </main>
<?php
include_once './footer.php';
?>