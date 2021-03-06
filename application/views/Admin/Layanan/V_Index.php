<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users"></i> <span>Atur Dokter</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user"></i> <span>Atur Akun</span></a></li>
				<li><a class="active" href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-book"></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="lnr lnr-plus-circle"></i> <span>Atur Jaminan Kesehatan</span></a></li> 
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock"></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a ref="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10">
					<h3 class="page-title">Daftar Layanan</h3>
				</div>
				<div class="col-md-2" align="right">
        			<a href="<?php echo base_url('Layanan/inputLayanan'); ?>" class="btn btn-raised btn-primary"><span class="fa fa-plus" style="margin-right: 10px;"></span>Tambah</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php echo $status; ?>
					<div class="panel">
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th style="text-align: center;">No.</th>
										<th style="text-align: center;">Kode Layanan</th>
										<th style="text-align: center;">Nama</th>
										<th style="text-align: center;">Layanan Medis</th>
										<th style="text-align: center;">Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i = 1;
									if($layanan){
										foreach ($layanan as $value) {
											$encrypted_string = $this->encrypt->encode($value['id_layanan']);
											$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
											?>
											<tr>
												<td align="center"><?php echo $i++ . "."; ?></td>
												<td align="center"><?php echo $value['code_layanan']; ?></td>
												<td align="center"><?php echo $value['nama']; ?></td>
												<td align="center"><?php echo $value['layanan_medis']; ?></td>
												<td align="center">
													<a href="<?php echo base_url('Layanan/layananDetail/'.$id); ?>" class="btn btn-sm btn-primary"><span class="fa fa-info"></span></a>
													<a href="<?php echo base_url('Layanan/layananEdit/'.$id); ?>" class="btn btn-sm btn-warning"><span class="fa fa-pencil"></span></a>
													<button class="btn btn-sm btn-danger" onclick="deleteThis('<?php echo base_url('Layanan/deleteLayanan/'.$id); ?>');" ><span class="fa fa-trash"></span></button>
												</td>
											</tr>
											<?php
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>