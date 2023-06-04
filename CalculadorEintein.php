<?php
session_start();
if (isset($_POST['numero'])) {
    if ($_POST['numero'] == "c") {
        $_SESSION['num1'] = null;
        $_SESSION['operador'] = null;
        $_SESSION['num2'] = null;
    } else if ($_POST['numero'] == "←") {
        $_SESSION['num1'] = substr($_SESSION['num1'], 0, -1);
    } else if (is_numeric($_POST['numero'])) {
        if ($_SESSION['operador'] == null) {
            $_SESSION['num1'] = isset($_SESSION['num1']) ? $_SESSION['num1'] . $_POST['numero'] : $_POST['numero'];
        } else {
            $_SESSION['num2'] = isset($_SESSION['num2']) ? $_SESSION['num2'] . $_POST['numero'] : $_POST['numero'];
        }
    } else {
        $_SESSION['operador'] = $_POST['numero'];
    }
}

if (isset($_SESSION['num1']) && isset($_SESSION['num2']) && isset($_SESSION['operador'])) {
    $resultado = calcular($_SESSION['num1'], $_SESSION['num2'], $_SESSION['operador']);
    $_SESSION['num1'] = $resultado;
    $_SESSION['operador'] = null;
    $_SESSION['num2'] = null;
} else {
    $resultado = isset($_SESSION['num1']) ? $_SESSION['num1'] : 0;
}

function calcular($num1, $num2, $operador)
{
    switch ($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            return 0;
    }
}
?>

<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="resultado" value="<?php echo $resultado; ?>"><br>
        <button type="submit" name="numero" value="1">1</button>
        <button type="submit" name="numero" value="2">2</button>
        <button type="submit" name="numero" value="3">3</button>
        <button type="submit" name="numero" value="c">c</button>
        <button type="submit" name="numero" value="←">←</button><br>
        <button type="submit" name="numero" value="4">4</button>
        <button type="submit" name="numero" value="5">5</button>
        <button type="submit" name="numero" value="6">6</button>
        <button type="submit" name="numero" value="7">7</button>
        <button type="submit" name="numero" value="8">8</button><br>
        <button type="submit" name="numero" value="9">9</button>
        <button type="submit" name="numero" value="0">0</button>
        <button type="submit" name="numero" value="+">+</button>
        <button type="submit" name="numero" value="-">-</button>
        <button type="submit" name="numero" value="*">*</button>
        <button type="submit" name="numero" value="/">/</button>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

