<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<form method='post'><h2>ნიშნების უწყისის ფორმა</h2>
    <input type="text" name='st_name' placeholder='სტუდენტის სახელი'>
    <br><br>
    <input type="text" name='st_lname' placeholder='სტუდენტის გვარი'>
    <br><br>
    <input type="number" name='kursi' placeholder='კურსი' >
    <br><br>
    <input type="number" name='semestri' placeholder='სემესტრი'>
    <br><br>
    <input type="text" name='saswavlo_kursi' placeholder='სასწავლო კურსი'>
    <br><br>
    <input type="number" name='migebuli_nishani' placeholder='მიღებული ნიშანი'>
    <br><br>
    <input type="text" name='shepaseba' placeholder='მიღებული ნიშნის მიხედვით შესაბამისი შეფასება'>
    <br><br>
    <input type="text" name='lt_name' placeholder='ლექტორის სახელი'>
    <br><br>
    <input type="text" name='lt_lname' placeholder='ლექტორის გვარი'>
    <br><br>
    <input type="text" name='dk_name' placeholder='დეკანის სახელი'>
    <br><br>
    <input type="text" name='dk_lname' placeholder='დეკანის გვარი' >
    <br><br>
    <button name='send'>Send</button>
        </form>
        <br><br><br>

<?php

if(isset($_POST['send'])){
    $st_name=$_POST['st_name'];
    $st_lname=$_POST['st_lname'];
    $kursi=$_POST['kursi'];
    $semestri=$_POST['semestri'];
    $saswavlo_kursi=$_POST['saswavlo_kursi'];
    $migebuli_nishani=$_POST['migebuli_nishani'];
    $shepaseba=$_POST['shepaseba'];
    $lt_name=$_POST['lt_name'];
    $lt_lname=$_POST['lt_lname'];
    $dk_name=$_POST['dk_name'];
    $dk_lname=$_POST['dk_lname'];


?>

<table border='1'align='center'>
<tr>
    <td>სტუდენტის სახელი</td>
    <td>სტუდენტის გვარი</td>
    <td>კურსი</td>
    <td>სემესტრი</td>
    <td>სასწავლო კურსი</td>
    <td>მიღებული ნიშანი</td>
    <td>მიღებული ნიშნის მიხედვით შესაბამისი შეფასება</td>
    <td>ლექტორის სახელი</td>
    <td>ლექტორის გვარი</td>
    <td>დეკანის სახელი</td>
    <td>დეკანის გვარი</td>
    </tr>

<tr>
<td><?=$st_name?></td>
    <td><?=$st_lname?></td>
    <td><?=$kursi?></td>
    <td><?=$semestri?></td>
    <td><?=$saswavlo_kursi?></td>
    <td><?=$migebuli_nishani?></td>
    <td><?=$shepaseba?></td>
    <td><?=$lt_name?></td>
    <td><?=$lt_lname?></td>
    <td><?=$dk_name?></td>
    <td><?=$dk_lname?></td>
</tr> 
</table>

<?php
}


?>



</body>
</html>