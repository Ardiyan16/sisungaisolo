
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

 <style type="text/css">
  
  td.details-control {
      background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
      cursor: pointer;
  }
  tr.shown td.details-control {
      background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
  }
 </style>  
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index-2.html" class="btn btn-light">Dashboard</a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-widget">

  <!-- Start Top Stats -->
  <div class="col-md-12">
 
  </div>
  <!-- End Top Stats -->
  <div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Sungai Orde 1</span>
      <h3><a href="#" data-toggle="modal" onclick="orde_1(<?php echo $orde_1->orde_sungai; ?>)"><?php echo $orde_1->orde_1;?></a></h3>
      <?php
       $query = $this->db->query('SELECT sungai.panjang_sungai as panjang,id_sungai FROM sungai where orde_sungai="1"');

                     foreach ($query->result() as $hasil) {
                            @$panjang += $hasil->panjang;
                            $id_sungai = $hasil->id_sungai;

                     }  
      ?>               
      <span class="diff"> <b><?php echo $panjang;?>&nbsp;KM</b></span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Sungai Orde 2</span>
      <h3><a href="#" data-toggle="modal" onclick="orde_2(<?php echo $orde_2->orde_sungai; ?>)"><?php echo $orde_2->orde_2;?></a></h3>
      <?php
       $query = $this->db->query('SELECT sungai.panjang_sungai as panjang, id_sungai FROM sungai where orde_sungai="2"');

                     foreach ($query->result() as $hasil) {
                            @$panjang2 += $hasil->panjang;
                            $id_sungai = $hasil->id_sungai;
                     }  
      ?>               
      <span class="diff"> <b><?php echo $panjang2;?>&nbsp;KM</b></span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Sungai Orde 3</span>
      <h3><a href="#" data-toggle="modal" onclick="orde_3(<?php echo $orde_3->orde_sungai; ?>)"><?php echo $orde_3->orde_3;?></a></h3>
      <?php
       $query = $this->db->query('SELECT sungai.panjang_sungai as panjang, id_sungai FROM sungai where orde_sungai="3"');

                     foreach ($query->result() as $hasil) {
                            @$panjang3 += $hasil->panjang;
                            $id_sungai = $hasil->id_sungai;
                     }  
      ?>               
      <span class="diff"> <b><?php echo $panjang3;?>&nbsp;KM</b></span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Infrastruktur Terbangun</span>
      <h3><a href="#" data-toggle="modal" onclick="terbangun()"><?php echo $terbangun->id;?></a>
      </h3>
         
       <!-- <span class="diff"> <b><?php echo $terbangun;?>&nbsp;KM</b></span> -->
    </li>
    <li class="col-xs-6 col-lg-2">
       <span class="title"><i class="fa fa-dot-circle-o"></i> Infrastruktur Ongoing</span>
      <h3><a href="#" data-toggle="modal" onclick="ongoing()"><?php echo $ongoing->id2;?></a></h3>
    
    </li>
    <li class="col-xs-6 col-lg-2">
       <span class="title"><i class="fa fa-dot-circle-o"></i> Usulan</span>
      <h3><a href="#" data-toggle="modal" onclick="usulan()"><?php echo $usulan->id3;?></a></h3>
          
    </li>
  </ul>
  </div>

  <!-- Start First Row -->
  <div class="row">

    <!-- <div class="col-md-12 col-lg-6">

     <div class="panel panel-widget" >
      <canvas id="demobar" width="100" height="100"></canvas>
      <script  type="text/javascript">

                                                var ctx = document.getElementById("demobar").getContext("2d");
                                                var data = {
                                                          labels: [
                                                            '<?php foreach($grafik_lokal as $lokal) { echo $lokal["bulan"]?>','<?php } ?>' ],
                                                          datasets: [
                                                          {
                                                            label: "Infrastruktur Ongoing",
                                                            fill: false,
                                                            lineTension: 0.1,
                                                            backgroundColor: "rgba(59, 100, 222, 1)",
                                                            borderColor: "rgba(59, 100, 222, 1)",
                                                            pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
                                                            pointHoverBorderColor: "rgba(59, 100, 222, 1)",
                                                            data: [<?php $total = 0; foreach($grafik_lokal as $lokal) { $total = $total+$lokal['nilai']; echo '"' .$total. '",';}?>]
                                                          }
                                                          ]
                                                          };
                                        
                                                var myBarChart = new Chart(ctx, {
                                                          type: 'line',
                                                          data: data,
                                                          options: {
                                                          barValueSpacing: 20,
                                                          scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    min: 0,
                                                                }
                                                            }],
                                                            xAxes: [{
                                                                        gridLines: {
                                                                            color: "rgba(0, 0, 0, 0)",
                                                                        }
                                                                    }]
                                                            }
                                                        }
                                                      });
                                              </script>
    </div>
    </div>
 -->
    <div class="col-md-12 col-lg-4">
      <!-- <center><h2>Infrastuktur Terbangun</h2></center> -->
     <div class="panel panel-widget" >
      <center><h3>Statistik Usulan</h3></center> 
      
      <canvas id="oilChart" ></canvas>
      <script  type="text/javascript">
      var oilCanvas = document.getElementById("oilChart");

      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;

      var oilData = {
          labels: [
            
              "Usulan Eksternal",
               "Usulan Internal",
          ],
          datasets: [
              {
                  data: [<?php $total = 0; foreach($grafik_internal as $grafik) { $total = $grafik['total']; echo '"' .$total. '",';}?>],
                  backgroundColor: [
                    "#228B22",
                    "#B22222",
                  ]
              }]
      };

      var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });
        </script>
      </div>
    </div>
    <div class="col-md-12 col-lg-4">
      
     <div class="panel panel-widget" >
      <center><h3>Statistik Tindak Lanjut Usulan Eksternal</h3></center>
      
      <canvas id="oilChart2" ></canvas>
      <script  type="text/javascript">
      var oilCanvas = document.getElementById("oilChart2");

      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;

      var oilData = {
          labels: [
            
              "Pending",
               "Sudah Disurvey",
               "Sudah Dibangun",
               "Sudah Masuk Usulan DIPA",
          ],
          datasets: [
              {
                  data: [<?php $total = 0; foreach($grafik_lanjut as $grafike) { $total = $grafike['total']; echo '"' .$total. '",';}?>],
                  backgroundColor: [
                    "#2290b2",
                    "#ffec26",
                    "#228B22",
                    "#B22222",
                  ]
              }]
      };

      var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });
        </script>
      </div>
    </div>

     <div class="col-md-12 col-lg-4" >
      
        <div class="panel panel-widget" >
       <!--  <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                text-align: center;
                border: 1px solid #ddd;
                padding: 4px;
            }
            td{
            text-align: center;
                padding: 4px;
                border: 1px solid #ddd;
            }

            tr:nth-child(even){background-color: #fff}

            th {
                background-color: #4CAF50;
                color: white;
            }
            </style> -->
               <center><h3>Infrastuktur Terbangun</h3></center>

<table style=" border-collapse: collapse; width: 100%;">
  <tr>
    <th style="background-color: #4CAF50;color: white;">NO</th>
    <th style="background-color: #4CAF50;color: white;">Nama Bangunan</th>
    <th style="background-color: #4CAF50;color: white;">Jumlah Volume</th>
    <th style="background-color: #4CAF50;color: white;">Satuan</th>
  </tr>
  <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">1</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Parapet</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $parapet->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Km</td>
  </tr>
  <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">2</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Revetment</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $revetment->volumea;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Km</td>
  </tr>
    <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">3</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Tanggul Tanah</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $tanggul_tanah->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Km</td>
  </tr>
    <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">4</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Bendung</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $bendung->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Buah</td>
  </tr>
    <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">5</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Groundsill/Cekdam</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $cekdam->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Buah</td>
  </tr>
    <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">6</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Pompa Air</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $pompa_air->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Buah</td>
  </tr>
    <tr>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">7</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Pintu Air</td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;"><?php echo $pintu_air->volumene;?></td>
    <td style="text-align: center; padding: 4px;border: 1px solid #ddd;">Buah</td>
  </tr>

</table>
          </div>
   </div>


  </div>  

   <div class="row">

   </div>


  <!-- End Second Row -->


  <!-- Start Third Row -->
  
  <!-- End Third Row -->


 




</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a>
  </div> 
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>
        
        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>
        
        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>
        
        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>
        
        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>    
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<div class="modal fade" id="Modal_orde1" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Sungai Orde 1</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
               <table id="examplene2" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>

                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">Nama Sungai</th>

                  <th style="color: #000;">Orde Sungai</th>

                  <th style="color: #000;">Panjang Sungai</th>

                  <th style="color: #000;">Tahun Data</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function orde_1(id) {
    $('#Modal_orde1').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_orde = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_orde2/"+id_orde,
      //     data :  'id_orde='+ id_orde,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-data1");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });
     var  table2 = $('#examplene2').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_orde1_id')?>/"+id_orde,

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }
</script>
<div class="modal fade" id="Modal_orde2" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Sungai Orde 2</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
           <!-- <div id="fetched-data" style="display: none;"></div> -->
             <table id="examplene3" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>

                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">Nama Sungai</th>

                  <th style="color: #000;">Orde Sungai</th>

                  <th style="color: #000;">Panjang Sungai</th>

                  <th style="color: #000;">Tahun Data</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function orde_2(id) {
    $('#Modal_orde2').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_orde2 = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_orde2/"+id_orde,
      //     data :  'id_orde='+ id_orde,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-data");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });

       var  table3 = $('#examplene3').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_orde2_id')?>/"+id_orde2,

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }
</script>

<div class="modal fade" id="Modal_terbangun" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Infrastruktur Terbangun</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
            <table id="examplene6" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>
                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">No Reg</th>

                  <th style="color: #000;">Nama Paket / Bangunan</th>

                  <th style="color: #000;">Penyedia Jasa Konstruksi</th>

                  <th style="color: #000;">Masa Konstruksi</th>
                  <th style="color: #000;">Item Pekerjaan</th>

                  <th style="color: #000;">Jenis Pekerjaan</th>

                  <th style="color: #000;">Keterangan</th>

                  <th style="color: #000;">Tahun Data</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function terbangun() {
    $('#Modal_terbangun').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
     // var id_infrastuktur = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_terbangun/",
      //     //data :  'id_infrastuktur='+ id_infrastuktur,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-dataterbangun");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });
       table = $('#examplene6').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_terbangun')?>",

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    });
  }
