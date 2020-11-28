<?php $this->load->view('front/header_patok') ?>


	<style>
		#myImg {
		    border-radius: 5px;
		    cursor: pointer;
		    transition: 0.3s;
		}

		#myImg:hover {opacity: 0.7;}

		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}

		/* Modal Content (image) */
		.modal-content {
		    margin: auto;
		    display: block;
		    width: 80%;
		    max-width: 700px;
		}

		/* Caption of Modal Image */
		#caption {
		    margin: auto;
		    display: block;
		    width: 80%;
		    max-width: 700px;
		    text-align: center;
		    color: #ccc;
		    padding: 10px 0;
		    height: 150px;
		}

		/* Add Animation */
		.modal-content, #caption {
		    -webkit-animation-name: zoom;
		    -webkit-animation-duration: 0.6s;
		    animation-name: zoom;
		    animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
		    from {-webkit-transform:scale(0)}
		    to {-webkit-transform:scale(1)}
		}

		@keyframes zoom {
		    from {transform:scale(0)}
		    to {transform:scale(1)}
		}

		.next{
			margin-top: 245px;
    		right: 187px;
    		position: absolute;
		    color: #434343;
		    font-size: 40px;
		    font-weight: bold;
		    transition: 0.3s;
		}

		.next:hover,
		.next:focus {
		    color: #bbb;
		    text-decoration: none;
		    cursor: pointer;
		}


		.prev{
			margin-top: 245px;
    		left: 187px;
    		position: absolute;
		    color: #434343;
		    font-size: 40px;
		    font-weight: bold;
		    transition: 0.3s;
		}

		.prev:hover,
		.prev:focus {
		    color: #bbb;
		    text-decoration: none;
		    cursor: pointer;
		}

		/* The Close Button */
		.close {
		    position: absolute;
		    top: 15px;
		    right: 35px;
		    color: #f1f1f1;
		    font-size: 40px;
		    font-weight: bold;
		    transition: 0.3s;
		}

		.close:hover,
		.close:focus {
		    color: #bbb;
		    text-decoration: none;
		    cursor: pointer;
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
		    .modal-content {
		        width: 100%;
		    }
		}
		</style>
	<div class="container">

		<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-8">
		   <h2><?=$patok->nama_prasarana ?></h2>
		  	<div class="panel panel-primary">
			  <div class="panel-heading">Detail <?=$menu_aktif?></div>
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
					        <td>Nama</td>
					        <td>:</td>
					    	<td><?=$patok->nama_prasarana?></td>
					    </tr>
					    <tr>
					        <td>Koordinat X</td>
					        <td>:</td>
					    	<td><?=$patok->latitude?></td>
					    </tr>
					    <tr>
					        <td>Koordiant Y</td>
					        <td>:</td>
					    	<td><?=$patok->longitude?></td>
					    </tr>
				      <tr>
				        <td>Pemeliharaan</td>
				        <td>:</td>
				        <td><?=$patok->pemeliharaan?></td>
				      </tr>

				      <!--
				       <tr>
				        <td>Resiko</td>
				        <td>:</td>
				        <?php
				        	if($patok->tingkat_resiko > 90){
				        		?>
				        <td><img src="<?php echo base_url() ?>assets/img/warna_resiko/biru.png"></td>
				        <td>Tak ada Resiko</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko > 70 && $patok->tingkat_resiko <= 90){
				        		?>
				        <td><img src="<?php echo base_url() ?>assets/img/warna_resiko/hijau.png"></td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko >= 50 && $patok->tingkat_resiko <=70){
				        		?>
				        <td><img src="<?php echo base_url() ?>assets/img/warna_resiko/kuning.png"></td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko < 50){
				        		?>
				        <td><img src="<?php echo base_url() ?>assets/img/warna_resiko/merah.png"></td>
				        		<?php
				        	}
				         ?>

				      </tr> -->
				    <!--   <tr>
				        <td>Keterangan Resiko</td>
				        <td>:</td>
				        <?php
				        	if($patok->tingkat_resiko > 90){
				        		?>
				        <td>Tak ada Resiko</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko > 70 && $patok->tingkat_resiko <= 90){
				        		?>
				        <td>Resiko Rendah</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko >= 50 && $patok->tingkat_resiko <=70){
				        		?>
				       <td>Resiko Sedang</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko < 50){
				        		?>
				        <td>Resiko Tinggi</td>
				        		<?php
				        	}
				         ?>

				      </tr> -->
			<!-- 	      <tr>
				        <td>Pemeliharaan</td>
				        <td>:</td>
				        <?php
				        	if($patok->tingkat_resiko > 90){
				        		?>
				        <td>Pemeliharaan Rutin</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko > 70 && $patok->tingkat_resiko <= 90){
				        		?>
				        <td>Pemeliharaan Preventif</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko >= 50 && $patok->tingkat_resiko <=70){
				        		?>
				       <td>Pemeliharaan Korektif</td>
				        		<?php
				        	}
				         ?>
				         <?php
				        	if($patok->tingkat_resiko < 50){
				        		?>
				        <td>Pemeliharaan Rehabilitas</td>
				        		<?php
				        	}
				         ?>

				      </tr> -->

				    </tbody>
				</table>
			  </div>
			</div>



		  </div>

		</div>

		<div class="row" >
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<img class="img-responsive" src="<?php echo base_url() ?>data/detail/patok/data1/<?php echo $patok->file_excel ?>.jpg" >

		  	<?php //echo $excel; ?>

			

		
		
        <img class="img-responsive" src="<?php echo base_url() ?>data/detail/patok/data2/<?php echo $patok->file_excel ?>.jpg" >

		  	<?php //echo $excel; ?>

		</div>
		</div>


	</div>


<script type="text/javascript">
	$("#clo thead:first-child").hide();
$("#clo tr th:first-child").hide();
</script>

		<!-- The Modal -->
	<div id="myModal" class="modal">
	  <a href="#" onclick="tutup();"><span  class="close">x</span></a>
	  <a href="#" onclick="next();"><span  class="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></span></a>
	  <a href="#" onclick="prev();"><span  class="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></span></a>
	  <img class="modal-content" id="img01">
	  <div id="caption"></div>
	</div>


		<script>
		// Get the modal
		var ImageCnt = 0;
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");

		function show_image(url,arr){
			ImageCnt=arr;
			modal.style.display = "block";
		    modalImg.src = url;

		}
		function tutup(){
			 $("#myModal").hide();

		}


		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal

		var myImage= new Array();
		myImage[0]="<?=base_url()?>images/patok/<?=$patok->foto1?>";
		myImage[1]="<?=base_url()?>images/patok/<?=$patok->foto2?>";
		myImage[2]="<?=base_url()?>images/patok/<?=$patok->foto3?>";
		myImage[3]="<?=base_url()?>images/patok/<?=$patok->foto4?>";


		function next(){
			if (ImageCnt<myImage.length-1) {

			    ImageCnt++;
			    modalImg.src = myImage[ImageCnt];
			    console.log(ImageCnt);
			}

		  }
		function prev(){
			if (ImageCnt>0) {

			    ImageCnt--;
			    modalImg.src = myImage[ImageCnt];
			    console.log(ImageCnt);
			}

		  }
		</script>


<?php $this->load->view("front/footer"); ?>
