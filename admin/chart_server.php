<?php error_reporting(0);
$tahun_mulai = "$_GET[thn1]-$_GET[bln1]-$_GET[tgl1]";
$tahun_akhir = "$_GET[thn2]-$_GET[bln2]-$_GET[tgl2]";

$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");

	for ($i=$_GET["thn1"]; $i <= $_GET["thn2"]; $i++) { 
		
		if($i == $_GET["thn2"])
		{
			$tgl_akhir = "$i-$_GET[bln2]-$_GET[tgl2]";
		}
		else 
		{
			$tgl_akhir = "$i-12-$_GET[tgl1]";
		}
		
		$data_tahun_awal = "$i-$_GET[bln1]-$_GET[tgl1]";
		$data_tahun_akhir = $tgl_akhir;
	
		$query = $pdo->query("select tgl, SUM(jumlah) as jumlah from penelitian where tgl >= '$data_tahun_awal' and tgl <= '$data_tahun_akhir'");
		$query2 = $pdo->query("select tgl, SUM(jumlah) as jumlah from pengembangan where tgl >= '$data_tahun_awal' and tgl <= '$data_tahun_akhir'");
		
		while($row_data = $query->fetch(PDO::FETCH_OBJ)){
			$data_chart["tahun"] = $i;
			
			$data_chart["jumlah"] = $row_data->jumlah;
		}
		$data_chart_chart["penelitian"][] = $data_chart;
		
		while($row_data2 = $query2->fetch(PDO::FETCH_OBJ)){
			$data_chart["tahun"] = $i;
			
			$data_chart["jumlah"] = $row_data2->jumlah;
		}
		$data_chart_chart["pengembangan"][] = $data_chart;
}

$data_json = json_encode($data_chart_chart);

if($data_json == null)
{
	echo '{"Tahun":"Tidak ada data", "Jumlah":"Tidak ada data"}';
}else {
	echo $data_json;
}
 ?>