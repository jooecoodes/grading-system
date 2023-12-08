$(document).ready(function() {
    $("#studentGradeBttn").on("click", function() {
       $.ajax({
            
       }) 
    });
    $("#modifySubNumForm").on("submit", function() {
        let numOfSub = $("#numOfSub").val();

        for(let i=0;i<numOfSub)
        // $.ajax({
        //     type: "POST",
        //     url: "admin.php",
        //     data: {numOfSub: numOfSub},
        //     success: function(response) {
        //         console.log(response);
        //     },
        //     error: function(error) {
        //         console.error(error);
        //     }
        // })
        
    })
});