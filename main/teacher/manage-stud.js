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
                let responseArray = JSON.parse(response);
                console.log(responseArray);
                responseArray.forEach(function(obj) {
                    // for(let key in obj) {
                    //     console.log(key, obj[key]);
                    // }
                    displayStudDataToTab(obj, studTbody);
                })
            
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