<?php
require "./Scripts/session.php";
?>

<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <input type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] :0;?>"><br>
        <button type="submit" name="numero" value="1">1</button>
        <button type="submit" name="numero" value="2">2</button>
        <button type="submit" name="numero" value="3">3</button>
        <button type="submit" name="numero" value="+">+</button><br>
        <button type="submit" name="numero" value="4">4</button>
        <button type="submit" name="numero" value="5">5</button>
        <button type="submit" name="numero" value="6">6</button>
        <button type="submit" name="numero" value="-">-</button><br>
        <button type="submit" name="numero" value="7">7</button>
        <button type="submit" name="numero" value="8">8</button>
        <button type="submit" name="numero" value="9">9</button>
        <button type="submit" name="numero" value="*">*</button><br>
        <button type="submit" name="numero" value="0">0</button>
        <button type="submit" name="numero" value="/">/</button>
        <button type="submit" name="numero" value="c">c</button><br>
        <button type="submit" name="numero" value="←">←</button>
        <input type="submit" value="=">
    </form>
    
</body>
</html>