<table id="examplene" class="display responsive nowrap" cellspacing="0" width="100%">
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
             
              
            </table>


<script type="text/javascript">
    var zonk =''
    var save_method;
    var table;
    var link = "<?php echo site_url('rekap_data')?>";
  //  var kdOrde = "<?php echo @$idfull;?>";

    
    $(document).ready(function() {
        var  table2 = $('#examplene').DataTable({

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
    
    });            