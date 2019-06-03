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


$('#SendCode').click(function (event){
    var id = document.getElementById("code_id").value;
    var new_password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    var test = $('#code_validation').serialize();

    //alert(test);

    if (new_password != confirm_password || new_password == "" || confirm_password == ""){
        alert("Passwords must be the same.");
        return false;
    } else {
        event.preventDefault();
        $.ajax({
            headers: { 
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            type: "POST",
            url: "/" + id + "/edit_profile/sendCode",
            data: $('#code_validation').serialize(),
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

/**
 * Showing and closing confirmation modal for deleting a user
 */
function deleteUserPopup(){
    var deleteModal = document.getElementById('deletePopup');
    var deleteModalClass = deleteModal.className;
    var showModal = deleteModalClass + " is-active";
    deleteModal.className = showModal;

}

function closeModal(){
    var deleteModal = document.getElementById('deletePopup');
    deleteModal.className = "modal";
}


