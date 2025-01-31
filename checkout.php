<?php

include_once './header.php'; 

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);

$success = false;

$db->beginTransaction();
$customer = [
    'first_name' => $_GET['first_name'],
    'last_name' => $_GET['last_name'],
    'address' => $_GET['email'],
    'city' => $_GET['address'],
    'state' => $_GET['city'],
    'phone' => $_GET['phone_number'],
    'email' => $_GET['first_name'],
];
$db->insert('customer_details', $customer);

$card = [
    'customer_detail_id' => $db->getLastInsertedId(),
    'card_type' => $_GET['card_type'],
    'card_number' => $_GET['card_number'],
    'card_exp_date' => $_GET['card_expiration'],
    'card_cvv' => $_GET['card_cvv']
];
$db->insert('payment_details', $card);

$db->commit();

$success = true;

?>



<main class="main">
    <div class="container">
    <?php
        if ($success) {
            echo '<div class="alert alert-success mt-3" role="alert">
                    The item has been successfully checkout.
                </div>';
        }
    ?>
    </div>
</main>







<?php
include_once './footer.php';
?>