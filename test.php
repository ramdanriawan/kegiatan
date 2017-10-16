<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script src="./node_modules/chart.js/dist/Chart.min.js" charset="utf-8"></script>
		<script src="./node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>
	
	<pre>
		<?php 
		$tahun_mulai = $_GET["tahun_mulai"];
		$tahun_akhir = $_GET["tahun_akhir"];
		
		for ($i=$tahun_mulai; $i <= $tahun_akhir; $i++) { 
			$data_tahun[] = $i;
		}
		print_r($data_tahun);
		$pdo = new PDO("mysql:host=localhost;dbname=kas", "root", "");
		
		foreach($data_tahun as $value){
			$query = $pdo->query("select SUM(jumlah) as jumlah from kas where tgl >= '$value-01-01' and tgl <= '$value-12-31'");
			
			while($row_data = $query->fetch(PDO::FETCH_OBJ)){
				$data_chart["tahun"] = $value;
				$data_chart["jumlah"] = $row_data->jumlah;
				
				$data_chart_chart[] = $data_chart;
			}
		}
		
		print_r($data_chart_chart)
		 ?>
	</pre>
	
	</body>
</html>