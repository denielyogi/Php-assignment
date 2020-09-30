<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume_form</title>

    <style>
        label {
            width: 150px;
            display: inline-block;
            padding: 3px;
        }

        table,
        td,
        th {
            border: 2px solid black;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 78%;
        }
    </style>

</head>

<body onload="disableSubmit()" >
    <center><h1 >Resume Maker</h1></center>
    
    
    <form action="resume.php" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required><br>
        <label for="email">Email id:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone no:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br><br>

        <label for="career">Career Objective:</label>
        <textarea rows="1" cols="100" name="career" required></textarea><br>
        <label for="experience">Work experience:</label>
        <textarea rows="1" cols="100" name="experience" required></textarea><br><br>

       Education Qualification: <br>
       <label for="cour1">Course 1: </label>
        <input type="text" id="cour1" name="cour1" ><br>
        <label for="sch1">School/University: </label>
        <input type="text" id="sch1" name="sch1" ><br>
        <label for="boa1">Board/University: </label>
        <input type="text" id="boa1" name="boa1" ><br>
        <label for="pass1">Passing Year: </label>
        <input type="text" id="pass1" name="pass1" ><br>
        <label for="cgpa1">Cgpa / % of marks: </label>
        <input type="text" id="cgpa1" name="cgpa1" ><br><br>
        
        <label for="cour2">Course 2: </label>
        <input type="text" id="cour2" name="cour2" ><br>
        <label for="sch1">School/University: </label>
        <input type="text" id="sch2" name="sch2" ><br>
        <label for="boa2">Board / University: </label>
        <input type="text" id="boa2" name="boa2" ><br>
        <label for="pass2">Passing Year: </label>
        <input type="text" id="pass2" name="pass2" ><br>
        <label for="cgpa2">Cgpa / % of marks: </label>
        <input type="text" id="cgpa2" name="cgpa2" ><br><br>

        <label for="ach">Other achievements:</label>
        <textarea rows="1" cols="100" name="ach" required></textarea><br>

        <label for="train">Trainings undertaken:</label>
        <textarea rows="1" cols="100" name="train" required></textarea><br>

        <label for="skills">Softs skills & professional Strength:</label>
        <textarea rows="1" cols="100" name="skills" required></textarea><br>
        

        <br><br>
        <div id="personal">
            Personal Information: <br>
            <label for="dob">Date of birth: </label>
            <input type="date" id="dob" name="dob" required><br>

            <label for="gender" required>Gender: </label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>

            <label for="status">Marital Status: </label>
            <input type="radio" id="single" name="status" value="single">
            <label for="single">Single</label>
            <input type="radio" id="married" name="status" value="Married">
            <label for="married">Married</label><br>

            <label for="nationality">Nationality: </label>
            <input type="text" id="nationality" name="nationality" required><br>

            <label for="place">Place: </label>
            <input type="text" id="place" name="place" required><br>

            <label for="date">Date: </label>
            <input type="date" id="date" name="date" required><br>

        </div>

        <script>
            function disableSubmit() {
             document.getElementById("submit").disabled = true;
            }
           
             function activateButton(element) {
           
                 if(element.checked) {
                   document.getElementById("submit").disabled = false;
                  }
                  else  {
                   document.getElementById("submit").disabled = true;
                 }
           
             }
           </script>
           <input type="checkbox" name="declaration" id="declaration" onchange="activateButton(this)">Declaration: I hearby declare that all the above information is correct to the best of my knowledge.  
           <br><br>

        <button type="submit"  value="Submit" id="submit">Submit</button>
        <button type="reset"  value="reset">Reset</button>







</body>

</html>