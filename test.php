<?php 

$tgl_mulai = "2012";

$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
$query = $pdo->query("select tgl from penelitian where tgl like '%$tgl_mulai%'");

while ($row_data = $query->fetch(PDO::FETCH_OBJ)) {
	$data_tgl[] = substr($row_data->tgl, 0, 7);
}

print_r($data_asli);

?>