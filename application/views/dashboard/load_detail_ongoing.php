 <?php
            
             if($ongoing==true){
              $no=1;

              foreach ($ongoing as $tampil){
              $a= $tampil->satuan;
              $this->table->add_row($no,$tampil->no_reg, $tampil->nama_paket,$tampil->penyedia_jasa_konstruksi,$tampil->masa_konstruksi,$tampil->item_pekerjaan,$tampil->jenis_pekerjaan,$tampil->volume.$a,$tampil->latitude,$tampil->longitude,$tampil->keterangan,$tampil->tahun_data);
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