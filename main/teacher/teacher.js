$(document).ready(function () {
  $("#numberOfStudBttn").on("click", function (e) {
    e.preventDefault();
    let minOfStud = 0;
    let maxOfStud = 10;
    let numOfStud = $("#numberOfStud").val();
    displayFields(numOfStud, maxOfStud, minOfStud);
    console.log(numOfStud);
  });
  $("#logoutBttn").on("click", function () {
    $.ajax({
      type: "POST",
      url: "../logout.php",
      data: {},
      success: function (response) {
        console.log(response);
      },
      error: function (error) {
        console.error(error);
      },
    });
  });
  $("#submitStudForm").on("click", function () {
    let numOfStud = $("#numberOfStud").val();

    let data = configData(numOfStud);
    let extractedData = extractData(data);
    console.log(data);
    $.ajax({
      url: "teacher.php",
      type: "POST",
      data: JSON.stringify(extractedData),
      contentType: "application/json; charset=utf-8",
      dataType: "text",
      async: false,
      success: function (response) {
          if (response.includes("Successfully inserted data")) {
            alert("Data successfully inserted");
        } else {
            alert("Insertion failed: " + response);
        }
      },
      error: function (error) {
        console.error(error);
      },
    });
  });
  function displayFields(numOfStud, max, min) {
    $("#studInputContainer").empty();
    if(numOfStud > max) {
        numOfStud = max;
    } else if (numOfStud < min){
        numOfStud = min;
    }
    
    for (let i = 0; i < numOfStud; i++) {
      let html = `
    
        <label for="studentLrn">LRN</label>
        <input max="12" type="text" name="student-lrn" id="studentLrn" pattern="[0-9]+"  placeholder="Enter LRN" data-key="${i}" required>
        <label for="studentFname">First Name</label>
        <input maxlength="20" type="text" name="student-fname" id="studentFname" placeholder="Enter First Name" data-key="${i}">
        <label for="studentLname">Last Name</label>
        <input maxlength="20" type="text" name="student-lname" id="studentLname" placeholder="Enter Last Name" data-key="${i}">
       
        `;
      $("#studInputContainer").append(html);
    }
  }
  function configData(numOfStud) {
    let data = [];
    let dataObject = {};
    for (let i = 0; i < numOfStud; i++) {
      let studLrnHtml = $(`input[data-key="${i}"]`).eq(0).val();
      let studFnameHtml = $(`input[data-key="${i}"]`).eq(1).val();
      let studLnameHtml = $(`input[data-key="${i}"]`).eq(2).val();
      dataObject = {
        studLrn: studLrnHtml,
        studFname: studFnameHtml,
        studentLname: studLnameHtml,
      };
      data.push(dataObject);
    }
    return data;
  }
  function extractData(data) {
    console.log(data);
    console.log(typeof data);
    console.log(typeof data[0]);
    console.log(typeof data[1]);
    let arrayValue = [];
    for (let key in data) {
      if (data.hasOwnProperty(key)) {
        let value = data[key];
        for (let key1 in value) {
          let htmlValue = value[key1];
          arrayValue.push(htmlValue);
        }
        console.log(key, value);
      }
    }
    let arraySplitted = splitArrayIntoSubarrays(arrayValue, 3);
    let arrayHolder = [];
    arraySplitted.forEach(function (student) {
      arrayHolder.push({
        studLrn: student[0],
        studFname: student[1],
        studLname: student[2],
      });
    });
    return arrayHolder;
  }
  function splitArrayIntoSubarrays(array, chunkSize) {
    const result = [];
    for (let i = 0; i < array.length; i += chunkSize) {
      const subarray = array.slice(i, i + chunkSize);
      result.push(subarray);
    }
    return result;
  }
});
