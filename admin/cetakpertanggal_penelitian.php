<?php 

include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php 


$tgl=date('Y-m-d');
$tglorder=$_POST['tanggal'];
$sql=mysql_query("select * from kas
where tgl like '$_POST[tanggal]%' and jenis='masuk' order by kode asc") or die
(mysql_error());
?>
    

<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<body onLoad="javascript:print()">   
                            <table width="100%">
							<tr>
							<td><div align="center">
							  <h4 align="center" class="style1">Laporan Penelitian P3HH </h4></td>
							</tr>
							</table>
                        </div>
						<form name="sda" role="form" method="post">
                        <div class="panel-body">
						 <div class="col-lg-12">
                        	<div class="row">
							<CenteR>Laporan Penelitian :  <?php echo TanggalIndo($_POST[tanggal]);?>
							</center>
										<br>
										   <div class="dataTable_wrapper">
                                <table width="100%" border="1" class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th bgcolor="#CCCCCC">Judul Pengembangan</th>
                                            <th bgcolor="#CCCCCC">Target Capaian Outpu</th>
											<th bgcolor="#CCCCCC">Persentase Target Capaian Output</th>
											<th bgcolor="#CCCCCC">Realisasi Capaian Output</th>
                                            <th bgcolor="#CCCCCC">Persentase Realisasi Capaian Output</th>
											
											<th bgcolor="#CCCCCC">Jumlah</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										$no1=1;
										$total=0;
										
										while($data=mysql_fetch_array($sql)){
										?>	
			   
										<tr>
											<td ><?php echo $no1; ?></td>
											 <td><?php echo $data['kode']; ?></td>
											  <td><?php echo $data['ma']; ?></td>
											<td><?php echo TanggalIndo($data['tgl']);?></td>
											 <td><?php echo $data['keterangan']; ?></td>
											 <td><?php echo  "Rp.".number_format($data['keluar']).",-" ?></td>
											
										</tr>
										<?php
											$no1++;
											$total=$total+$data['keluar'];
										}
										?>
										<Tr>
										<th colspan="4">Total Keseluruhaan</th>
										<Td>Rp.<?php echo number_format($total) ; ?>,-</td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
							</div>
						  </div>
						
							 
							  <div class="col-lg-12 col-md-4" align="right">
								Padang,<?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Pimpinan
								<?php //echo $_SESSION['nama_user']; ?>
							  </div>
</form>
							
                            <!-- /.row (nested) -->
