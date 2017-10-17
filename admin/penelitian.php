<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * from penelitian";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>

<!--  edited by ramdan riawan -->
<?php 
$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
$query_pdo = $pdo->query("select tgl from penelitian");

while($row_pdo = $query_pdo->fetch(PDO::FETCH_OBJ))
{
	$data_tgl[] = $row_pdo;
}
?>


<div class="row">
	<div class="col-md-12">
		<div class="btn-group">
			<button type="button" class="btn btn-primary">
				<a href="?menu=tambah_penelitian" style="color:white">Entry</a>
				<i class='icon icon-white icon-plus'></i>
			</button>
			<button id="print_data_penelitian" class="btn btn-info" type="button">
				Print
				<span class="icon icon-print"></span> 
			</button>
		</div>
		
		<form id="form_filter_form" class="form-inline pull-right">
			
			<div id="form_pertahun" class="form-group">
				<?php if($_GET["checkbox_pertahun"] == "yes"){
					$selected_checbox = "checked";
				}else {
					$selected_checbox = "";
				} ?>
				<label>
					<input type="checkbox" name="checkbox_pertahun" value="yes" <?php echo $selected_checkbox; ?>>
					Pertahun
				</label>
			</div>
			
			<div id="form_filter" class="form-group">
				<select name="bulan_filter" id="bulan" class="form-control" >
					<?php 
					foreach($data_tgl as $key => $value)
					{
						$bulan_nama[] = substr($value->tgl, 5, 2);
					}
					
					$bulan_nama = array_unique($bulan_nama);
					sort($bulan_nama);
					
					foreach ($bulan_nama as $value) {
						switch ($value) {
							case 01:
								$bulan_nama_nama = "January";
								break;
							case 02:
								$bulan_nama_nama = "February";
								break;
							case 03:
								$bulan_nama_nama = "Maret";
								break;
							case 04:
								$bulan_nama_nama = "April";
								break;
							case 05:
								$bulan_nama_nama = "Mei";
								break;
							case 06:
								$bulan_nama_nama = "Juni";
								break;
							case 07:
								$bulan_nama_nama = "Juli";
								break;
							case 08:
								$bulan_nama_nama = "Agustus";
								break;
							case 09:
								$bulan_nama_nama = "September";
								break;
							case 10:
								$bulan_nama_nama = "Oktober";
								break;
							case 11:
								$bulan_nama_nama = "November";
								break;
							case 12:
								$bulan_nama_nama = "Desember";
								break;
						}
						
						if($_GET["bulan_filter"] == $value)
						{
							$selected = "selected";
						}else {
							$selected = "";
						}
						echo "<option value='$value' $selected>$bulan_nama_nama</option>";
					}
					?>
				</select>
				
			</div>
			
			<div class="form-group">
				<select name="tahun_filter" id="tahun" class="form-control" >
					<?php 
					
					foreach($data_tgl as $key => $value){
						$tahun_array[] = substr($value->tgl, 0, 4);
					}
					
					$tahun_array = array_unique($tahun_array);
					sort($tahun_array);
					foreach ($tahun_array as $value) {
						
						if($_GET["tahun_filter"] == $value){
							$selected = "selected";
						}else {
							$selected = "";
						}
						echo "<option value='$value' $selected>$value</option>";
					}
					?>
				</select>
			</div>
			
			<div class="form-group">
				<button  id="form_filter_button" class="btn btn-primary" type="submit" name="button">
					Filter 
					<span class="icon icon-filter"></span>
				</button>
			</div>
		</form>
	</div>
</div>

<!--  end edited by ramdan -->
<p>
	
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">Penelitian</h4>
	</div>
	<div class="panel-body">
		<div id="laporan_data" class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
					<th>Judul Kegiatan Penelitian</th>
					<th>Target Waktu Capaian Output</th>
						<th>Target Capaian Output</th>
						<th>Persentase Target Capaian Output</th>
						<th>Realisasi Capaian Output</th>
						<th>Persentase Realisasi Output</th>

					<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$tahun = $_GET["tahun_filter"];
				$bulan = $_GET["bulan_filter"];
				$tahundanbulan = "$tahun-$bulan";
				
				if(!isset($_GET["tahun_filter"], $_GET["bulan_filter"]) && !isset($_GET["filter_pertahun"]))
				{
					$tahundanbulan = date("Y") . "-" . date("m");
				}
				
				$kegiatanSql = "SELECT * from penelitian where jenis='Masuk' AND tgl LIKE '%$tahundanbulan%' ORDER BY kode DESC LIMIT $hal, $row";
				
				if(isset($_GET["checkbox_pertahun"]) && isset($_GET["tahun_filter"]))
				{
					$kegiatanSql = "SELECT * from penelitian where jenis='Masuk' AND tgl LIKE '%$_GET[tahun_filter]%' ORDER BY kode DESC LIMIT $hal, $row";
				}
				
				$kegiatanQry = mysql_query($kegiatanSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($kegiatan = mysql_fetch_array($kegiatanQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $kegiatan['kode'];?></td>
						<td><?php echo $kegiatan['ma'];?></td>
						<td><?php echo $kegiatan['keterangan'];?></td>
						<td><?php echo TanggalIndo($kegiatan['tgl']);?></td>
						<td>Rp.<?php echo number_format($kegiatan['jumlah']) ?>,-</td>
						<td><?php echo $kegiatan['persentase'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_penelitian&aksi=hapus&nmr=<?php echo $kegiatan['kode']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_penelitian&aksi=edit&nmr=<?php echo $kegiatan['kode']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="7" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=kas_penelitian&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>