<?php
session_start();
if (isset($_POST['numero'])) {
    if ($_POST['numero'] == "c") {
        $_SESSION['num1'] = null;
    } else if ($_POST['numero'] == "←") {
        $_SESSION['num1'] = substr($_SESSION['num1'], 0, -1);
    } else {
        $_SESSION['num1'] = isset($_SESSION['num1']) ? $_SESSION['num1'] . $_POST['numero'] : $_POST['numero'];
    }
}
