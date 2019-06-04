function showVerificationForm() {
    var verificationModal = document.getElementById('verification_form');
    var verificationModalClass = verificationModal.className;

    var showModal = verificationModalClass + " is-active";
    verificationModal.className = showModal;
}

function hideVerificationForm() {
    var verificationModal = document.getElementById('verification_form');
    verificationModal.className = "modal";

}

/**
 * Setting Password for the first time.
 */
$('#SendCodeSet').click(function (event) {
    var new_password = document.getElementById("password").value;
    var confirm_password = document.getElementById("password-confirm").value;

    var needs_phone = false;

    var phone_mobile = document.getElementById("phone_mobile");

    if (phone_mobile != null){
        phone_mobile = phone_mobile.value;
    }

    if (new_password != confirm_password || new_password == "" || confirm_password == "") {
        alert("Passwords must be the same.");
        return false;
    } else if (phone_mobile == "") {
        alert("You must enter a phone number for SMS verification.");
    } else {
        event.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/password/set/sendCode",
            data: $('#set_code_validation').serialize(),
            cache: false,
            processData: false,
            timeout: 8000,
            dataType: 'json',
            success: function (data) {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                passed = true;
            },
        });
        showVerificationForm();
    }
});