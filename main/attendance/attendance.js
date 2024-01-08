$(document).ready(function (){
   
    let scanner =  new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
      console.log(content);
      $.ajax({
        type: "post",
        url: "attendance.php",
        data: {token: content,
        getStudData: true,
        
        },
        success: function(response){
            console.log(response);
            let parseJson = JSON.parse(response);
            let pfp = (parseJson.profile == "") ? "default.png" : parseJson.profile;
            let pathDir = "../../assets/profile/"
            let fullPathDirPfp = pathDir + pfp;
            
            console.log(parseJson);
            $("#pfpField").attr("src", fullPathDirPfp);
            $("#fnameField").val(parseJson.fname);
            $("#lnameField").val(parseJson.lname);
            $("#grd_lvlField").val(parseJson.grd_lvl);
            $("#strandField").val(parseJson.strand);
            $("#sectionField").val(parseJson.section);
            $("#adviserField").val(parseJson.adviser);
           
           

            
        },
        error: function(error){
           console.log(error);
        },
    })
    });
    $("#attendanceForm").on("submit", function (e){
    e.preventDefault();

    let fname = $("#fnameField").val();
    let lname = $("#lnameField").val();
    let grd_lvl = $("#grd_lvlField").val();
    let strand = $("#strandField").val();
    let section = $("#sectionField").val();
    let adviser = $("#adviserField").val();
    let date = new Date();

// Get the year, month, day, hour, minute and second
    let year = date.getFullYear();
    let month = date.getMonth() + 1; // Month is zero-based
    let day = date.getDate();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();

    // Pad with zero if needed
    month = month < 10 ? '0' + month : month;
    day = day < 10 ? '0' + day : day;
    hour = hour < 10 ? '0' + hour : hour;
    minute = minute < 10 ? '0' + minute : minute;
    second = second < 10 ? '0' + second : second;

    // Format the date string
    let dateString = `${year}-${month}-${day} ${hour}:${minute}:${second}`;

      $.ajax({
          type: "POST",
          url: "attendance.php",
          data: {
            fname: fname,
            lname: lname,
            grd_lvl: grd_lvl,
            strand: strand,
            section: section,
            adviser: adviser,
            date: dateString
            

          },
          success:       function(response){
          alert(response);
      },
      error: function(error){
       console.error(error);
  }
      })
  });
    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });


    // attendance table


    // function fetchAttendance() {
    //   $.ajax({
    //     url: "import.php",
    //     type: "POST",
    //     data: {
          
    //     },
    //     success: function(response) {
    //       attendanceObj = JSON.parse(response);
    //       console.log(attendanceObj);

    //     },
    //     error: function(erorr) {
    //       console.error(error);
    //     }

    //   })
    // }
    
    
})
