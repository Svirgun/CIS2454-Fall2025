<?php
    $first_name = htmlspecialchars(filter_input(INPUT_POST, 'first_name'));
    $last_name = htmlspecialchars(filter_input(INPUT_POST, 'last_name'));
    
    $output = "";
    
    for($i = 0; $i < 10; $i++) {
        $output .= "</br> $i";
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php include('nav.php') ?>
        
        <?php
        echo "Hi " . $first_name . " " . $last_name . "!";
        if ($first_name == 'Zinoviy') {
            echo "It is Zinoviy";
        } else {
            echo "You are not Zinoviy";
        }
        
        $counter = 1;
        while($counter < 10) {
            echo "</br> $counter";
            $counter++;
        }
        
        echo $output;
        ?>
        
    </body>
</html>


