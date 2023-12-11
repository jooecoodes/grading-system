$(document).ready(function() {
    $("#registrationForm").on("submit", function(e) {
        e.preventDefault();
        console.log("Executed");
        let teacherFname = $("#teacherFname").val();
        let teacherLname = $("#teacherLname").val();
        let email = $("#emailField").val();
        let password = $("#passwordField").val();
        let confPwd = $("#confPwdField").val();
        let strand = $("#strandField").val();
        let token = $("#tokenField").val();
        let section= $("#sectionField").val();
        let grade = $("#gradeField").val();

        console.log(email);
        $.ajax({
            type: "POST",
            url: "register.php",
            data: { 
                fname: teacherFname,
                lname: teacherLname,
                email: email,
                password: password,
                token: token, 
                confpwd: confPwd, 
                strand: strand,
                section: section,
                grade: grade,
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