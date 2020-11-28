  <?php
 
  header("Content-Type: application/force-download");
  header("Cache-Control: no-cache, must-revalidate"); 
  header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
  header("content-disposition: attachment;filename=laporan_rekap_sungai".date('dmY').".xls");
 
 ?>
 <table class="table table-hover" border="1">
                                <thead>
                                    <th>
                                        No.
                                    </th>
                                  <th>
                                    Nama Sungai
                                  </th>
                                  <th>
                                    Orde Sungai
                                  </th>
                                  <th>
                                    Panjang Sungai
                                  </th>
                                   <th>
                                    Tahun Data
                                  </th>
                                  <th>
                                     Wilayah Administrasi
                                  </th>
                                  
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_sungai==true){
                                  $no=1;
                                  foreach($rekap_sungai as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->nama_sungai;?></td>
                                        <td>
                                          <?php echo $study->orde_sungai;?>
                                        </td>
                                        <td><?php echo $study->panjang_sungai;?></td>
                                       
                                        <td><?php echo $study->tahun_data;?></td>
                                        <td><?php echo $study->wilayah_administrasi;?></td>
                                        
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>