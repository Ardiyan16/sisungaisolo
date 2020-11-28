 <?php
            $km=' km';
             if($data==true){
              $no=1;

              foreach ($data as $tampil){
              
              $this->table->add_row($no,$tampil->nama_sungai,$tampil->orde_sungai,$tampil->panjang_sungai.$km,$tampil->tahun_data);
              $no++;
              }
              $tabel=$this->table->generate();
              echo $tabel;
             }else {
                echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
             }
            ?>           

  <script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>            