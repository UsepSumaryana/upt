<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Tambah Sarana</h3>
			</div>
			<div class="module-body">
				<form class="form-horizontal row-fluid" method="post" action="<?= base_url('datamasterController/add_action') ?>" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label" for="basicinput">ID Sarana</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_sarana" placeholder="Masukan ID jadwal" class="span8">
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Sarana</label>
						<div class="controls">
							<input type="text" id="basicinput" name="nama_sarana" placeholder="Masukan nama sarana" class="span8">
							<span class="help-inline"></span>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Jenis Olahraga</label>
						<div class="controls">
							<input type="text" name="jenis_olahraga" id="basicinput" placeholder="Masukan nama sarana" class="span8">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Lokasi</label>
						<div class="controls">
							<input type="text" name="geoLa" id="basicinput" placeholder="Latittude" class="span8">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="text" name="geoLon" id="basicinput" placeholder="Longtittude" class="span8">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<textarea name="alamat" placeholder="alamat" class="span8" rows="5"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Foto</label>
						<div class="controls">
							<input name="foto" class="form-control" type="file" class="file">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success">Submit Form</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>

<script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>