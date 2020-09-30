<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign_1A_Resume</title>
    <style>
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

<body>
    <center>
        <h3>Resume</h3>
    </center>
    
    <?php
    echo "<h3>"; echo $_POST["name"]; echo "</h3>"; 
    echo "<p>"; echo  $_POST["address"]; echo "</p>" ;
    echo "<p>"; echo "Email ID:  "; echo $_POST["email"]; echo "</p>";
    echo "<p>"; echo "Mobile:  "; echo $_POST["phone"]; echo "</p>";
    echo "<hr>"; 
    echo "<h3>"; echo "CAREER OBJECTIVE:"; echo "</h3>";
    echo "<P>"; echo $_POST["career"]; echo "</P>"; 
    echo "<h3 style='display:inline'>"; echo "WORK EXPERIENCE:  "; echo "</h3>";
    echo "<p style='display:inline'>"; echo  $_POST["experience"]; echo "</p>";
    echo "<h3>"; echo "EDUCATION QULAIFICATION:"; echo "</h3>";

    
    
    
    
     
    
    echo "<table>"; 
        echo "<tr>";
            echo "<th>"; echo "Cources" ; echo "</th>";
            echo "<th>"; echo "School/College" ; echo "</th>";
            echo "<th>"; echo "Board/University" ; echo "</th>";
            echo "<th>"; echo "Passing Year" ; echo "</th>";
            echo "<th>"; echo "CGPA / % of Marks" ; echo "</th>";
        echo "</tr>";
        
        echo "<tr>";
            echo "<td>"; echo $_POST["cour1"]; echo "</td>";
            echo "<td>"; echo $_POST["sch1"]; echo "</td>";
            echo "<td>"; echo $_POST["boa1"]; echo "</td>";
            echo "<td>"; echo $_POST["pass1"]; echo "</td>";
            echo "<td>"; echo $_POST["cgpa1"]; echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>"; echo $_POST["cour2"]; echo "</td>";
            echo "<td>"; echo $_POST["sch2"]; echo "</td>";
            echo "<td>"; echo $_POST["boa2"]; echo "</td>";
            echo "<td>"; echo $_POST["pass2"]; echo "</td>";
            echo "<td>"; echo $_POST["cgpa2"]; echo "</td>";
        echo "</tr>";
        
        
        
    echo "</table>";
    echo "<h3>"; echo "OTHERS ACHIEVEMENTS:"; echo "</h3>";
    echo "<ul>" ;
        echo "<li>"; echo $_POST["ach"]; echo "</li>"; 
    echo "</ul>"; 
    echo "<h3>"; echo "Trainings undertaken:"; echo "</h3>";
    echo "<ul>" ;
        echo "<li>"; echo $_POST["train"]; echo "</li>"; 
    echo "</ul>";
     echo "<h3>"; echo "Softs skills & professional Strength:"; echo "</h3>";
    echo "<ul>" ;
        echo "<li>"; echo $_POST["skills"]; echo "</li>"; 
    echo "</ul>"; 
    echo "<h3>"; echo "PERSONAL INFORMATION:" ; echo "</h3>";

    echo "<ul>";
        echo "<li>"; echo "Date of Birth:&nbsp;&nbsp;&nbsp;";echo $_POST["dob"];echo "</li>"; 
        echo "<li>";echo "Marital status: &nbsp;&nbsp;";echo $_POST["status"];echo "</li>"; 
        echo "<li>";echo "Gender: &emsp;&emsp;&emsp;"; echo $_POST["gender"];echo "</li>"; 
        echo "<li>";echo "Nationality:&emsp;&nbsp;"; echo $_POST["nationality"];echo "</li>"; 
    echo "</ul>";?>

    <h3 style='display:inline'>DECLARATION: </h3>
    <p style='display:inline'> I hearby declare that all the above informationis correct to the best of my knowledge and
        belief</p>
    <?php 
    echo "<h3>"; echo "Place:";echo $_POST["place"];echo "</h3>";


    echo "<h3 style='text-align:left;'>";
        echo "Date:";
        echo $_POST["date"];
        echo"<span style='float:right;'>";
            echo "("; echo $_POST["name"]; echo ")";
        echo "</span>" ;
    echo "</h3>" ?>
    
</body>


</body>

</html>