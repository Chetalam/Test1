<h1>Arrays</h1>
<?php
// Indexed or numeric 
$fnames = ["", "", ""]
print_r($fnames);
echo '<br>';
$colors = array("Black", "Green", "Yellow", "White", "Red", "Blue");
?>
</pre>

<?php print $color[5]; 
?>
</pre>

<?php
//Associative Arrays
$user = [
    "fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "phone" => "+2547855555"
];
?>
</pre>

<?php
$user_details = [
    "Director" => array(
    "fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "address" => "Mada",
    "phone" => [
        "Mobile" => "+2547855555",
        "Work" => "+2547855555",
        "Cell" => "+2547855555"

    ]
    ),

    "Manager" => array(
        "fullname" => "Peter Okama",
        "email" => "POkama@yahoo.com",
        "address" => "Kile",
        "phone" => [
            "Mobile" => "+2547855555",
            "Work" => "+2547855555",
            "Cell" => "+2547855555"
    
        ]
        ),

        "Secretary" => array(
            "fullname" => "Maryy Okama",
            "email" => "MOkama@yahoo.com",
            "address" => "Lavi",
            "phone" => [
                "Mobile" => "+2547855555",
                "Work" => "+2547855555",
                "Cell" => "+2547855555"
        
            ]
            )
            ];
            print $user_details["Secretary"]["Phone"]["Work"];

?>
<pre>
<?php
print_r($user_details);
?>

<?php
$items = ["book", "pen",  456, 45.5, "File54"]
?>
</pre>

<pre>
    <?php var_dump(&items);
    ?>
    </pre>

    <?php

    $age = [45, 42, 23]
user_age = array_combine($fnames, $age);
user_data = array_merge($fnames, $age);
?>

<pre>
    <?php  print_r($user_data);
    ?>
</pre>


