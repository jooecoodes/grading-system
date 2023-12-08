$(document).ready(function () {
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();
    let email = $("#emailField").val();
    let password = $("#passwordField").val();
    $.ajax({
        type: "POST",
        url: "login.php",
        data: {email: email, password: password},
        success: function(response) {
            alert(response);
            if(response == "User login successfully") {
                
                location.href = "../";
            } 
        },
        error: function(error) {
            console.error(error);
        },
    });
  });
});
