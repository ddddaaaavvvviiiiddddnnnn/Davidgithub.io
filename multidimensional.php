<?php
$cars = array(array("Volvo", 40, 18), array("Toyota", 100, 80), array("BMW", 56, 16), array("Mazda", 100, 89), array("VW", 74, 23));
echo "The car type is " . $cars[0][0] . ", the stock in was " . $cars[0][1] . " where " . $cars[0][2] . " were sold. <br>";
echo "Car type: " . $cars[2][0] . " Cars in stock: " . $cars[2][1] . " Cars sold: " . $cars[2][2] . "<br>";
?>
<hr> 
<?php
$employees = array(array(1, "David", "Male", "System Analyst", 150000), array(2, "Kondeboy", "Male", "Software Developer", 50000), array(3, "Vivian", "Female", "Data Analyst", 60000), array(4, "Timotheo", "Male", "Data Mining", 90000));
echo "SN: Name: Gender: Role: Salary: <br>";
for ($row=0; $row<4;$row++) {
    for ($col=0; $col<5; $col++) {
        echo $employees[$row][$col] . " ";
    }
    echo "<br>";
}
?>
