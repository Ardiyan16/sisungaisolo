
	var save_method;
	var link = "<?php echo site_url('Informasi')?>";
	var table;


	function reset() {
		document.getElementById("judul_kategori_informasi"+mdl).value = '';
		document.getElementById("kategori_informasi_title_meta"+mdl).value = '';
		document.getElementById("kategori_informasi_keyword_meta"+mdl).value = '';
		//document.getElementById("kategori_informasi_deskripsi_meta"+mdl).value = '';
	}

	function alertForm(data) {
		$('#idAlert'+mdl).html(data).fadeIn(function(){$('#idAlert'+mdl).fadeOut(5000);});
	}

	$(document).on('click', '#btnTambah'+mdl, function(){
		$('#form'+mdl).slideUp();
		reset();
		document.getElementsByTagName("form")[0].setAttribute("id", "formInput"+mdl);
		$('#form'+mdl).fadeIn(1000);
		$('#btnTambah'+mdl).hide();
		$('#bacaData'+mdl).hide();
		 ckeditor();
	});

	$(document).ready(function(){
	$('#form-add').submit(function(e) {
		
		tinyMCE.triggerSave();
		e.preventDefault(); var formData = new FormData($(this)[0]);
	
		$.ajax({
			url: $(this).attr("action"), type: 'POST', dataType: 'json', data: formData, async: true,
			beforeSend: function() {$('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);},
			success: function(response) {
				if(response.status) {$("#loading").modal('hide');swal_berhasil();$('#form'+mdl).slideUp(500, 'swing');alertForm(data);$('#bacaData'+mdl).show();$('#btnTambah'+mdl).fadeIn(1000);lihatData(); 
				} else {$('#bacaData'+mdl).slideUp(500,'swing');$('#panel-data'+mdl).fadeIn(1000); reload_table(); swal_error(response.error); }
			},
			complete: function() { $('#btnSave'+mdl).text('save'); $('#btnSave'+mdl).attr('disabled',false); },
			cache: false, contentType: false, processData: false
		});
		return false;
	});

	function readURL(input) {
		$("#preview").show();
		if (input.files && input.files[0]) {
			var rd = new FileReader(); 
			rd.onload = function (e) { $('#preview'+mdl).attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
		}
	}
	$("#userfile").change(function(){ readURL(this); });

	});

	// $(document).on('submit', '#formInput'+mdl, function() {
	// 	$("#loading").modal('show');
	//     $.post(linke+"Informasi/ajax_add", $(this).serialize())
	//         .done(function(data) {
	// 			$("#loading").modal('hide');
	// 			swal_berhasil();
	//             $('#form'+mdl).slideUp(500, 'swing');
	// 			//alertForm(data);
	//             $('#bacaData'+mdl).show();
	// 			$('#btnTambah'+mdl).fadeIn(1000);
	// 			lihatData();
	//         });
	             
	//     return false;
	// });



	


	
	$(document).ready(function(){
		$('#form-upload').submit(function(e) {
			tinyMCE.triggerSave();
			e.preventDefault(); var formData = new FormData($(this)[0]);
			$.ajax({
				url: $(this).attr("action"), type: 'POST', dataType: 'json', data: formData, async: true,
				beforeSend: function() { $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true); },
				success: function(response) {
					if(response.status) { $("#loading").modal('hide');swal_berhasil();$('#form-update'+mdl).slideUp(500, 'swing');alertForm(data);$('#bacaData'+mdl).show();$('#btnTambah'+mdl).fadeIn(1000);lihatData();
					} else { Batal2(); reload_table(); swal_error(response.error); }
				},
				complete: function() { $('#btnSave').text('save'); $('#btnSave').attr('disabled',false); },
				cache: false, contentType: false, processData: false
			});
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload2'+mdl).attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload").change(function(){ readURL(this); });
	});
	
	function save() {
		var url;
		url = linke+"Informasi/update_kategori/";
		tinyMCE.triggerSave();
		$('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);
		$.ajax({
			url : url, type: "POST", dataType: "JSON", data: $('#form').serialize(),
			success: function(data) {
				if(data.status) {  $("#loading").modal('hide');swal_berhasil();$('#form-update'+mdl).slideUp(500, 'swing');alertForm(data);$('#bacaData'+mdl).show();$('#btnTambah'+mdl).fadeIn(1000);lihatData();  
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); 
					}
				}
				$('#btnSave').text('save'); $('#btnSave').attr('disabled',false); 
			},
			error: function (jqXHR, textStatus, errorThrown) {
				swal({ title:"ERROR", text:"Error adding / update data", type: "warning", closeOnConfirm: true}); 
				$('#btnSave').text('save'); $('#btnSave').attr('disabled',false);  
			}
		});
	}
	
	$(document).ready(function(){
      lihatData();

      $('#idImgLoader').show();
	  // $('#idImgLoader').fadeOut(2000);
	  // setTimeout(function(){
   //          data();
   //    }, 2000);
      

    });

    function lihatData(){
    	console.log(linke);

    	
	    $("#tabelData"+mdl).fadeOut("slow", function(){

			$.ajax({
				type: "POST",
				url: linke+"Informasi/act_table",
				success:function(html){
					$("#tabelData"+mdl).html(html);
				}
			});
			$('#idImgLoader').hide();
			$("#tabelData"+mdl).fadeIn('slow');
	    });
	}
	

	
	function data(){
		$('#data').fadeIn();
	}
	
	
	
	function reload_table() {
    	table.ajax.reload(null, false);
	}
	
	function Tambah() {
		save_method = 'add'; 
		$('#bacaData'+mdl).fadeOut('slow');
		$('#form-data'+mdl).fadeIn('slow'); 
		document.getElementById('form-add').reset();
	}
	
	function Batal() { 
		$('#bacaData'+mdl).slideUp(500,'swing');
		$('#panel-data'+mdl).fadeIn(1000); 
	}
	
	function Batal2() { 
		$('#form-update').slideUp(500,'swing');
		$('#panel-data').fadeIn(1000); 
	}
	
	function edit(id) {
			//document.getElementsByTagName("form-update")[0].setAttribute("id", "formEdit"+mdl);
			save_method = 'update';
			$('#bacaData'+mdl).hide();
			$('#form-update'+mdl).slideUp(500, 'swing');
            $('#form-update'+mdl).slideDown(500);
			//document.getElementById('formAksi').reset();
			$.ajax({
				url : linke+"Informasi/ajax_edit/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(result) {  
					var img = linke+'assets/images/informasi_dini/'+result.kategori_informasi_gambar;
					$('#id_ketegori_informasi2'+mdl).val(result.id_ketegori_informasi);
					$('#id_ketegori_informasi3'+mdl).val(result.id_ketegori_informasi);
					$('#judul_kategori_informasi2'+mdl).val(result.judul_kategori_informasi);
					$('#preview-upload2'+mdl).attr('src', img);
					$('#kategori_informasi_title_meta2'+mdl).val(result.kategori_informasi_title_meta);
					//tinymce.editors[1].setContent(result.kategori_informasi_deskripsi_meta);
					$('#kategori_informasi_keyword_meta2'+mdl).val(result.kategori_informasi_keyword_meta);

				}, error: function (jqXHR, textStatus, errorThrown) {
					alert('Error get data from ajax');
				}
			});
	}
	
	function hapus(id) {
		if (confirm('Are you sure delete this data?')) {
			$.ajax ({
				url : linke+"Informasi/ajax_delete/"+id,
			//	url : "<?php echo site_url('Informasi/ajax_delete')?>/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data) {
					// setTimeout(function(){
     //                    Batal();
     //                }, 1000);
					
					setTimeout(function(){
                        reload_table();
					}, 1000);
					swal_berhasil(); 
				}, error: function (jqXHR, textStatus, errorThrown) {
					swal({ title:"ERROR", text:"Error delete data", type: "warning", closeOnConfirm: true}); 
					$('#btnSave').text('save'); $('#btnSave').attr('disabled',false); 
				}
			});
		}
	}
