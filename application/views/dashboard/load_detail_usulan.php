 <?php
            
             if($usulan==true){
              $no=1;

              foreach ($usulan as $tampil){
              
              $this->table->add_row($no,$tampil->id_usulan, $tampil->tanggal_usulan,$tampil->pengirim_usulan,$tampil->detail_usulan,$tampil->latitude,$tampil->longitude,$tampil->tindak_lanjut,$tampil->keterangan);
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