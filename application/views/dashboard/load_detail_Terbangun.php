 <?php
            
             if($terbangun==true){
              $no=1;

              foreach ($terbangun as $tampil){
              $a= $tampil->satuan;
              $this->table->add_row($no,$tampil->nama_paket,$tampil->penyedia_jasa_konstruksi,$tampil->masa_konstruksi,$tampil->item_pekerjaan,$tampil->volume.$a,$tampil->latitude,$tampil->longitude,$tampil->keterangan,$tampil->item_pekerjaan,$tampil->aknop,$tampil->tahun_data);
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