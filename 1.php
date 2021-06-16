<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="style.css">


    
<form methd='get'> <h2>სახელფასო უწყისის ფორმა</h2>
    <input type="text" name='name' placeholder="სახელი">
    <br><br>
    <input type="text" name='lname' placeholder="გვარი">
    <br><br>
    <input type="text" name='dakavebuli_tanamdeboba' placeholder="დაკავებული თანამდებობა">
    <br><br>
    <input type="number" name='xelfasis_raodenoba' placeholder="ხელფასის რაოდენობა">
    <br><br>
    <input type="number" name='dakavebuli_sashemosavlo' placeholder="დაკავებული საშემოსავლო">
    <br><br>
    <input type="number" name='daricxuli_xelfasi' placeholder="დარიცხული ხელფასი" >
    <br><br>
    <button name='send'>Send</button>
        </form>


<br><br><br>

        <?php
if(isset($_GET['send'])){
    $name=$_GET['name'];
    $lname=$_GET['lname'];
    $dakavebuli_tanamdeboba=$_GET['dakavebuli_tanamdeboba'];
    $xelfasis_raodenoba=$_GET['xelfasis_raodenoba'];
    $dakavebuli_sashemosavlo=$_GET['dakavebuli_sashemosavlo'];
    $daricxuli_xelfasi=$_GET['daricxuli_xelfasi'];



?>

<table border='1'align='center'>
<tr>
    <td>სახელი</td>
    <td>გვარი</td>
    <td>დაკავებული თანამდებობა</td>
    <td>ხელფასის რაოდენობა</td>
    <td>დაკავებული საშემოსავლო</td>
    <td>დარიცხული ხელფასი</td>
    </tr>

<tr>
<td><?=$name?></td>
    <td><?=$lname?></td>
    <td><?=$dakavebuli_tanamdeboba?></td>
    <td><?=$xelfasis_raodenoba?></td>
    <td><?=$dakavebuli_sashemosavlo?></td>
    <td><?=$daricxuli_xelfasi?></td>
</tr> 
</table>


<?php
}


?>
</body>
</html>