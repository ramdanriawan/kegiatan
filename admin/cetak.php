<?php session_start();

include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php
$tgl=date('Y-m-d');
$tgl1=$_GET['tgl1'];
$bln1=$_GET['bln1'];
$thn1=$_GET['thn1'];
$tgl2=$_GET['tgl2'];
$bln2=$_GET['bln2'];
$thn2=$_GET['thn2'];

?> 
<body onLoad="">   
<h3 align="center" class="style1">Laporan Monitoring Capaian Output Penelitian dan Pengembangan</h3>

<div align="center">DARI TANGGAL  <?php echo "$tgl1";?> / <?php echo "$bln1";?>/ <?php echo"$thn1";?> SAMPAI DENGAN TANGGAL  <?php echo"$tgl2";?> / <?php echo"$bln2";?>/ <?php echo"$thn2";?></div>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
<td width="7%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Judul Pengembangan</strong></td>
<td width="4%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Target Capaian Output</strong></td>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Persentase Target Capaian Output</strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Realisasi Capaian Output</strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Persentase Realisasi Capaian Output</strong></td>
<td width="18%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Masuk </strong></td>
<td width="16%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Keluar </strong></td>
</tr>
<?php

$ambildata=mysql_query("SELECT * from penelitian WHERE tgl >= '$thn1-$bln1-$tgl1' AND tgl <= '$thn2-$bln2-$tgl2'");
$cekdata=mysql_num_rows($ambildata);
if($cekdata=='0'){
echo "Maaf Data Yang anda cari tidak ada";
}
while($cetakdata=mysql_fetch_array($ambildata)){
$total_masuk=$cetakdata["jumlah"];
$hitung+=$total_masuk;
$total_keluar=$cetakdata["keluar"];
$hitung1+=$total_keluar;
$keseluruhan=$hitung-$hitung1;

?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["kode"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["ma"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["keterangan"]?></td>
<td bgcolor="#FFFFFF"><?php echo TanggalIndo($cetakdata['tgl'])?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["jenis"]?></td>
<td bgcolor="#FFFFFF"><?php echo "Rp.".number_format($cetakdata['jumlah']).",-"?></td>
<td bgcolor="#FFFFFF"><?php echo "Rp.".number_format($cetakdata['keluar']).",-"?></td>
</tr>
<?php } ?>
<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Penelitian Dan Pengembangan</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format($hitung);?>,- </strong></td>
</tr>
<tr>
<td colspan="5" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Kas Keluar   </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format($hitung1);?>,-  </strong></td>
</tr>

<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Saldo Kas </strong></div></td>
  <td bgcolor="#71DCFF">Total Kas Masuk - Total Kas Keluar</td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format($keseluruhan);?>,-  </strong></td>
</tr>
</table>


							  <div class="col-lg-12 col-md-4" align="right">
								Padang,<?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Pimpinan
								<?php echo $_SESSION['nama_user']; ?>
							  </div>