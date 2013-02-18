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
            #echo($x."<br />");
                return True;
            }else if($length > 5 && $x[0] == $x[$length-1] && $x[1] == $x[$length-2] && $x[2] == $x[$length-3]) {
                return True;
            }
            return False;
        }
        $m = 999;
        $i = 100;
        $cart = array();
        for ($i=100; $i<=999; $i++) {
            while ($m >= 100) {
                $answer = $i * $m;
                #echo "$i times $m\n";
                #echo($i. "multiply".$m."<br />");
                $m--;
                if(checkSize($answer)) {
                    array_push($cart,$answer);
                    #echo "and $cart is a palindrome\n";
                }
            }
            $m = 999;
        }
        echo max($cart);
    }
    #q4();
    ?>
    <h1>Question 5</h1>
    <?php
    function q5() {
        function checkdivisible($m) {
            if ($m%19 == 0 && $m%18 == 0 && $m%17 == 0 && $m%16 == 0 && $m%15 == 0 && $m%14 == 0 && $m%13 == 0 && $m%12 == 0 && $m%11 == 0 && $m%10 == 0 && $m%9 == 0 && $m%8 == 0 && $m%7 == 0 && $m%6 == 0 && $m%5 == 0 && $m%4 == 0 && $m%3 == 0 && $m%2 == 0 && $m%1 == 0) {
                return True;
            }
            return False;
        }
        $i = 0;
        while ($i <= 10000000000) {
            if(checkdivisible($i)) {
                echo($i. "<br />");
            }
            $i = $i + 20;
        }
    }
    #q5();
    ?>
    <h1>Question 6</h1>
    <?php
    function q6() {
        $num_sq;
        $num;
        for ($i=1; $i<=100; $i++) {
            $sum = $i * $i;
            $num_sq = $sum + $num_sq;

        }
        #echo "and $num_sq\n";

        
        for ($i=1; $i<=100; $i++) {
            $num = $num + $i;
            #echo "and $num\n";
        }
        $sq_sum = $num * $num; 
        #echo "and $sq_sum\n";

        $final_sum = $sq_sum - $num_sq;

        echo "and $final_sum\n";
    }

    #q6();
    ?>
    <h1>Question 7</h1>
    <?php
    function q7() {
        $prime_numbers = array();
        function isPrime($x) {
            for($i=2; $i<$x; $i++) {
                if($x%$i==0) {
                    return False;
                }
            }
            return True;
        }
        for($i=2; $result <= 10000; $i++) {
            if(isPrime($i)) {
                array_push($prime_numbers,$i);
                #echo "and $i is prime\n";
                $result = count($prime_numbers);
                #echo "and $result\n";
            }
        }
        echo "the 100001 prime number is $prime_numbers[10001]\n";
    }
    q7();
    ?>
</body>
</html>
