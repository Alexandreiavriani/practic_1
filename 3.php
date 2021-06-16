<!DOCTYPE html>
<html lang="en">
<head>
<?php error_reporting(0);
?>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<form method='post'><h2>Test</h2>
    <p>1+1?</p>1<input type="radio" name='q1' value='1' >
    3<input type="radio" name='q1' value='3' >
    0<input type="radio" name='q1' value='0' >
    2<input type="radio" name='q1' value='2' >
<br><br>
<p>5+5?</p>4<input type="radio" name='q2' value='4' >
    10<input type="radio" name='q2' value='10' >
    -3<input type="radio" name='q2' value='-3' >
    5<input type="radio" name='q2' value='5' >
<br><br>
<p>2+5?</p>7<input type="radio" name='q3' value='7' >
    2<input type="radio" name='q3' value='2' >
    6<input type="radio" name='q3' value='6' >
    9<input type="radio" name='q3' value='9' >
<br><br>
<p>Python is Programming Language?</p>
<input type="text" name='q4'>

<br><br>
<p>C++ is Programming Language?</p>
<input type="text" name='q5'>

<br><br>
    <button name='send'>Send</button>
    </form>

<?php
if(isset($_POST['send'])){
    $count=0;
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];

        if($q1==2){
                $count++;
        }

        elseif(empty($q1)){
            echo "Task 1 is empty";
        }
        echo "<br>";

        if($q2==10){
            $count++;
        }
        elseif(empty($q2)){
            echo "Task 2 is empty";
        }

        echo "<br>";

        if($q3==7){
            $count++;
        }
        elseif(empty($q3)){
            echo "Task 3 is empty";
        }
        echo "<br>";

        if($q4=='yes' || $q4=='Yes'){
            $count++;
        }
        elseif(empty($q4)){
            echo "Task 4 is empty";
        }

        echo "<br>";

        if($q5=='yes' || $q5=='Yes'){
            $count++;
        }
        elseif(empty($q5)){
            echo "Task 5 is empty";
        }
    
        echo "<h2>Correct Tasks:</h2>"." "."<h2>$count</h2>";
}

?>


</body>

</html>