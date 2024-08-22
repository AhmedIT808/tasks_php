<?php
require_once 'connection_DB.php';


echo " <div style='text-align:center; margin: 0 auto;color: green; font-size:2.50rem;'> <h1 > Welcome </h1></div>";

$addItems = "INSERT INTO stu (NAME, PHONE, DGREE, GPA, ADDRESS) VALUES ('Eaman', '01571507451', '5.50', '4.25', 'cairo')";

if (mysqli_query($connection, $addItems)) {
    echo "Record added successfully <br>";
} else {
    echo "The record was not added <br>";
}

$sql = "SELECT * FROM stu";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<div style='text-align: center;'>";
    echo "<table border='1' style='margin: 0 auto;'>";
    echo "<tr style='background-color: red; color: white;'><th>Student ID</th><th>Student Name</th><th>Student Phone</th><th>Student Degree</th><th>Student GPA</th><th>Student Address</th></tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['NAME'] . "</td>";
        echo "<td>" . $row['PHONE'] . "</td>";
        echo "<td>" . $row['DGREE'] . "</td>";
        echo "<td>" . $row['GPA'] . "</td>";
        echo "<td>" . $row['ADDRESS'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "NOT found <br>";
}





























?>