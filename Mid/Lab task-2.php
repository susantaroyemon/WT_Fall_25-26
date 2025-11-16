<!DOCTYPE html>
<html>
<head>
    <center>
<h1 > Student Registration </h1>
</center>
</head>
<body>
    <center>
        <form onsubmit="return handleRegister()">
            <table>
            <tr>
<td>Full Name: <br></td>
</tr>
<tr>
<td><input type= "text" id= "name"><br></td>
    
</tr>
<tr>
<td>Email:<br></td>
</tr>
<tr>
<td><input type= "text" id="email"><br></td>
    
</tr><tr>
    <tr>
<td>Password:<br></td>
</tr>
<tr>
<td><input type= "text" id="pass"><br></td>
    
</tr><tr>
    <tr>
<td>Confirm Password:<br></td>
</tr>
<tr>
<td><input type= "text" id="cpass"><br></td>
    
</tr><tr>
    </tr>

  <tr><td><button type="submit">Register</button></td> </tr>

</table>
</form>
</center>

<center>
    <form onsubmit="return handleCourse()">
<table>
  <tr>
    <td>
<h1 > Course Registration </h1>
</td>
</tr>
<tr>
<td>Course Name: <br></td>
</tr>
<tr>
<td><input type= "text" id="course"><br></td>
    
</tr>
<tr><td><button type="submit" >Add Course</button></td> </tr>

</table>
</form>
</center>
<div id="error"></div>
  <div id="output"></div>
 <script>
    function handleRegister() {
        var name = document.getElementById("name").value.trim();
        var name = document.getElementById("email").value.trim();
        var name = document.getElementById("pass").value.trim();
        var name = document.getElementById("cpass").value.trim();

        var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");

        if (name === "" || email === "" || pass === "" || cpass === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
      if (pass!==cpass) {
        errorDiv.innerHTML = " Password and Confirm Password not matched.";
        return false;

         outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>`;
      }
    }
    function handleCourse() {
        var course = document.getElementById("course").value.trim();
        

        var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");

        if (course === "" ) {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
    }
    </script>
    </body>
    </html>