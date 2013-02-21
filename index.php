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
    #q11();
    ?>
    <h1>Question 12</h1>
    <?php
    function q12() {
        for ($i=12500; $i>=10000; $i--) {
            $multiply = $i * ($i+1);
            $divide = $multiply/2;
            $d = 1;
            $count = 0;
            while($d < 1000000) {
                if ($divide%$d == 0) {
                    $count++;
                    if ($count > 500) {
                        echo "triangle number $divide\n";
                        return;
                    }
                }
                $d++;
            }
            #echo "finished $divide\n";
        }
    }
    #q12();
    ?>
    <h1>Question 13</h1>
    <?php
    function q13() {
        $array_of_fifty = array();
        $number = "37107287533902102798797998220837590246510135740250463769376774900097126481248969700780504170182605387432498619952474105947423330951305812372661730962991942213363574161572522430563301811072406154908250230675882075393461711719803104210475137780632466768926167069662363382013637841838368417873436172675728112879812849979408065481931592621691275889832738442742289174325203219235894228767964876702721893184745144573600130643909116721685684458871160315327670386486105843025439939619828917593665686757934951621764571418565606295021572231965867550793241933316490635246274190492910143244581382266334794475817892575867718337217661963751590579239728245598838407582035653253593990084026335689488301894586282278288018119938482628201427819413994056758715117009439035398664372827112653829987240784473053190104293586865155060062958648615320752733719591914205172558297169388870771546649911559348760353292171497005693854370070576826684624621495650076471787294438377604532826541087568284431911906346940378552177792951453612327252500029607107508256381565671088525835072145876576172410976447339110607218265236877223636045174237069058518606604482076212098132878607339694128114266041808683061932846081119106155694051268969251934325451728388641918047049293215058642563049483624672216484350762017279180399446930047329563406911573244438690812579451408905770622942919710792820955037687525678773091862540744969844508330393682126183363848253301546861961243487676812975343759465158038628759287849020152168555482871720121925776695478182833757993103614740356856449095527097864797581167263201004368978425535399209318374414978068609844840309812907779179908821879532736447567559084803087086987551392711854517078544161852424320693150332599594068957565367821070749269665376763262354472106979395067965269474259770973916669376304263398708541052684708299085211399427365734116182760315001271653786073615010808570091499395125570281987460043753582903531743471732693212357815498262974255273730794953759765105305946966067683156574377167401875275889028025717332296191766687138199318110487701902712526768027607800301367868099252546340106163286652636270218540497705585629946580636237993140746255962240744869082311749777923654662572469233228109171419143028819710328859780666976089293863828502533340334413065578016127815921815005561868836468420090470230530811728164304876237919698424872550366387845831148769693215490281042402013833512446218144177347063783299490636259666498587618221225225512486764533677201869716985443124195724099139590089523100588229554825530026352078153229679624948164195386821877476085327132285723110424803456124867697064507995236377742425354112916842768655389262050249103265729672370191327572567528565324825826546309220705859652229798860272258331913126375147341994889534765745501184957014548792889848568277260777137214037988797153829820378303147352772158034814451349137322665138134829543829199918180278916522431027392251122869539409579530664052326325380441000596549391598795936352974615218550237130764225512118369380358038858490341698116222072977186158236678424689157993532961922624679571944012690438771072750481023908955235974572318970677254791506150550495392297953090112996751986188088225875314529584099251203829009407770775672113067397083047244838165338735023408456470580773088295917476714036319800818712901187549131054712658197623331044818386269515456334926366572897563400500428462801835170705278318394258821455212272512503275512160354698120058176216521282765275169129689778932238195734329339946437501907836945765883352399886755061649651847751807381688378610915273579297013376217784275219262340194239963916804498399317331273132924185707147349566916674687634660915035914677504995186714302352196288948901024233251169136196266227326746080059154747183079839286853520694694454072476841822524674417161514036427982273348055556214818971426179103425986472045168939894221798260880768528778364618279934631376775430780936333301898264209010848802521674670883215120185883543223812876952786713296124747824645386369930090493103636197638780396218407357239979422340623539380833965132740801111666627891981488087797941876876144230030984490851411606618262936828367647447792391803351109890697907148578694408955299065364044742557608365997664579509666024396409905389607120198219976047599490197230297649139826800329731560371200413779037855660850892521673093931987275027546890690370753941304265231501194809377245048795150954100921645863754710598436791786391670211874924319957006419179697775990283006991536871371193661495281130587638027841075444973307840789923115535562561142322423255033685442488917353448899115014406480203690680639606723221932041495354150312888033953605329934036800697771065056663195481234880673210146739058568557934581403627822703280826165707739483275922328459417065250945123252306082291880205877731971983945018088807242966198081119777158542502016545090413245809786882778948721859617721078384350691861554356628840622574736922845095162084960398013400172393067166682355524525280460972253503534226472524250874054075591789781264330331690";
        
        $arr1 = str_split($number, 50);
        print_r($arr1);
        $sum = array_sum($arr1);
        $answer = substr($sum, 0, 11);
        print_r($answer);
    }
    #q13();
    ?>
    <h1>Question 14</h1>
    <?php
    function q14() {
        $counting = array();
        for ($i=800000; $i<=999999; $i++) {
            $count = 1;
            #echo "$i\n";
            $num_two = $i;
            while ($num_two > 1) {
                if ($num_two%2 == 0) {
                    $num_two = $num_two/2;
                    #echo "$i for $num_two\n";
                }else{
                    $num_two = 3*$num_two+1;
                    #echo "$i for $num_two\n";
                }
                $count++;
            }
            array_push($counting,$count);
        }
        $max = max($counting);
        #echo $max;
        $num = array_search($max, $counting);
        echo $num + 800000;
    }
    #q14();
    ?>
    <h1>Question 15</h1>
    <?php
    function q15() {
            $c = 1;
            $final_num = 0;
            $triangle = Array();
            for($i=0;$i<=20;$i++){
                $triangle[$i] = Array();
                if(!isset($triangle[$i-1])){
                    $triangle[$i][] = $c;
                }else{
                    for($j=0;$j<count($triangle[$i-1])+1;$j++){
                        $triangle[$i][] = (isset($triangle[$i-1][$j-1]) && isset($triangle[$i-1][$j])) ? $triangle[$i-1][$j-1] + $triangle[$i-1][$j] : $c;
                    }
                }
            }
            print_r($triangle[20]);
            $last_line = $triangle[20];
            foreach($last_line as $val){
                echo $val . ' ';
                $sq = $val * $val;
                echo "for $sq\n";
                $final_num = $final_num + $sq;
                echo "for $final_num\n";
            }
    }
    #q15();
    ?>
    <h1>Question 16</h1>
    <?php
    function q16() {
        $peck = pow(2, 1000);
        $normal_number = number_format($peck, 0, '.', '');
        $string = strval($normal_number);
        echo "for $string\n";
        echo array_sum(str_split($string));
    }
    q16();
    ?>
</body>
</html>
