<?php
error_reporting(0);
session_start();
include("../library/variabel.php");
if($_SESSION["user"]!="" && $_SESSION["pass"]!=""){
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
    <meta charset="UTF-8" />
    <title>Administrator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/theme.css" />
    <link rel="stylesheet" href="../css/MoneAdmin.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
	<link rel="stylesheet" href="../css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
	<script type="text/javascript" src="../dist/sweetalert.min.js"></script>
    <!--END GLOBAL STYLES -->
</head>
<body class="padTop53">
	<div id="wrap">
		<!-- HEADER SECTION -->
		 <?php include_once("menu_atas.php");?>
        <!-- END HEADER SECTION -->
		
		 <!-- MENU SECTION -->
		 <?php include_once("menu_admin.php");?>
        <!--END MENU SECTION -->
		<!--PAGE CONTENT -->
       <!--END PAGE CONTENT -->
	</div>
	<!-- FOOTER -->
		 <?php include_once("footer.php");?>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../js/jquery-2.0.3.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    
    <!-- edited by ramdan -->
    <script src="..\node_modules\jquery\dist\jquery.min.js" charset="utf-8"></script>
    <script src="../node_modules/jquery-ui/jquery-ui.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="..\node_modules\jquery-ui\jquery-ui.min.css">
    <script src="../node_modules/blobjs/Blob.min.js" charset="utf-8"></script>
    <script src="..\node_modules\file-saverjs\FileSaver.min.js" charset="utf-8"></script>
    <script src="..\node_modules\tableexport\dist\js\tableexport.min.js" charset="utf-8"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js" charset="utf-8"></script>
    <script>
    $(document).ready(function(){
        $("#form_filter_form").submit(function(event){
            event.preventDefault();
            var url = "<?php echo "http://$_SERVER[SERVER_NAME]$_SERVER[PHP_SELF]?menu=penelitian&"; ?>" + $(this).serialize();
            location.href = url;
        });
        
        $("#form_filter_form_pengembangan").submit(function(event){
            event.preventDefault();
            var url = "<?php echo "http://$_SERVER[SERVER_NAME]$_SERVER[PHP_SELF]?menu=pengembangan&"; ?>" + $(this).serialize();
            location.href = url;
        });
        
        $("#print_data_penelitian").click(function(event) {
    		$("#laporan_data").tableExport({
                headings: true,
    			filename: "laporan_data",
    			formats: ["xls", "csv", "txt"],
                bootstrap: true,
                ignoreCols: [7],
                ignoreRows: $("#laporan_data table tr").length - 1
    		});
    	});
        
        var canvas_tahun = "";
        var canvas_jumlah = "";
        $("#form11").submit(function(event){
			event.preventDefault();
		
		var data = $(this).serialize();
		
			$.ajax({
				url: "chart_server.php",
				data: data,
				success: function(response){
					$.each(response, function(index, val) {
						canvas_tahun.push(val.tahun);
						canvas_jumlah.push(val.jumlah);
					});
				}
			})
		})
		
		var canvas_data = new Chart($("#canvas_penelitian"), {
			type: 'bar',
		    data: {
		        labels: canvas_tahun,
		        datasets: [{
		            label: '# Jumlah uang',
		            data: canvas_jumlah,
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		})
	
    })
    </script>
    <!-- end edited by ramdan -->
</body>

<?php
}else{
	header("Location:../index.php");
}
?>