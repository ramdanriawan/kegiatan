<?php session_start(); error_reporting(0);
include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php 
// code added by ramdan
$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
$query = $pdo->query("select * from penelitian where tgl like '%$_POST[hari_mulai]%'");

if($query->rowCount() < 1)
{
    die("Data yang diminta tidak ditemukan");
}

    if(isset($_POST["media"]))
    {
        
        while($row = $query->fetch(PDO::FETCH_OBJ))
        {
            $data_hari[] = $row;
        }
        
        $tanggal = TanggalIndo($_POST["hari_mulai"]);
        
echo <<<EOD
<table width="100%">
    <tr>
        <td>
            <div align="center">
                <h2 align="center" class="style1">Laporan Pengembangan P3HH (Perhari)</h2>
            </div>
        </td>
    </tr>
</table>

<form name="sda" role="form" method="POST">
    <div class="panel-body">
        <div class="col-lg-12">
            <div class="row">
                <CenteR>
                    Laporan Pengembangan :  $tanggal
                </center>
                <br>
                
                <div class="dataTable_wrapper">
                    <table width="100%" border="1" class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th bgcolor="#CCCCCC">No#</th>
                                <th bgcolor="#CCCCCC">Judul Pengembangan</th>
                                <th bgcolor="#CCCCCC">Target Capaian Outpu</th>
                                <th bgcolor="#CCCCCC">Persentase Target Capaian Output</th>
                                <th bgcolor="#CCCCCC">Realisasi Capaian Output</th>
                                <th bgcolor="#CCCCCC">Persentase Realisasi Capaian Output</th>
                                <th bgcolor="#CCCCCC">Jumlah</th>
                            </tr>
                        </thead>

                        <tbody>
EOD;

$total = 0;
foreach ($data_hari as $key => $value){
                        $no      = $key+1;
                        $total  += $value->keluar;
                        $tgl     = TanggalIndo($value->tgl);
                        $keluar  = number_format((int) $value->keluar);
                        
                        echo "
                            <tr>
                                <td>$no</td>
                                <td>$value->kode</td>
                                <td>$value->ma</td>
                                <td>$tgl</td>
                                <td>$value->keterangan</td>
                                <td>{$value->persentase}%</td>
                                <td>$keluar,-</td>
                            </tr>
                        ";
}                       
                        $total = number_format($total);
                        echo "
                            <tr>
                                <th colspan=6>Total Keseluruhaan</th>
                                <Td>Rp.$total,-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class='col-lg-12 col-md-4' align='right'>
        Padang, $tgl 
        <br/><br/><br/><br/>
        Pimpinan
        $_SESSION[namalengkap]
    </div>
</form>
";
}
// code ended 

// 
// $tgl=date('Y-m-d');
// $tglorder=$_POST['tanggal'];
// $sql=mysql_query("select * from penelitian
// where tgl like '$_POST[tanggal]%' and jenis='masuk' order by kode asc") or die
// (mysql_error());
?>

<!-- <body onload="javascript:print()"></body> -->