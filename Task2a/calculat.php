<h2>calculator</h2>
<form action="calcproccess.php" method = "GET">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" required>
    <br> <br>
    <label for="num2" >Second Number:</label>
    <input type="number" name="num2" required>
    <br> <br>

    <input type="radio" id="sum" name="op" value="+">
    <label for="sum">+</label>
    <br>
    <input type="radio" id="min" name="op" value="-">
    <label for="min">-</label>
    <br>
    <input type="radio" id="multi" name="op" value="*">
    <label for="multi">*</label>
    <br>
    <input type="radio" id="div" name="op" value="/">
    <label for="div">/</label>
    <br> 
    <button type="submit" name = "submit">submit</button>
</form>
<?php
session_start();
if(isset($_SESSION['result']))
{
$result = $_SESSION['result'];
echo $result;
// print_r($_SESSION);
}
?>