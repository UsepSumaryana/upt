<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Edit Jadwal</h3>
			</div>
			<div class="module-body">
				
				<form class="form-horizontal row-fluid" method="post" action="<?= base_url('jadwalController/edit_action') ?>">
					 <?php 
						$i=1;
						foreach($t_jadwal as $key): ?>
					<div class="control-group">
						<label class="control-label" for="basicinput">ID Jadwal</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_jadwal" placeholder="Masukan Id Jadwal" class="span8" value="<?= $key->id_jadwal ?>" readonly="readonly">
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">ID Sarana</label>
						<div class="controls">
							<input type="text" id="basicinput" name="id_sarana" placeholder="Masukan id sarana" class="span8" value="<?= $key->id_sarana ?>">
							<span class="help-inline"></span>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">ID User</label>
						<div class="controls">
							<input type="text" name="id_user" id="basicinput" placeholder="Masukan ID User " class="span8" value="<?= $key->id_user ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Tanggal Awal Penggunaan</label>
						<div class="controls">
							<input type="datetime-local" name="tanggalAwal" value="<?= $key->tgl_penggunaan_start ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Tanggal Akhir Penggunaan</label>
						<div class="controls">
							<input type="datetime-local" name="tanggalAkhir" value="<?= $key->tgl_penggunaan_end ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">Jadwal Source</label>
						<div class="controls">
							<select name="jadwalSource" size="">
						        <option value="upt">UPT</option>
						        <option value="admin">Admin</option>
						        <option value="user">User</option>
						    </select><br /><br />
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