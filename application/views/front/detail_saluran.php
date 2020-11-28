<?php $this->load->view('front/header') ?>
	<div class="container">

		<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-8">
		  	<div class="panel panel-primary">
			  <div class="panel-heading">Detail Bangunan</div>
			  <div class="panel-body">
                  <p style="font-size: large;"><b>Foto Sket</b></p>
                  <img src="<?=base_url()?>images/sket/<?=$saluran->sket?>" class="img-responsive" alt="Gambar Sket">
			    <table class="table table-striped">
				    <thead>
				      <tr>
				        <th style="font-size: large; border-bottom: 4px solid #ddd;">Detail Saluran</th>
                        <th style="font-size: large; border-bottom: 4px solid #ddd;"></th>
                        <th style="font-size: large; border-bottom: 4px solid #ddd;"></th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Nama Sungai</td>
				        <td>:</td>
				        <td><?=$saluran->nama_sungai?></td>
				      </tr>
				      <tr>
				        <td>No Patok</td>
				        <td>:</td>
				        <td><?=$saluran->no_patok?></td>
				      </tr>
				      <tr>
				        <td>Wilayah</td>
				        <td>:</td>
				        <td><?=$saluran->desa?> <?=$saluran->kecamatan?> <?=$saluran->kabupaten?></td>
				      </tr>
                       <thead>
                          <tr>
                            <th style="font-size: large; border-bottom: 4px solid #ddd;">Kondisi Yang ada</th>
                            <th style="font-size: large; border-bottom: 4px solid #ddd;"></th>
                            <th style="font-size: large; border-bottom: 4px solid #ddd;"></th>
                          </tr>
                        </thead>
				      <tr>
				        <td>a. Sempadan Kiri</td>
				        <td>:</td>
				        <td><?=$saluran->sempadan_kiri?></td>
				      </tr>
				      <tr>
				        <td>b. Lereng luar kiri</td>
				        <td>:</td>
				        <td><?=$saluran->lereng_luar_kiri?></td>
				      </tr>
                        <tr>
				        <td>c. Jalan Inspeksi Kiri</td>
				        <td>:</td>
				        <td><?=$saluran->jalan_inspeksi_kiri?></td>
				      </tr>
                    <tr>
				        <td>d. Lereng Dalam Kiri</td>
				        <td>:</td>
				        <td><?=$saluran->lereng_dalam_kiri?></td>
				      </tr>
                        <tr>
				        <td>e. Dasar Sungai</td>
				        <td>:</td>
				        <td><?=$saluran->dasar_sungai?></td>
				      </tr>
                        <tr>
				        <td>f. Lereng Dalam KAnan</td>
				        <td>:</td>
				        <td><?=$saluran->lereng_dalam_kanan?></td>
				      </tr>
                         <tr>
				        <td>g. Jalan Inspeksi Kanan</td>
				        <td>:</td>
				        <td><?=$saluran->jalan_inspeksi_kanan?></td>
				      </tr>
                        <tr>
				        <td>h. Lereng luar Kanan</td>
				        <td>:</td>
				        <td><?=$saluran->lereng_luar_kanan?></td>
				      </tr>
                        <tr>
				        <td>i. Sempadan Kanan</td>
				        <td>:</td>
				        <td><?=$saluran->sempadan_kanan?></td>
				      </tr>
				    </tbody>
				</table>
			  </div>
			</div>
		  	
		  </div>
		  <div class="col-md-2"></div>
		</div>
	 
	  
	</div>

<?php $this->load->view("front/footer"); ?>