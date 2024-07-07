

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=200;
    $num2=300;
    $num3=500;
    if($num1>$num2&&$num1>$num3){
        echo "The number one is the greatest";
    }elseif($num2>$num1&&$num2>$num3){
        echo "The number two is the greatest";
    }else{
        echo "number three is the greatest";
    }

    echo" <br/>";

    if($num1<$num2 && $num1<$num3){
        echo "number one is smaller";
    }elseif($num2<$num1&&$num2<$num3){
         echo "number two is smaller";
    }else{
         echo "number three is smaller";
    }
    ?>
</body>
</html>