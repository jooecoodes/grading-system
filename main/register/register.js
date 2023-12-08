$(document).ready(function() {
    $("#registrationForm").on("submit", function(e) {
        e.preventDefault();
        console.log("Executed");
        let email = $("#emailField").val();
        let password = $("#passwordField").val();
        let confPwd = $("#confPwdField").val();
        let strand = $("#strandField").val();
        let token = $("#tokenField").val();

        console.log(email);
        $.ajax({
            type: "POST",
            url: "register.php",
            data: { 
                email: email,
                password: password,
                token: token, 
                confpwd: confPwd, 
                strand: strand,
            },
            success: function (response) {
                console.log(response);
                if(response == "Email invalid") {
                    alert('Email is invalid');
                }
                
            },
            error: function (xhr, status, error) {
                console.error("Error:", status, error);
            },
            complete: function (xhr, status) {
                console.log("Complete:", status);
            },
        });
        
    });
});