<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            /* variable scope */
            $x;
            fn002();

            echo $x;

            function fn002(){
                $z = 100;
                $GLOBALS["x"] = $z;
            }


            /* $a = 333;
            echo fn01();

            function fn01(){
                return 3 * $GLOBALS["a"];
            } */            

        ?>

        <?php
            /* $z = sum(11,22);
            echo $z;
            function sum($x, $y){
                return $x + $y;
            } */
        ?>

    </h1>
</body>
</html>