</script>

<div class="modal fade" id="Modal_orde3" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Sungai Orde 3</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
           <!-- <div id="fetched-data2" style="display: none;"></div> -->
           <table id="examplene4" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>

                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">Nama Sungai</th>

                  <th style="color: #000;">Orde Sungai</th>

                  <th style="color: #000;">Panjang Sungai</th>

                  <th style="color: #000;">Tahun Data</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function orde_3(id) {
    $('#Modal_orde3').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_orde4 = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_orde2/"+id_orde,
      //     data :  'id_orde='+ id_orde,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-data2");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });
       var  table4 = $('#examplene4').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_orde3_id')?>/"+id_orde4,

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }
</script>



<div class="modal fade" id="Modal_ongoing" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Infrastruktur Ongoing</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
       <!--     <div id="fetched-dataongoing" style="display: none;"></div> -->
        <table id="examplene5" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>
                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">No Reg</th>

                  <th style="color: #000;">Nama Paket / Bangunan</th>

                  <th style="color: #000;">Penyedia Jasa Konstruksi</th>

                  <th style="color: #000;">Masa Konstruksi</th>
                  <th style="color: #000;">Item Pekerjaan</th>

                  <th style="color: #000;">Jenis Pekerjaan</th>

                  <th style="color: #000;">Keterangan</th>

                  <th style="color: #000;">Tahun Data</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function ongoing() {
    $('#Modal_ongoing').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
     // var id_infrastuktur = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_ongoing/",
      //     //data :  'id_infrastuktur='+ id_infrastuktur,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-dataongoing");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });

       var  table4 = $('#examplene5').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_ongoing')?>",

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }
</script>

