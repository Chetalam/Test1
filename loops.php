<h1>Loops</h1>


<h4>While Loop</h4>
<?php
//While Loop
$init = 0;
while($init < 10){
    print $init . "<br>";
    $init++;
}
?>


<h4>do-While Loop</h4>
<?php
//do-While Loop
$i = 0;
do{
    print $i . "<br>";
    $i++;
}
while($i < 10)
?>


<h4>For Loop</h4>
<?php
//For Loop
$i = 0;
for($s=45; $s<55; $s++){
    print $s . "<br>";
    $s++;
}
?>


<h4>Foreach Loop</h4>
<?php
//Foreach Loop
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
foreach($month AS $month){
    print $month . ","; 
}
?>


<form action = "">
    <select name = "" id = "">
        <option value = ""> --Months-- </option>
        <?php
        foreach($month AS $month){
            echo "<option value = ''> $month</option";
        }
?>


    </select>
    <select name = "" id = "">
        <option value = ""> --Years-- </option>
        <?php
        $y = 2015;
        while ($y < 2030){
            print "<option value = ''> $y</option"
            $y++;
        }
    ?>