<?php
require_once('koneksi/koneksi-db.php');
$query = mysqli_query($koneksi,"SELECT jadwal.id_jadwal,hari,tanggal ,worship_lead, singers , pemusik, tamborin, soundman, khotbah FROM jadwal JOIN pelayan ON jadwal.id_jadwal = pelayan.id_jadwal ");

?>
<div class="konten"><div class="box">
    <div class="box-header">
      <h3 class="box-title">Jadwal Pelayanan</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
		<table class="table table-bordered" id="tabel">
			<thead>
				<tr>
				<th>NO</th>
				<th>Hari</th>
				<th>Tanggal</th>
				
				<th></th>
				
				</tr>
			</thead>
			<tbody>
            <?php
				$no=1;
				while($q=mysqli_fetch_array($query)){
				?>
				<tr>
				<td><?php echo $no++; ?></td>     
				<td><?php echo $q['hari']?></td>
				<td><?php echo $q['tanggal']?></td>
				
				
				<td>
			    	<a class="btn btn-success" href="?mod=lihat&id_jadwal=<?php echo $q['id_jadwal']; ?>#portfolio">Detail</a>
			    </td>
				
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <script type="text/javascript">
	 $(document).ready(function() {
	 	$('#tabel').dataTable({
	          "bPaginate": true,
	          "bLengthChange": true,
	          "bFilter": true,
	          "bSort": true,
	          "bInfo": true,
	          "bAutoWidth": true
	    });
	 });
</script>