function showVerificationForm() {
    var new_password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    if(new_password === "" || confirm_password === ""){
        alert('You must enter a passoword');
    } else{
        document.getElementById('verification_form').style.display = "block";
    }
}

function hideVerificationForm() {
    document.getElementById('verification_form').style.display = "none";
}

$('#SendCode').click(function (event){
    var id = document.getElementById("code_id").value;
    var new_password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (new_password != confirm_password){
        alert("Passwords must be the same.");
        return false;
    }

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
});

// $('#code_verification').submit(function (event){
//     // var test = document.getElementById("password").value;
//     var id = document.getElementById("code_id").value;
//     event.preventDefault();
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         type: "POST",
//         url: "/" + id + "/edit_profile/verifyCode",
//         data: $('#code_verification').serialize(),
//         cache: false,
//         processData: false,
//         timeout: 8000,
//         dataType: 'json',
//         success: function (data) {
//             console.log(data);
//         },
//         error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
//             console.log(JSON.stringify(jqXHR));
//             console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
//         },
//     });

// });