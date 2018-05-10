
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Penjadwalan</h3>
							</div>
							<div class="module-body">
                               <div class=" clearfix">
                                   <div class="pull-left">
								    <form class="form-horizontal row-fluid input-append" action="#">
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
                                        <a href="<?=  base_url('penjadwalan/add')?>" class="btn btn-success"><i class="icon-plus">&nbsp Tambah Jadwal</i></a>
                                    </div>
                                </div>
                                <hr>
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>Pengguna</th>
									  <th>Tanggal Penggunaan</th>
                                      <th>Jam</th>
									  <th  class="span4">Tujuan</th>
									  <th class="span2 align-center">Aksi</th>
									</tr>
								  </thead>
								  <tbody>
                                       <?php 
                                       $i = 1;

                                       foreach($t_jadwal as $u){ ?>
									<tr>
									  <td><?php echo $i ?></td>
									  <td><?php echo $u->nama_lengkap ?></td>
									  <td><?php echo date("Y-m-d",strtotime($u->tgl_penggunaan_start)) ?></td>
									  <td><?php echo date("H:i:s",strtotime($u->tgl_penggunaan_start)) ?></td>
									  
									  <td><?php echo $u->tujuan ?></td>
									  <td class="align-center">
                                        <a href="<?= base_url('penjadwalan/edit')?>/<?= $u->id_jadwal ?>" title=""><button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button></a> | 
                                        <a href="<?= base_url('jadwalController/delete_action')?>/<?= $u->id_jadwal ?>" title=""><button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button></a>
                                      </td>
									</tr>
                                       <?php $i++;} ?>
								  </tbody>
								</table>

								<br/>
								
								<br>
							</div>
						</div>

						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

