
<div class="row">
<div class="col-xs-12">
<div id="form-data">
<div class="widget-box">
<div class="widget-header">
		<h4 class="widget-title">Form Kategori Produk</h4>

	<div class="widget-toolbar">
		<a href="#" data-action="collapse">
			<i class="ace-icon fa fa-chevron-up"></i>
		</a>

		<a onclick="Batal()" data-action="close">
			<i class="ace-icon fa fa-times"></i>
		</a>
	</div>
	</div>

<div class="widget-body">
<div class="widget-main">
<div class="row">
<div class="col-xs-12">
<?php echo form_open_multipart('sungai/save', 'role="form-horizontal"'); ?>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Album </label>
		<div class="col-sm-10">
			<input type="text" id="album_nama" name="album_nama" placeholder="Album Nama" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Gambar </label>
		<div class="col-sm-10">
			<input type="file" name="userfile" id="userfile" required>
			<span class="help-block"></span>
			<img id="loader" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
			<img id="preview" src="#" style="height: 100px;border: 1px solid #DDC; " />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Album Title Meta </label>
		<div class="col-sm-10">
			<input type="text" id="album_title_meta" name="album_title_meta" placeholder="Album Title Meta" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Album Keyword Meta </label>
		<div class="col-sm-10">
			<input type="text" id="album_keyword_meta" name="album_keyword_meta" placeholder="Album Keyword Meta" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Album Deskripsi Meta </label>
		<div class="col-sm-6">
			<textarea class="form-control" id="album_deskripsi_meta" name="album_deskripsi_meta" placeholder="Album Deskripsi Meta" class="col-xs-10 col-sm-5"></textarea>
		</div>
	</div>
	<div class="col-md-offset-2 col-md-9">
				<input type="submit" name="mit" class="btn btn-primary" value="Submit">

				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
	</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div><!-- /.row -->
</div>
</div><!-- /.row -->
</div>