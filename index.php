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
        $k=0;        
        
        for($i=1;$i<1000;$i++){
            for($j=$i+1;$j<999;$j++){
                $k = sqrt($i*$i + $j*$j);
                
                if($i+$j+$k==1000 && $i<$j && $j<$k){
                    if($i*$i+$j*$j==$k*$k) {
                        echo "$i * $j * $k\n";
                        echo $i*$j*$k;
                    }
                }
            }
        }
        return 0;
    }
    #q9();
    ?>
    <h1>Question 10</h1>
    <?php
    function q10() {
        $prime_numbers = array();
        function isPrime($x) {
            for($i=2; $i<$x; $i++) {
                if($x%$i==0) {
                    return False;
                }
            }
            return True;
        }
        for($i=2; $i < 2000000; $i++) {
            if(isPrime($i)) {
                array_push($prime_numbers,$i);
                echo "and $i is prime\n";
            }
        }
        $sum = array_sum($prime_numbers);
        echo "the sum is $sum\n";
    }
    #q10();
    ?>
    <h1>Question 11</h1>
    <?php
    function q11() {
        $r = array();
        $s = array();

        $r[] = explode(' ', '08 02 22 97 38 15 00 40 00 75 04 05 07 78 52 12 50 77 91 08');
        $r[] = explode(' ', '49 49 99 40 17 81 18 57 60 87 17 40 98 43 69 48 04 56 62 00');
        $r[] = explode(' ', '81 49 31 73 55 79 14 29 93 71 40 67 53 88 30 03 49 13 36 65');
        $r[] = explode(' ', '52 70 95 23 04 60 11 42 69 24 68 56 01 32 56 71 37 02 36 91');
        $r[] = explode(' ', '22 31 16 71 51 67 63 89 41 92 36 54 22 40 40 28 66 33 13 80');
        $r[] = explode(' ', '24 47 32 60 99 03 45 02 44 75 33 53 78 36 84 20 35 17 12 50');
        $r[] = explode(' ', '32 98 81 28 64 23 67 10 26 38 40 67 59 54 70 66 18 38 64 70');
        $r[] = explode(' ', '67 26 20 68 02 62 12 20 95 63 94 39 63 08 40 91 66 49 94 21');
        $r[] = explode(' ', '24 55 58 05 66 73 99 26 97 17 78 78 96 83 14 88 34 89 63 72');
        $r[] = explode(' ', '21 36 23 09 75 00 76 44 20 45 35 14 00 61 33 97 34 31 33 95');
        $r[] = explode(' ', '78 17 53 28 22 75 31 67 15 94 03 80 04 62 16 14 09 53 56 92');
        $r[] = explode(' ', '16 39 05 42 96 35 31 47 55 58 88 24 00 17 54 24 36 29 85 57');
        $r[] = explode(' ', '86 56 00 48 35 71 89 07 05 44 44 37 44 60 21 58 51 54 17 58');
        $r[] = explode(' ', '19 80 81 68 05 94 47 69 28 73 92 13 86 52 17 77 04 89 55 40');
        $r[] = explode(' ', '04 52 08 83 97 35 99 16 07 97 57 32 16 26 26 79 33 27 98 66');
        $r[] = explode(' ', '88 36 68 87 57 62 20 72 03 46 33 67 46 55 12 32 63 93 53 69');
        $r[] = explode(' ', '04 42 16 73 38 25 39 11 24 94 72 18 08 46 29 32 40 62 76 36');
        $r[] = explode(' ', '20 69 36 41 72 30 23 88 34 62 99 69 82 67 59 85 74 04 36 16');
        $r[] = explode(' ', '20 73 35 29 78 31 90 01 74 31 49 71 48 86 81 16 23 57 05 54');
        $r[] = explode(' ', '01 70 54 71 83 51 54 69 16 92 33 48 61 43 52 01 89 19 67 48');

        foreach ($r as $q) {
            $c = count($q);
            for ($i=0; $i<$c-3; $i++) {
                $p = intval($q[$i])*intval($q[$i+1])*intval($q[$i+2])*intval($q[$i+3]);
                $s[] = $p;
            }
        }
        $m = 0;
        while ($m<$c) {
            for ($i=0; $i<$c-3; $i++) {
                $p = intval($r[$i][$m])*intval($r[$i+1][$m])*intval($r[$i+2][$m])*intval($r[$i+3][$m]);
                $s[] = $p;
                #echo "column $m\n";
                #echo "row $m\n";
            }
            $m++;
        }

        $i = 0;
        while ($i<$c-3) {
            for ($m=16; $m>=0; $m--) {
                $p = intval($r[$i][$m])*intval($r[$i+1][$m+1])*intval($r[$i+2][$m+2])*intval($r[$i+3][$m+3]);
                $s[] = $p;
            }
            $i++;
        }
        $z=0;
        while ($z<$c-3) {
            for ($m=3; $m<$c-3; $m++) {
                $p = intval($r[$z][$m])*intval($r[$z+1][$m-1])*intval($r[$z+2][$m-2])*intval($r[$z+3][$m-3]);
                $s[] = $p;
            }
            $z++;
        }
        $max = max($s);
        print_r($max);
    }
    q11();
    ?>
</body>
</html>
