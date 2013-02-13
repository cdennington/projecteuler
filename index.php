<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Project Euler</title>

 </head>
<body>
    <h1>Question 1</h1>
    <?php
    $num;
        for ($i=0; $i<=999; $i++)
        {
            if ($i%3 == 0 OR $i%5 == 0) {
                $num = $i + $num;
            }
        }
        echo "last nunber " . $num . "<br>";
    ?>
</body>
</html>
