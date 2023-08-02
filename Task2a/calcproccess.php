<?php 
session_start();
if(isset($_GET['submit']))
{
    $op= $_GET['op'];
    $_SESSION['operation'] = $op;
    // print_r($_SESSION);
    $num1= $_GET['num1'];
    $num2= $_GET['num2'];

    $_SESSION['number1'] = $num1;
    $_SESSION['number2'] = $num2;
    // $result = 0;
    
switch($_SESSION['operation'])
{
    case '+' : 
        $result = $num1 + $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        // echo"<a href='http://localhost/php/Task2a/calculat.php'>razan</a>";
        // print_r($_SESSION);
        break;

    case '-' :
        $result = $num1 - $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        // echo"<a href='http://localhost/php/Task2a/calculat.php'>razaaaaaaaaaaaaaaaaaaaan</a>";
        // print_r($_SESSION);
        break;
        
        
    case '*' : 
        $result = $num1 * $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        // echo"<a href='http://localhost/php/Task2a/calculat.php'>razooooooooooooon</a>";
        // print_r($_SESSION);
        break;

    case '/' : 
        if($num2 !=0 )
        {
        $result = $num1 / $num2;
        $_SESSION['result'] = $result;
        header("location:calculat.php");
        // echo"<a href='http://localhost/php/Task2a/calculat.php'>rnrnrrnrnrnrj3rgbfebbfdufhdsu</a>";
        // print_r($_SESSION);
        }
        else 
        {
            $result = "Can not divide by 0";
            $_SESSION['result'] = $result;
            header("location:calculat.php");
            // echo"<a href='http://localhost/php/Task2a/calculat.php'>hehehehhehehhehe</a>";
            // print_r($_SESSION);
        }
        break;
}}
?>