<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Jadwal</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Hari</label>
	              <input type="text" name="hari" class="form-control" placeholder="hari" value=""/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Tanggal</label>
	              <input type="date" class="form-control" name="tanggal" placeholder="tanggal" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Worship Leader</label>
	              <input class="form-control"  name="worship_lead" placeholder="woship leader"></input>
	            </div>
	            
	            <div class="form-group">
	              <label>Singers</label>
	              <input type="text" class="form-control" name="singers" placeholder="Singers" value=""/>
	            </div>

	            <div class="form-group">
	              <label>Pemusik</label>
	              <input type="text" class="form-control" name="pemusik" placeholder="Pemusik" value=""/>
	            </div>

	            <div class="form-group">
	              <label>Tamborin</label>
	              <input type="text" class="form-control" name="tamborin" placeholder="Tamborin" value=""/>
	            </div>

	            <div class="form-group">
	              <label>Soundmand</label>
	              <input type="text" class="form-control" name="soundman" placeholder="Soundman" value=""/>
	            </div>

	             <div class="form-group">
	              <label>Khotbah</label>
	              <input class="form-control"  name="khotbah" placeholder="Khotbah"></input>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>