<div class="modal fade" id="Modal_usulan" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Infrastruktur Usulan</h4>
          </div>
          <div class="modal-body" style="overflow: scroll;">
           <table id="examplene10" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th style="color: #000;"></th>
                  <th style="color: #000;">No.</th>

                  <th style="color: #000;">Tanggal Usulan</th>

                  <th style="color: #000;">Pengirim Usulan</th>

                  <th style="color: #000;">Detail Usulan</th>

                  <th style="color: #000;">Koordinat Latitude</th>
                  <th style="color: #000;">Koordinat Longitude</th>

                  <th style="color: #000;">Tindak Lanjut</th>

                  <th style="color: #000;">Keterangan</th>

                  <th style="color: #000;">Nama Pengirim</th>
                  <th style="color: #000;">Email Pengirim</th>
                  <th style="color: #000;">No Hp Pengirim</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var link = "<?php echo site_url('rekap_data')?>";

  function usulan() {
    $('#Modal_usulan').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
     // var id_infrastuktur = id;
      // var id_koordinat = id2;
      // var infrastruktur = document.getElementById("nama_infrastruktur");
      // infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      // infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_usulan/",
      //     //data :  'id_infrastuktur='+ id_infrastuktur,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-datausulan");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });
        var  table10 = $('#examplene10').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_usulan')?>",

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }

   function detail_paket(id) {
    $('#myModale').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_ongoing = id;
      // var id_koordinat = id2;
      // var sungai = document.getElementById("nama_sungai");
      // sungai.innerHTML = 'Data '+nama_sungai;
      // sungai.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      // $.ajax({
      //     type : 'post',
      //     url : link+"/create_load_ongoing/"+id_ongoing,
      //     data :  'id_ongoing='+ id_ongoing,
      //     success : function(data){
      //       //console.log(data);
      //       var a = document.getElementById("fetched-data");
      //     a.innerHTML= data;//menampilkan data ke dalam modal
      //     a.style.display="block";
      //     }
      // });

       var table9 = $('#examplene9').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_ongoing_id')?>/"+id,

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy();
  }
</script>

<div class="modal fade" id="myModale" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Detail Infrastruktur Ongoing</h4>
          </div>
          <div class="modal-body">
           <table id="examplene9" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th></th>

                  <th>No.</th>

                  <th>Item Pekerjaan</th>

                  <th>Volume</th>

                  <th>Satuan</th>

                  <th>Latitude</th>

                  <th>Longitude</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->