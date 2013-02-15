<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Project Euler</title>

 </head>
<body>
    <h1>Question 1</h1>
    <?php
    function q1() {
        $num_q1;
        for ($i=0; $i<=999; $i++)
        {
            if ($i%3 == 0 OR $i%5 == 0) {
                $num_q1 = $i + $num_q1;
            }
        }
        echo "last nunber " . $num_q1 . "<br>";
    }
    ?>
    <h1>Question 2</h1>
    <?php
    function q2() {
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
    }
    ?>
    <h1>Question 3</h1>
    <?php
    function q3() {
        function isPrime($x) {
            for($i=2; $i<$x; $i++) {
                if($x%$i==0) {
                    return False;
                }
            }
            return True;
        }

        $number = 600851475143;
        $i = 2;
        echo "Checking up to ".sqrt($number);
        while ($i < sqrt($number)) {
            if ($number % $i == 0) {
                echo "$i is a divisor\n";
                if(isPrime($i)) {
                    echo "and $i is prime\n";
                }
            }
            //echo "I is ".$i."\n";
        $i++;
        }
    }
    ?>
    <h1>Question 4</h1>
    <?php
    function q4() {
        function checkSize($x) {
            $x=(string)$x;
            $length = strlen($x);
            if($length <= 5 && $x[0] == $x[$length-1] && $x[1] == $x[$length-2]) {
            echo($x."<br />");
                return True;
            }else if($length > 5 && $x[0] == $x[$length-1] && $x[1] == $x[$length-2] && $x[2] == $x[$length-3]) {
                return True;
            }
            return False;
        }
        $m = 999;
        for ($i=100; $i<=999; $i++) {
            while ($m > 100) {
                #echo($i."<br />");
                $answer = $i * $m;
                #echo($answer."<br />");
                m--;
                if(checkSize($answer)) {
                    echo "and $answer is a palindrome\n";
                }
            }
        }
    }
    q4();
    ?>
</body>
</html>
