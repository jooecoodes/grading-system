$(document).ready(function() {
    $("#logoutBttn").on("click", function() {
        $.ajax({
            type: "POST",
            url: "../logout.php",
            data: {},
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            }
        })
    })
    $("#studentForm").on("submit", function() {
        console.log("student form submitted")
        let studLrn = $("#studentLrn").val();
        let studFname = $("#studentFname").val();
        let studLname = $("#studentLname").val();

        $.ajax({
            type: "POST",
            url: "teacher.php",
            data: {
                studLrn: studLrn,
                studFname: studFname,
                studLname: studLname,
            },
            success: function(response) {
                alert(response)
            },
            error: function(error) {
                console.error(error);
            },
        })
    })
})