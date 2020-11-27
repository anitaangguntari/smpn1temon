<center>	
	<form action="<?php echo base_url('jadwal/download') ; ?>" method="post">
		<input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal']; ?>">
		<input type="hidden" name="gambar_jadwal" value="<?php echo $jadwal['gambar_jadwal']; ?>">
		<button type="submit">Download </button>
		
	</form>
	<p><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;<?php echo $jadwal['gambar_jadwal']; ?></p>
	<!-- <img src="<?=base_url()?>file/<?=$jadwal['file'];?>" alt="" class="img-responsive"> -->
	<?php 	
	$file = $jadwal['gambar_jadwal'];
	if(empty($file)){
	?>
	<!-- <embed src="" style="width: 100%;" height="500"> </embed> -->
	<img src="" alt="" class="img-responsive">
	<?php
	} else {
	?>
	<!-- <img src="<?=base_url()?>file/<?=$jadwal['file'];?>" alt="" class="img-responsive"> -->
	<!-- <embed src="<?=base_url()?>images/<?=$jadwal['gambar_jadwal'];?>" style="width: 100%;" height="500"> </embed> -->
	<img src="<?=base_url()?>images/<?=$jadwal['gambar_jadwal'];?>" alt="" class="img-responsive">
	<?php
	}
	?>
</center>