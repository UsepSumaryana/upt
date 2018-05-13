<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Data Sarana Prasarana Olahraga</h3>
			</div>
			<div class="module-body">
				<div class=" clearfix">
					<div class="pull-left">
						<form class="form-horizontal row-fluid input-append" action="#" enctype="multipart/form-data" >
							<div class="control-group">
								<label class="control-label" for="basicinput">Nama Sarana Olahraga</label>
								<div class="controls">
									<input type="text" class="span10">
									<button class="btn" type="button">
									<i class="icon-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="pull-right">
						<a href="<?=  base_url('datamaster/add')?>" class="btn btn-success"><i class="icon-plus">&nbsp Tambah </i></a>
					</div>
				</div>
				<hr>
				<table class="table table-striped table-bordered table-condensed">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Sarana</th>
							<th>Jenis Olahraga</th>
							<th>Lokasi</th>
							<th>Foto</th>
							<th class="span2 align-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach($t_sarana as $u){?> 
							
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $u->nama_sarana ?></td>
							<td><?php echo $u->jenis_olahraga ?></td>
							<td><?php echo $u->alamat ?></td>
							<td><img src="<?= base_url('asset/img') ?>/<?php echo $u->gambar ?>" alt=""></td>
							<td class="align-center">
								<a href="<?= base_url('datamaster/edit')?>/<?= $u->id_sarana ?>" title="">
									<button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button></a> |
								<a href="<?= base_url('dataMasterController/delete_action')?>/<?= $u->id_sarana ?>" title=""><button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
									</a>
							</td>
						</tr>
						<?php $i++; } ?>
					</tbody>
				</table>
				<br/>
				
				<br>
			</div>
		</div>
		
	</div>
</div>

</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->

