
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
  <script src="<?php echo base_url();?>assetslogin/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assetslogin/jquery/jquery-2.1.4.min.js"></script>
   <style>   
    .item-transition {
      transition: opacity .5s ease;
    }
    .item-enter {
      opacity: 0;
    }
    .item-leave {
      opacity: 0;   
      display: none;
      position: absolute;   
    }
    .fade-transition {
      transition: opacity .3s ease;
    }
    .fade-enter, .fade-leave {
      opacity: 0;
    }

    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.alert2 {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    
  </style>
  <script type="text/javascript">
    var BASE_URL = '<?php echo base_url();?>';
  </script>
  </head>
  <body>

    <div class="login-form" id="app">
      <form v-on:submit="login">
        <notification 
              v-bind:show-success="showNotifSuccess"
              v-bind:success-message="successMessage"
              v-bind:show-error="showNotifError"
              v-bind:error-message="errorMessage">
        </notification><br /><br />  
        <div class="top">
          <img src="<?=base_url()?>/assets/img/logo_new2.jpg" style="width: 64%;" alt="icon" class="icon">
         
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" autocomplete="off" required="" id="username" name="username"  v-model="identity">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" autocomplete="off" required="" id="password" name="password" v-model="password">
            <i class="fa fa-key"></i>
          </div>
         
          <button type="submit" class="btn btn-default btn-block" >Sign In</button>
        </div>
      </form>
    </div>

<template id="notification">
  <div class="box-header" v-if="showSuccess" transition="item">
    <div class="alert alert-success alert-dismissible">
      <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      {{{ successMessage }}}
    </div>

  </div>
  <div class="box-header" v-if="showError" transition="item">
  <!--   <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Error!</h4>
      {{{ errorMessage }}}
    </div> -->
    <div class="alert">
      <span class="closebtn" >&times;</span> 
      {{{ errorMessage }}}
    </div>
  </div>
</template>

</body>
<script src="<?php echo base_url();?>assetslogin/js/modules/auth/login.min.js"></script>

<script src="<?php echo base_url();?>build/vue.js"></script>
<script src="<?php echo base_url();?>build/vue-router.js"></script>
<script src="<?php echo base_url();?>build/vue-animated-list.js"></script>
<script src="<?php echo base_url();?>build/vue-validator.js"></script>
<script src="<?php echo base_url();?>build/user/login.js"></script>
</html>

