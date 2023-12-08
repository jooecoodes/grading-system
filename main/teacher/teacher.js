$(document).ready(function() {
    $("#studentForm").on("submit", function() {
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
                console.log(response);
            },
            error: function(error) {
                console.error(error);
            },
        })
    })
})