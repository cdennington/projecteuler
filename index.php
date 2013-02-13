<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Project Euler</title>

 </head>
<body>
    <h1>Question 1</h1>
    <?php
    $num_q1;
        for ($i=0; $i<=999; $i++)
        {
            if ($i%3 == 0 OR $i%5 == 0) {
                $num_q1 = $i + $num_q1;
            }
        }
        echo "last nunber " . $num_q1 . "<br>";
    ?>
    <h1>Question 2</h1>
    <?php
    $num_one = 0;
    $num_two = 1;
    $q2_answer=0;

    while($z < 4000000) {

        $z = $num_one + $num_two; 
        $num_one = $num_two;
        $num_two = $z;
        
        if ($z%2 == 0) {
            #echo($z."<br />");
            $q2_answer = $z + $q2_answer;
        }
    }
    echo $q2_answer;

    ?>
    <h1>Question 3</h1>
    <?php
    $sq_root = round(sqrt(600851475143));
    echo $sq_root;

    for ($i=1; $i<$sq_root; $i++) {
        if ($i%2 == 0) {
            echo($i."<br />");
        }
    }
    

    ?>
</body>
</html>
