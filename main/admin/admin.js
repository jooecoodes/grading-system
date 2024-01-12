
$(document).ready(function(){
    let paragraph = $("#tokensStateIndicator");

    $("#generateBttn").on("click", function(event){
        // Prevent the default form submission behavior
        event.preventDefault();
        
        console.log("execute");
        
        // Call the generateToken function
        generateToken();

        $(this).prop("disabled", true);
    });

    function generateToken(){
        console.log("executed");
        
        let hidden = $("#generateToken").val();
        
        $.ajax({
            type: "POST",
            url: "admin.php",
            data: {
                generateToken: hidden,
            },
            success: function(response){
                paragraph.text(response);
                console.log(response);
            },
            error: function(error){
                console.error(error);
            },
        });
    }
});
