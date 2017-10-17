
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_penelitian.php" method="post">
			<fieldset>
				<legend style="margin-bottom: -5px"> Cetak Perhari</legend>
				<div class="form-group">
					<input class="cetak_laporan_data" type="text" name="hari_mulai">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">
						print
						<span class="icon icon-print"></span>
					</button>
				</div>


				<div class="form-group">
					<input type="hidden" name="media" value="perhari">
				</div>
			</fieldset>
		</form>
	</div>
</div>

<p>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_penelitian.php" method="post">
			<fieldset>
				<legend style="margin-bottom: -5px"> Cetak Perbulan </legend>
				<div class="form-group">
					<input  class="cetak_laporan_data" type="text" name="hari_mulai">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">
						print
						<span class="icon icon-print"></span>
					</button>
				</div>


				<div class="form-group">
					<input type="hidden" name="media" value="perbulan">
				</div>
			</fieldset>
		</form>
	</div>
</div>

<p>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_pengembangan.php" method="post">
			<fieldset>
				<legend style="margin-bottom: -5px"> Cetak Pertahun </legend>
				<div class="form-group">
					<input  class="cetak_laporan_data" data-date-format="yy-mm-dd" type="text" name="hari_mulai">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">
						print
						<span class="icon icon-print"></span>
					</button>
				</div>

				<div class="form-group">
					<input type="hidden" name="media" value="pertahun">
				</div>
			</fieldset>
		</form>
	</div>
</div>
