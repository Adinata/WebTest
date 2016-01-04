	
	<h1> Daftar Siswa </h1>
	<ul>
	<?php
		foreach($siswa ->result() as $r){
			echo " <li> ".$r->nama."</li>";
		}
	?>
	</ul>
	<p> Jumlah Data : <?php echo $siswa->num_rows(); ?>
	<p> <br\> Waktu Loading Data {elapsed_time} Detik </br\></p>


