<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->


<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/plugins.js"></script>



<!-- ================================================
Data Tables
================================================ -->
<script src="<?php echo base_url().'assets_new/'; ?>js/datatables/datatables.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/lineDiag.js"></script> -->



<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->

<script type="text/javascript">
  var myColor = ["#39ca74","#e54d42","#f0c330","#3999d8","#35485d"];
var myData = [80,23,15,7,1];
var myLabel = ["Hello","Hi","Howdy","Wadup","Yo"];

function getTotal(){
  var myTotal = 0;
  for (var j = 0; j < myData.length; j++) {
    myTotal += (typeof myData[j] == 'number') ? myData[j] : 0;
  }
  return myTotal;
}

</script>

<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>









</body>

<!-- Mirrored from egemem.com/theme/kode/v1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:13 GMT -->
</html>