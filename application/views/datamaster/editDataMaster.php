<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Edit Sarana</h3>
			</div>
			<div class="module-body">
				
				<form class="form-horizontal row-fluid" method="post" action="<?= base_url('datamasterController/edit_action') ?>">
					 <?php 
						$i=1;
						foreach($t_sarana as $key): ?>
					<div class="control-group">
						<label class="control-label" for="basicinput">ID Sarana</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_sarana" placeholder="Masukan nama sarana" class="span8" value="<?= $key->id_sarana ?>" readonly="readonly">
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Sarana</label>
						<div class="controls">
							<input type="text" id="basicinput" name="nama_sarana" placeholder="Masukan nama sarana" class="span8" value="<?= $key->nama_sarana ?>">
							<span class="help-inline"></span>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Jenis Olahraga</label>
						<div class="controls">
							<input type="text" name="jenis_olahraga" id="basicinput" placeholder="Masukan nama sarana" class="span8" value="<?= $key->jenis_olahraga ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Lokasi</label>
						<div class="controls">
							<input type="text" name="geoLa" id="basicinput" placeholder="Latittude" class="span8"
							value="<?= $key->geo_lat ?>">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="text" name="geoLon" id="basicinput" placeholder="Longtittude" class="span8" value="<?= $key->geo_lon ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Alamat</label>
						<div class="controls">
							<textarea name="alamat" placeholder="alamat" class="span8" rows="5" value=""><?= $key->alamat ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Foto</label>
						<div class="controls">
							<input name="foto" class="form-control" type="file" >
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success">Submit Form</button>
						</div>
					</div>
					<?php endforeach; ?>
				</form>
				
			</div>
		</div>
	</div>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>