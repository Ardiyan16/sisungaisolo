
<?php		
//$angkatan = $_GET['id'];
$idfull = $_GET['id'];

//echo $idfull;
?>
<div class="panel panel-default">
<div class="panel-body">
 <div class="panel-body table-responsive">
<p><a href="<?php echo base_url('peta/export_excel_sungai/'.$idfull) ?>" class="btn btn-success"><i class="fa fa-print"></i>Export ke Excel</a></p>
            <table id="example1" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th></th>
                    	<th>No</th>
                        <th>Nama Sungai</th>
                        <th>Orde Sungai</th>
                        <th>Panjang Sungai</th>
                        <th>Tahun Data</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th></th>
                    	<th>No</th>
                       <th>Nama Sungai</th>
                        <th>Orde Sungai</th>
                        <th>Panjang Sungai</th>
                        <th>Tahun Data</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    
                </tbody>
            </table>
            <?php
            $panjang=0;

            if($idfull=="0"){
                  $query = $this->db->query('SELECT sungai.panjang_sungai as panjang FROM sungai ');
                     foreach ($query->result() as $hasil) {
                            $panjang += $hasil->panjang;
                     }     
            }else{
                 $query = $this->db->query('SELECT sungai.panjang_sungai as panjang FROM sungai where orde_sungai="'.$idfull.'"');
                     foreach ($query->result() as $hasil) {
                            $panjang += $hasil->panjang;
                     }  
            }
            		
            ?><br />
            <div class="panel panel-primary">

		        <div class="panel-title">
		          
		        </div>

                <!-- <div class="panel-heading">Jumlah Panjang Sungai : <?php echo number_format($panjang,2);?>&nbsp;KM</div> -->

                <div class="panel-heading">Jumlah Panjang Sungai : <?php echo $panjang;?>&nbsp;KM</div>

		       

		     </div>
            
        </div>
</div>
</div>        

<!--         <script>
$(document).ready(function() {
    $('#example1').DataTable();
} );
</script> -->

<script type="text/javascript">
	var zonk =''
	var save_method;
	var table;
	var link = "<?php echo site_url('rekap_data')?>";
	var kdOrde = "<?php echo @$idfull;?>";

    
    $(document).ready(function() {
        if(kdOrde=="0"){
            orde2();
        }else{
            orde1();
        }
    
    });

	function orde1(){
		table = $('#example1').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, 
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": link+"/ajax_listid/"+kdOrde,
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

	};

    function orde2(){
        table = $('#example1').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, 
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": link+"/ajax_list/",
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

    };
</script>	