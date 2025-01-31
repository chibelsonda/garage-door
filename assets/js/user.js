$(document).ready(function(){
    $("#userDetailsForm").on('submit', function(event){
        event.preventDefault();

        let data = {
            'first_name': $('#firstName').val(),
            'last_name': $('#lastName').val(),
            'email': $('#email').val(),
            'phone_number': $('#phoneNumber').val(),
            'address': $('#address').val(),
            'city': $('#city').val(),
            'state': $('#state').val(),
        };

        window.location.href = 'card_details.php?' + $.param(data);
    });

    $("#cardDetailsForm").on('submit', function(event){
        event.preventDefault();

        let data = {
            'first_name': $('#firstName').val(),
            'last_name': $('#lastName').val(),
            'email': $('#email').val(),
            'phone_number': $('#phoneNumber').val(),
            'address': $('#address').val(),
            'city': $('#city').val(),
            'state': $('#state').val(),   

            'card_type': $('input[name="cardType"]:checked').val(), 
            'card_number': $('#cardNumber').val(), 
            'card_expiration': $('#cardExpiration').val(), 
            'card_cvv': $('#cardCvv').val(), 
        };
        
        window.location.href = 'info_summary.php?' + $.param(data);
    });

    $("#checkoutForm").on('submit', function(event){
        event.preventDefault();

        let data = {
            'first_name': $('#firstName').val(),
            'last_name': $('#lastName').val(),
            'email': $('#email').val(),
            'phone_number': $('#phoneNumber').val(),
            'address': $('#address').val(),
            'city': $('#city').val(),
            'state': $('#state').val(),   

            'card_type': $('#cardType').val(), 
            'card_number': $('#cardNumber').val(), 
            'card_expiration': $('#cardExpiration').val(), 
            'card_cvv': $('#cardCvv').val(), 
        };
        
        window.location.href = 'checkout.php?' + $.param(data);
    });


  });