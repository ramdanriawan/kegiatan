
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_pengembangan.php" method="post">
			<fieldset>
				<legend style="margin-bottom: -10px">Cetak Perhari</legend>
				<div class="form-group">
					<input type="date" name="bulan_mulai">
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

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_pengembangan.php" method="post">
			<fieldset>
				<legend>Cetak Perbulan</legend>
				<div class="form-group">
					<input type="month" name="bulan_mulai">
				</div>

				<div class="form-group">
					<h3>To: </h3>
				</div>
				
				<div class="form-group">
					<input type="month" name="bulan_akhir">
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

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-inline" action="cetakpertanggal_pengembangan.php" method="post">
			<fieldset>
				<legend>Cetak Pertahun</legend>
				<div class="form-group">
					<input type="year" name="year_mulai">
				</div>

				<div class="form-group">
					<h3>To: </h3>
				</div>

				<div class="form-group">
					<input type="year" name="year_akhir">
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
