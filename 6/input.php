<?php  

echo '
	<form action="result.php" method="post" name="form1" target="_blank">

	<p>Вопрос 1. Кто является президентом России?</p>
	<p><input name="presidents" type="radio" value="Буш" checked="checked">Буш</p>
	<p><input name="presidents" type="radio" value="Медведев">Медведев</p>
	<p><input name="presidents" type="radio" value="Путин">Путин</p>
	<br />
	<br />
	<p>Вопрос 2. Сколько дней в високосном году?</p>
	<p><input name="days" type="radio" value="365" checked="checked">365</p>
	<p><input name="days" type="radio" value="366">366</p>
	<p><input name="days" type="radio" value="368">368</p>
	<br />
	<br />
	<p><input type="submit"></p>
	</form>
'
?>