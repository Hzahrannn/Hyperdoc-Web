<table border="1">
<?php
									include "db.php";
									$sql = "SELECT * FROM pertanyaan";
									$result = $db->query($sql);
									?>

									<?php while($row = $result->fetch_assoc()){
									?>
                                    <tbody>
									<tr>
										<td><?php echo $row["pertanyaan"]; ?></td>
										<td><?php echo $row["penanya"]; ?></td>
										<td><a href="menjawab.php?id=<?= $row["id_pertanyaan"]; ?>">jawab</a></td>
										
                                    </tbody>
									<?php }
									?>
</table>
<br><br>
