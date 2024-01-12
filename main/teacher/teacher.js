$(document).ready(function () {
  $("#numberOfStudBttn").on("click", function (e) {
    let numStud = $("#numberOfStud").val();
   location.href="?stud_no="+numStud;
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
