# Php[08/03, 10:04] Spartilo: <?php
$time = date('G');
if ($time >= 4 && $time < 6) {
    $message = "Time to wake up";
} elseif ($time >= 6 && $time < 7) {
    $message = "Time to go to school/work";
} elseif ($time >= 7 && $time < 8) {
    $message = "Setting at school/workplace";
} elseif ($time >= 8 && $time < 10) {
    $message = "Morning shift";
} elseif ($time >= 10 && $time < 11) {
    $message = "Breakfast time";
} elseif ($time >= 11 && $time< 13) {
    $message = "Mid-morning shift";
} elseif ($time >= 13 && $time < 14) {
    $message = "Lunch time";
} elseif ($time>= 14 && $time < 17) {
    $message = "Evening shift";
} elseif ($time >= 17 && $time < 20) {
    $message = "Going home";
} elseif ($time >= 20 && $time < 22) {
    $message = "News time";
} elseif ($time >= 22 && $time< 23) {
    $message = "Sleeping time";
} else {
    $message = "Already in slumberland";
}
echo $message;
[12/03, 07:49] Spartilo: <?php
$city=array("Uganda"=>"Kampala","Kenya"=>"Nairobi","Zambia"=>"Lusaka","Togo"=>"Lome","Namibia"=>"Windhoek","Niger"=>"Niamey","Rwanda"=>"Kigali","Mali"=>"Bamako");
echo "Uganda:". " ". $city["Uganda"]."<br>";
echo "Kenya:"." ". $city["Kenya"]."<br>";
echo "Zambia:"." ". $city["Zambia"]."<br>";
echo "Togo:"." ". $city["Togo"]."<br>";
echo "Namibia:". " ". $city["Namibia"]."<br>";
echo "Niger:"." ". $city["Niger"]."<br>";
echo "Rwanda:"." ". $city["Rwanda"]."<br>";
echo "Mali:"." ". $city["Mali"];
?> Ndio hiyo ya capital cities wasee👈👈
[13/03, 12:54] Spartilo: <?php
$world=array("Europe","Africa","Asia","America");
$africa=array("Kenya","Mali","Tunisia","Uganda","Angola");
$eac=array("Nairobi","Dodoma","Kigali","Kampala","Mogadishu");
$kcnt=array("Kajiado","Nakuru","Busia","Nyamira","Kiambu","Wajir");
$wrd=array("Continents"=>$world,"African countries"=>$africa,"East Africa Capitals"=>$eac,"Kenyan Counties"=>$kcnt);
foreach ($wrd as $key => $k) 
{
    echo $key.":";
    for ($i=0;$i<count($k);$i++) 
    { 
        echo $k[$i]." ";
    }
    echo"<br>";
}
?>
[13/03, 12:55] Spartilo: <?php //count()function
$stud=array("David","Zippy","Tim","Zaddock");
echo count($stud);
?>
<hr>
<?php
$color=array("red","blue","black","green","white","grey","brown","yellow");
sort($color);
foreach($color as $k)//sort()function
{
    echo"$k <br>";
}
?>
<hr>
<?php //sort()function
$color=array("red","blue","black","green","white","grey","brown","yellow");
rsort($color);
foreach($color as $k)
{
    echo"$k <br>";
}
?>
<hr>
<?php //reverse()function
$sport=array("football","badminton","basketball","rugby","cricket","golf","baseball","swimming");
$reversedsport=array_reverse($sport);
foreach($reversedsport as $k)
{
    echo"$k <br>";
}
?>
<hr>
<?php //search() function
$k=array("Kajiado","Nairobi","Kiambu","Makueni","Marsabit","Kisumu");
$key=array_search("Kisumu",$k);
echo $key;
?>
[13/03, 12:56] Spartilo: <?php
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
[13/03, 12:56] Spartilo: <?php
$cars=array("Toyota"=>array("Hilux"=>20,"Corolla"=>45,"Vitz"=>78),
"Volkswagen"=>array("Golf"=>53,"Tiguan"=>19,"Touareg"=>34),
"Nissan"=>array("Juke"=>50,"GTR"=>23,"Note"=>76),
"Mazda"=>array("CX5"=>34,"Demio"=>56,"Atenza"=>45));
echo"<u>Cars in the showroom: </u><br>";
echo"Vitz:";
echo $cars["Toyota"]["Vitz"]. "<br>";
echo"Golf:";
echo $cars["Volkswagen"]["Golf"]. "<br>";
echo"GTR:";
echo $cars["Nissan"]["GTR"]. "<br>";
echo"CX5:";
echo $cars["Mazda"]["CX5"]. "<br>";
?>
<hr>
<?php
$lang=array("HTML","PHP","JAVA","MYSQL");
$class=array("HDBT","SHEP","ICP");
$frame=array("Laravel","Django","React","Angular");
$arrs=array("Languages"=>$lang,"Courses"=>$class,"Framework"=>$frame);
foreach ($arrs as $key => $k) 
{
    echo $key.":";
    for ($i=0;$i<count($k);$i++) 
    { 
        echo $k[$i]." ";
    }
    echo"<br>";
}
?>
[13/03, 13:06] Spartilo: <?php
$leagues=array("premier","laliga","serie A","league 1","bundesliga","turkish","kpl");
foreach ($leagues as $team) 
{
    echo"$team <br>";
}
?>
<?php
$staff[0]="kondeboy";
$staff[1]="Male";
$staff[2]="Kisii";
$staff[3]="19";
$staff[4]="KTVTC";
echo"His name is"." ".$staff[0].", He is a"." ".$staff[1]." and he is"." ".$staff[3]." years old, from"." ".$staff[2]." studying computer programming at"." ".$staff[4]."";
