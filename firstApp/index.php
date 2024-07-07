

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="" method="post">
    <label for="project">Enter your age</label>
    <input type="number" name="age" id="subject">
    <button type="submit">submit</button>
    </form>
    <?php
if($_POST['age']>=18){
    echo "<small>Welcome To Website</small>";
}else{
    echo"<small>Sorry You Cant Be Here</small>";
}
?>
</body>
</html>