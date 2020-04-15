<?php

$panas =$_POST['panas'];
$tinggi = $_POST['tinggi'];
$nafsu =$_POST['nafsu'];
$mual = $_POST['mual'];
?>
<script src="sweetalert2.js"></script>
<?php
									include "db.php";
									$sql = "SELECT * FROM kuis where panas like '%$panas%' and tinggi like '%$tinggi%' and nafsu like '%$nafsu%' and mual like '%$mual%'";
									$result = $conn->query($sql);
									?>

									<?php while($row = $result->fetch_assoc()){
									?>
                                    
										echo "<script>
			Swal.fire('Wahh!.', 'Kami Mendiagnosa bahwa Anda <?php echo $row['penyakit']; ?> !', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
										
									<?php }
									?>