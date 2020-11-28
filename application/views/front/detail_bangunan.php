<?php $this->load->view('front/header') ?>
	<div class="container">

		<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-8">
		  	<div class="panel panel-primary">
			  <div class="panel-heading">Detail Bangunan</div>
			  <div class="panel-body">
			    <table class="table table-striped">
				    <thead>
				      <tr>
				        <th></th>
				        <th></th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Nama Bangunan</td>
				        <td>:</td>
				        <td><?=$bangunan->nama_bangunan?></td>
				      </tr>
				      <tr>
				        <td>Koordinat X</td>
				        <td>:</td>
				        <td><?=$bangunan->latitude?></td>
				      </tr>
				      <tr>
				        <td>Koordinat Y</td>
				        <td>:</td>
				        <td><?=$bangunan->longitude?></td>
				      </tr>
				      <tr>
				        <td>Pemeliharaan</td>
				        <td>:</td>
				        <td><?=$bangunan->pemeliharaan?></td>
				      </tr>

				    </tbody>
				</table>
			  </div>
			</div>



		  </div>
		  <div class="col-md-2"></div>
		</div>

	 <div id="clo" >

	 	<img class="img-responsive" src="<?php echo base_url() ?>data/detail/bangunan/data1/<?php echo $bangunan->file1 ?>" >
	  <?php //echo $excel; ?>
	 </div>

	 <div id="clo" >


	 <img class="img-responsive" src="<?php echo base_url() ?>data/detail/bangunan/data2/<?php echo $bangunan->file2 ?>" >



	 </div>
	</div>

<script type="text/javascript">
	$("#clo thead:first-child").hide();
$("#clo tr th:first-child").hide();
</script>
<?php $this->load->view("front/footer"); ?>
