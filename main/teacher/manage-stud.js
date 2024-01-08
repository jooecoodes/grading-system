$(document).ready(function() {
    let studTable = $("#studTable");
    let studThead = $("#studThead");
    let studTbody = $("#studTableBody");
    $("#studTableBody").on('click', '.editBttn, .deleteBttn', function() {
        console.log("clicked");
        // Access the data-key attribute to get the unique identifier
        var dataToken = $(this).data('token');
    
        // Determine if it's an edit or delete button
        if ($(this).hasClass('editBttn')) {
            // Edit button clicked
           location.href="../student/?user="+dataToken;
            // Implement your edit logic here
        } else if ($(this).hasClass('deleteBttn')) {
            // Delete button clicked
            console.log('Delete button clicked for data-token:', dataToken);
            // Implement your delete logic here
        }
    });
    $("#subjectBttn").on("click", function(){
        location.href="./subject/sem_select.php";
    })
    $("#testBttn").on("click", function(){
        studTbody.empty();
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
    $(".edit-btn").click(function () {
        console.log($(this).data('index'));
        let dataIndex = $(this).data('index');
        
      })
    function displayStudDataToTab(value, studTbody) {
        let html = `
            <tr class="dataRow" data-key="${value['id']}">
                <td>${value['id']}</td>
                <td>${value['LRN']}</td>
                <td>${value['fname']}</td>
                <td>${value['lname']}</td>
                <td>${value['section']}</td>
                <td>${value['adviser']}</td>
                <td><button class="editBttn" onclick="buttonClicked(this)" data-token="${value['token']}">Edit</button></td>
                <td><button class="deleteBttn" onclick="buttonClicked(this)" data-token="${value['token']}">Delete</button></td>
                <td><button class="gradeBttn" onclick="gradeBttnClicked(this)" data-token="${value['token']}">Grade</button></td>
            </tr>
        `;
        studTbody.append(html);
    }
    function buttonClicked(bttn){
    var token = $(bttn).data("token");
    location.href="../student/?user="+token;
    console.log(token);
    }
    function gradeBttnClicked(gradeBttn){
        var token = $(gradeBttn).data("token");
        location.href="grade/sem_select.php?user="+token;
        
    }
})
function gradeBttnClicked(gradeBttn){
    var token = $(gradeBttn).data("token");
    location.href="grade/sem_select.php?user="+token;
    
}