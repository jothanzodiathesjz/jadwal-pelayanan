<?php
require_once('../koneksi/koneksi-db.php');
$id_jadwal = ($_GET['id_jadwal']);
$query = mysqli_query($koneksi,"SELECT jadwal.id_jadwal ,hari,tanggal,worship_lead, singers , pemusik, tamborin, soundman, khotbah FROM jadwal JOIN pelayan ON jadwal.id_jadwal = pelayan.id_jadwal where jadwal.id_jadwal = '$id_jadwal'");
$data = mysqli_fetch_array($query);
?>

<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Jadwal</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="update.php">
	            <!-- text input -->
				<input type="hidden" name="id_jadwal" value="<?php echo $data['id_jadwal']; ?>">
	            <div class="form-group">
	              <label>Hari</label>
	              <input type="text" name="hari" class="form-control" placeholder="" value="<?php echo $data['hari']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Tanggal</label>
	              <input type="date" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Worship Leader</label>
	              <input class="form-control"  name="worship_lead" placeholder="woship leader" value="<?php echo $data['worship_lead']; ?>"></input>
	            </div>
	            
	            <div class="form-group">
	              <label>Singers</label>
	              <input type="text" class="form-control" name="singers" placeholder="Singers" value="<?php echo $data['singers']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Pemusik</label>
	              <input type="text" class="form-control" name="pemusik" placeholder="Pemusik" value="<?php echo $data['pemusik']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Tamborin</label>
	              <input type="text" class="form-control" name="tamborin" placeholder="Tamborin" value="<?php echo $data['tamborin']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Soundmand</label>
	              <input type="text" class="form-control" name="soundman" placeholder="Soundman" value="<?php echo $data['soundman']; ?>"/>
	            </div>

	             <div class="form-group">
	              <label>Khotbah</label>
	              <input class="form-control"  name="khotbah" placeholder="" value="<?php echo $data['khotbah']; ?>"></input>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
				
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>