<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from penelitian where kode='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update kas set ma='".$_POST["ma"]."', keterangan='".$_POST["nama"]."',  tgl='".$_POST["tgl"]."', jumlah='".$_POST["usia"]."' where kode='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=pengembangan'>";
			
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Data Pengembangan</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Judul Pengembangan</label>
							<div class="col-lg-4">
								<input type="text" name="judulpengembangan" value="<?php echo $editDb["judulpengembangan"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="date" name="targetcapaianoutput" value="<?php echo $editDb["targetout"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Persentase Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="date" required name="persentasetargetcapaianoutput" value="<?php echo $editDb["persentasetargetcapaianoutput"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Realisasi Capian Output</label>
							<div class="col-lg-4">
								<input type="text" required name="realisasicapaianoutput" value="<?php echo $editDb["realisasicapaianoutput"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Persentase Realisasi Capaian Output</label>
							<div class="col-lg-4">
								<input type="text" required name="persentaserealisasioutput" value="<?php echo $editDb["persentaserealisasioutput"];?>" class="form-control" />
							</div>
						</div>
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=pengembangan" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>