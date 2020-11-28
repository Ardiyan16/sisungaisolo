<!-- <?php
 $id = $this->uri->segment(3); 
echo $id;
?> -->
<?php
             if($detail_paket==true){
              $no=1;
              foreach ($detail_paket as $tampil){
              
              $this->table->add_row($no,$tampil->item_pekerjaan_detail,$tampil->volume_detail,$tampil->satuan_detail,$tampil->latitude_detail,$tampil->longitude_detail);
              $no++;
              }
              $tabel=$this->table->generate();
              echo $tabel;
             }else {
                echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
             }
            ?>