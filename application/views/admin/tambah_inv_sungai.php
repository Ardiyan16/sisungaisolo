<?php $this->load->view('admin/header') ?>
<article class="content cards-page">
<script src="<?=base_url()?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
<style>
	.upload{
    background-color:#ff0000;
    border:1px solid #ff0000;
    color:#fff;
    border-radius:5px;
    padding:10px;
    text-shadow:1px 1px 0px green;
    box-shadow: 2px 2px 15px rgba(0,0,0, .75);
}
.upload:hover{
    cursor:pointer;
    background:#c20b0b;
    border:1px solid #c20b0b;
    box-shadow: 0px 0px 5px rgba(0,0,0, .75);
}
#file{
    color:green;
    padding:5px; border:1px dashed #123456;
    background-color: #f9ffe5;
}
#upload{
    margin-left: 45px;
}

#noerror{
    color:green;
    text-align: left;
}
#error{
    color:red;
    text-align: left;
}
#img{ 
    width: 30px;
    border: none; 
    height:30px;
	margin-left: -30px;
    margin-bottom: 240px;
}

.abcd img{
    width:480px;
	height:270px;
    padding: 5px;
    border: 1px solid rgb(232, 222, 189);
}
b{
    color:red;
}
</style>
    <div class="title-block">
        <h3 class="title">
            Tambah Inventaris Sungai
        </h3>
        <p class="title-description"> &nbsp;Menambah Inventaris Sungai</p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
				<?php echo $this->session->flashdata('item');?>
                    <div class="card-block">
                        <form class="form-horizontal" method="POST" action="<?=base_url()?>inventarisasi_sungai/simpan_data" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama Sungai</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="nama_sungai" required="" >
                                            <option value="">-Silahkan Pilih-</option>
                                            <option value="SWD 1" >SWD 1</option>
                                            <option value="SWD 2" >SWD 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">No.Patok</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_patok"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="desa" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kabupaten"   >
                                </div>
                            </div>
							<div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Dasar Sungai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dasar_sungai"   >
                                </div>
                            </div>
							<div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan"   >
                                </div>
                            </div>
							<hr>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sempadan Kiri</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sempadan_kiri"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lereng Luar Kiri</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lereng_luar_kiri"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Jalan Inspeksi Kiri</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jalan_inspeksi_kiri"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lereng Dalam Kiri</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lereng_dalam_kiri"   >
                                </div>
                            </div>
							<hr>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Sempadan Kanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sempadan_kanan"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lereng Luar Kanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lereng_luar_kanan"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Jalan Inspeksi Kanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jalan_inspeksi_kanan"   >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lereng Dalam Kanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lereng_dalam_kanan"   >
                                </div>
                            </div>
							<hr>
							
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Foto Sket</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" accept="image/*" name="sket" id="sket" required>
                                </div>
								<div id="gambarSket" class="abcd col-sm-offset-2 col-sm-10"></div>
                            </div>
							<div class="form-group">

                                <label for="inputEmail3" class="col-sm-2 control-label">Foto Sungai</label>
                                <div class="col-sm-10">
									<div id="filediv"><input name="foto[]" accept="image/*" type="file" id="file"/><br></div>
									
                                    <input type="button" id="add_more" class="btn btn-success" value="Tambah Gambar"/>
								 </div>
<script>
var abc = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
 $('#add_more').click(function() {
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'foto[]', type: 'file', id: 'file', accept: 'image/*'}),        
                $("<br>")
                ));
    });

//following function will executes on change event of file input to select different file	
$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                 abc += 1; //increementing global variable by 1
				
				var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div><br>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
			    $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: '../assets/x.png', alt: 'delete'}).click(function() {
                $(this).parent().parent().remove();
				
				
                }));
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

});


$(document).ready(function() {
	$('body').on('change', '#sket', function(){
            if (this.files && this.files[0]) {
                $("#gambarSket").append("<div id='gmbrsket" + "' class='abcd'><img id='previewsket" + "' src=''/></div>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded2;
                reader.readAsDataURL(this.files[0]);
               
			    $(this).hide();
                $("#gmbrsket").append($("<img/>", {id: 'img', src: '../assets/x.png', alt: 'delete'}).click(function() {
					$(this).parent().remove();
					$("#sket").show();
					
                }));
            }
        });
		function imageIsLoaded2(e) {
			$('#previewsket').attr('src', e.target.result);
    };
});


</script>
                               
								
                            </div>
							<hr>
                            <div class="form-group">
								 <div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary" style="position=center">Simpan Perubahan</button>
								</div>
							</div>
                        </form>


                    </div>
                </div>
                


            </div>
            <!-- /.col-xl-4 -->

            <!-- /.col-xl-4 -->
        </div>

        <!-- /.row -->
    </section>

</article>
<?php $this->load->view('admin/footer') ?>