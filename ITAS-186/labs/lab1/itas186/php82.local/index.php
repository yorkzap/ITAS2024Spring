<!DOCTYPE html>
<html>
<head>
    <title>ITAS 186 Lab 1</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Add the sleek CSS file -->
</head>
<body>
    <div class="container">

        <?php
        // echo "Hello World" printing
        echo '<div class="activity">Hello World</div>';

        // echo "Hello PHP" using a variable
        $hello_php = "Hello PHP";
        echo '<div class="activity">' . $hello_php . '</div>';

        // echo two variables at once
        $var1 = "Variable 1";
        $var2= "Variable 2";
        echo '<div class="activity">' . $var1 . ' ' . $var2 . '</div>';

        // determine student grade
        $marks_obstained = 100; // 
        $grader = "";

        if ($marks_obstained >= 60) {
            $grader = "First Division";
        } elseif ($marks_obstained >= 45 && $marks_obstained <= 59) {
            $grader = "Second Division";
        } elseif ($marks_obstained >= 33 && $marks_obstained <= 44) {
            $grader = "Third Division";
        } else {
            $grader = "Fail";
        }

        echo '<div class="activity">Your grade - ' . $grader . '</div>';

        // echo 6 to 22 using a loop
        $numbers = "Loop from 6 to 22: ";
        for ($i = 6; $i <= 22; $i++) {
            $numbers .= $i . " ";
        }
        
        echo '<div class="activity">' . $numbers . '</div>';

        // change timezone to PST
        date_default_timezone_set('America/Los_Angeles');

        // get current PST time
        $currentTime = date("Y-m-d H:i:s");

        // get current day
        $currentDay = date("l");

        if ($currentDay === 'Thursday') {
            // check if its thursday
            echo '<div class="message">Today is ITAS class day! Time: ' . $currentTime . '</div>';
            // check days until the next Thursday
            $daysUntilNextClass = (7 + (4 - date("N"))) % 7;
            echo '<div class="message">Next ITAS class in ' . $daysUntilNextClass . ' days ';
        } else {
            // time until next thursday
            $daysUntilNextClass = (7 + (4 - date("N"))) % 7;
            echo '<div class="message">Next ITAS class in ' . $daysUntilNextClass . ' days. Time: ' . $currentTime . '</div>';
        }
        
        ?>
    </div>
</body>
</html>
