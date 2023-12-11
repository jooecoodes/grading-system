$(document).ready(function() {
    let studTable = $("#studTable");
    let studThead = $("#studThead");
    let studTbody = $("#studTbody");
    $("#testBttn").on("click", function(){
        $.ajax({
            type: "POST",
            url: "query-stud.php",
            data: {fetchStud: true},
            success: function(response) {
                let responseArray = JSON.parse(response);
                console.log(responseArray);
                responseArray.forEach(function(obj) {
                    for(let key in obj) {
                        console.log(key, obj[key]);
                    }
                })
                // studTbody.append(html)
            },
            error: function(error) {
                console.error(error);
            }
        })
    })
})