<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from penelitian where kode='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update kas set ma='".$_POST["ma"]."', keterangan='".$_POST["nama"]."',  tgl='".$_POST["tgl"]."', jumlah='".$_POST["usia"]."' where kode='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=penelitian'>";
			
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Data Penelitian</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Judul Penelitian</label>
							<div class="col-lg-4">
								<input type="text" name="judulpenelitian" value="<?php echo $editDb["judulpenelitian"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="int" name="targetcapaianoutput" value="<?php echo $editDb["targetout"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Persentase Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="int" required name="persentasetargetcapaianoutput" value="<?php echo $editDb["persentasetargetcapaianoutput"];?>" class="form-control" />
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
								<input type="int" required name="persentaserealisasioutput" value="<?php echo $editDb["persentaserealisasioutput"];?>" class="form-control" />
							</div>
						</div>
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=penelitian" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>