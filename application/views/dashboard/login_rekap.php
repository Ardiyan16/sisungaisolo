
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from egemem.com/theme/kode/v1.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:19 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Login</title>

  <!-- ========== Css Files ========== -->
   <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/responsive.css" rel="stylesheet">
   <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-select/bootstrap-select.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/summernote/summernote.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/summernote/summernote-bs3.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/sweet-alert/sweet-alert.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/datatables/datatables.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/chartist/chartist.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/rickshaw.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/detail.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/graph.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/legend.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/date-range-picker/daterangepicker-bs3.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/fullcalendar/fullcalendar.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="index.html">
      <div class="alert alert-danger" role='alert' id="pesan" hidden>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span><span class='sr-only'>Close</span>
        </button> 
            Username dan password tidak sesuai, silahkan coba kembali
      </div>
        <div class="top">
          <img src="<?=base_url()?>/assets/img/logo_new2.jpg" style="width: 64%;" alt="icon" class="icon">
         
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" autocomplete="off" required="" id="username" name="username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" autocomplete="off" required="" id="password" name="password">
            <i class="fa fa-key"></i>
          </div>
          <?php
          $info = $this->session->flashdata('info');
                        if(!empty($info))
                        {
                            echo $info;
                        }
           ?><br>
          <input type="button" id="login" class="btn btn-default btn-block" value="Login">
        </div>
      </form>
    </div>

</body>

<script src="<?php echo base_url();?>assetslogin/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assetslogin/jquery/jquery-2.1.4.min.js"></script>


</html>

<script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
         function cekform(){
            if(!$("#username").val())
            {
                alert('maaf username tidak boleh kosong');
                $("#username").focus();
                return false;
            }
            if(!$("#password").val())
            {
                alert('maaf password tidak boleh kosong');
                $("#password").focus();
                return false;
            }
        }

        $(function() {
            $('#login').click(function(){
                var pm1=$('#username').val();
                var pm2=$('#password').val();
                $.ajax({
                        type: "POST",
                        url : "<?php echo base_url(); ?>peta/getlogin",
                        data : "username="+pm1+"&password="+pm2+"",
                        datatype : 'json',
                        beforeSend: function(msg){$("#login").val('Loading...');},
                        success: function(msg){
                            var data_cek = JSON.parse(''+msg+'' );
                            if (data_cek.hasil=='1') {
                                $("#login").val('Login Sukses');
                                window.location.assign("<?=base_url()?>rekap_data/dashboard2");
                            }else{
                                $("#login").val('Login');
                                $("#pesan").attr('hidden',false);
                            }
                        }
                    });
            });
          });
        $("#password").keyup(function (e) {
            if (e.keyCode == 13) {
                $('#login').click();
            }
        });
        $("#username").keyup(function (e) {
            if (e.keyCode == 13) {
                $('#password').focus();
            }
        });

  </script>