<?php 
$tahun_mulai = "$_GET[tgl1]-$_GET[bln1]-$_GET[thn1]";
$tahun_akhir = "$_GET[tgl2]-$_GET[bln2]-$_GET[thn2]";
$pdo = new PDO("mysql:host=localhost;dbname=kas", "root", "");

	$query = $pdo->query("select tgl, SUM(jumlah) as jumlah from kas where tgl >= '$tahun_mulai' and tgl <= '$tahun_akhir'");
	
	while($row_data = $query->fetch(PDO::FETCH_OBJ)){
		$data_chart["tahun"] = substr($row_data->tgl, 0, 4);
		$data_chart["jumlah"] = $row_data->jumlah;
		
		$data_chart_chart[] = $data_chart;
	}

echo json_encode($data_chart_chart);
 ?>