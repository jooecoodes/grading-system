$(document).ready(function() {
    let studTable = $("#studTable");
    let studThead = $("#studThead");
    let studTbody = $("#studTableBody");
    $("#testBttn").on("click", function(){
        $.ajax({
            type: "POST",
            url: "query-stud.php",
            data: {fetchStud: true},
            success: function(response) {
                try {
                    let responseArray = JSON.parse(response);
                    console.log(responseArray);

                    // Check if the response is an array before using forEach
                    if (Array.isArray(responseArray)) {
                        responseArray.forEach(function(obj) {
                            displayStudDataToTab(obj, studTbody);
                        });
                    } else {
                        console.log("Response is not an array:", responseArray);
                    }
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            
            },
            error: function(error) {
                console.error(error);
            }
        })
    })

    function displayStudDataToTab(value, studTbody) {
        let html = `
            <tr data-key="${value['id']}">
                <td>${value['id']}</td>
                <td>${value['LRN']}</td>
                <td>${value['fname']}</td>
                <td>${value['lname']}</td>
                <td>${value['section']}</td>
                <td>${value['adviser']}</td>
                <td><button class="editBttn" data-key="data">Edit</button></td>
                <td><button class="deleteBttn" data-key="data">Delete</button></td>
            </tr>
        `;
        studTbody.append(html);
    }
})