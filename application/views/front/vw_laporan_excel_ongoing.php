 <?php
 
  header("Content-Type: application/force-download");
  header("Cache-Control: no-cache, must-revalidate"); 
  header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
  header("content-disposition: attachment;filename=infrastruk_ongoing".date('dmY').".xls");
 
 ?>
 <table class="table table-hover" border="1">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        No Reg
                                    </th>
                                  <th>
                                    Nama Paket / Bangunan
                                  </th>
                                  <th>
                                    Penyedia Jasa Konstruksi
                                  </th>
                                  <th>
                                    Tahun Selesai
                                  </th>
                                  <th>
                                    Item Pekerjaan
                                  </th>
                                   <th>
                                    Jenis Pekerjaan
                                  </th>
                                  <th>
                                      Volume
                                  </th>
                                   <th>
                                   Satuan
                                  </th>
                                  <th>
                                    Latitude
                                  </th>
                                  <th>
                                    Longitude
                                  </th>
                                  <th>
                                      Keterangan
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_ongoing==true){
                                     $no=1;
                                     $a=0; 
                                  foreach($rekap_ongoing as $study){ $a++;?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->no_reg;?></td>
                                        <td><?php echo $study->nama_paket;?></td>
                                        <td>
                                          <?php echo $study->penyedia_jasa_konstruksi;?>
                                        </td>
                                        <td><?php echo $study->masa_konstruksi;?></td>
                                         <td>

                                           <table width="200" border="1">
                                          <?php foreach($detail_ongoing as $ongoing){
                                            if($a==$ongoing->id_infrastruktur_ongoing){
                                            ?>
                                             <tr>
                                               <td><?php echo $ongoing->item_pekerjaan_detail ?></td>
                                             </tr>
                                          <?php }}?>    
                                           </table>
                                          </td>
                                        <td>
                                          <?php echo $study->jenis_pekerjaan;?>
                                        </td>
                                        <td>
                                          <?php echo $study->volume;?>
                                        </td>
                                        <td><?php echo $study->satuan;?></td>
                                        <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>