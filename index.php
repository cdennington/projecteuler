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
    #q7();
    ?>
    <h1>Question 8</h1>
    <?php
    function q8() {
        $seperate_num = array();
        $array_of_five = array();
        $number = "7316717653133062491922511967442657474235534919493496983520312774506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753697817977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257530420752963450";
        $num_length = strlen($number);
        while ($num_length > 4) {
            for($i=0; $i<=4; $i++) {
                $slice = substr($number,$i,1);
                array_push($seperate_num,$slice);
                echo "first 5 digits $slice\n";
            }
            #print_r ($seperate_num);
            #echo array_product($seperate_num);
            $sum = array_product($seperate_num);
            echo "product of $sum\n";
            $sum = array($sum);
            array_push($array_of_five,$sum);
            #unset($seperate_num);
            #print_r($array_of_five);
            $seperate_num = array();
            $i = 0;
            $pos = strpos($number, ",");
            $pos1 = $pos+1; // add the comma position by 1
            $number = substr($number, $pos1);
            $num_length = strlen($number);
            $max = max($array_of_five);
            print_r($max);
            #echo $number;
        }
    }
    #q8();
    ?>
    <h1>Question 9</h1>
    <?php
    function q9() {
        
    }
    q9();
    ?>
</body>
</html>
