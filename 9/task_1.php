<?php 

$database=mysqli_connect('localhost', 'root', 'root', 'NewDatabase');

if($database === false){
	die('ERROR: Could not connect. '.mysqli_connect_error());
} 

$zakaz=$database->query('SELECT * FROM Zakaz');

echo '<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>Номер</th>
<th>Имя</th>
<th>Фамилия</th>
<th>Эл.почта</th>
<th>Товар</th>
<th>Кол-во</th>
</tr>';

 while($row=mysqli_fetch_array($zakaz))
{
 	echo '<tr>';
 	echo '<td>'.$row['id'].'</td>';
 	echo '<td>'.$row['Name'].'</td>';
 	echo '<td>'.$row['Fam'].'</td>';
 	echo '<td>'.$row['Email'].'</td>';
 	echo '<td>'.$row['Tovar'].'</td>';
 	echo '<td>'.$row['Col'].'</td>';
 	echo '</tr>';
}
echo '</table>';

mysqli_close($database);

?>