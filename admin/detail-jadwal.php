<?php  
require_once('../koneksi/koneksi-db.php');
$id_jadwal = ($_GET['id_jadwal']);
$datapelayan = mysqli_query($koneksi,"SELECT jadwal.id_jadwal ,worship_lead, singers , pemusik, tamborin, soundman, khotbah FROM jadwal JOIN pelayan ON jadwal.id_jadwal = pelayan.id_jadwal where jadwal.id_jadwal = '$id_jadwal'");
?>

<section>
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements disabled -->
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">List Pelayan</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-hover table-striped table-bordered">
						<thead>
						<?php
				while($q=mysqli_fetch_array($datapelayan)){
				?>
							<tr>
								<th>Worship Leader</th>
								<th><?php echo $q['worship_lead']?></th>
							</tr>
							<tr>
								<th>Singers</th>
								<th><?php echo $q['singers']?></th>
							</tr>
							<tr>
								<th>Pemusik</th>
								<th><?php echo $q['pemusik']?></th>
							</tr>
							<tr>
								<th>Tamborin</th>
								<th><?php echo $q['tamborin']?> </th>
							</tr>
							<tr>
								<th>Sound Man</th>
								<th><?php echo $q['soundman']?></th>
							</tr>
							<tr>
								<th>Khotbah</th>
								<th><?php echo $q['khotbah']?></th>
							</tr>
							<?php
				}
				?>
						</thead>

					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
		<!--/.col (right) -->
	</div>
</section>