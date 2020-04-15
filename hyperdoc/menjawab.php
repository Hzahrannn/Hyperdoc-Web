<?php 
$id_pertanyaan = $_GET["id"];
?>
<form method="GET" action="ejawab.php">
	<input type="hidden" name="id_pertanyaan" value="<?= $id_pertanyaan ?>">
	<p>Jawaban</p>
	<textarea rows="5" cols="15" name="jawaban">ISI JAWABAN</textarea><br><br>
	<input type="text" name="penjawab" placeholder="Nama"><br><br>
	<input type="submit">
</form>