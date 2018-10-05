<form method="POST">
	<table>
		<tr>
			<td>CERPEN</td>
			<td>:</td>
			<td><textarea name="cerpen"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Masukkan"></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST['submit'])) {
		$cerpen=$_POST['cerpen'];
		if(str_word_count($cerpen)>=5==TRUE){
			echo "$cerpen";
		}else{
			echo "Huruf harus lebih atau sama dengan dari 5";
		}
	}

?>
