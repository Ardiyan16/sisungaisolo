 <?php
 
  header("Content-Type: application/force-download");
  header("Cache-Control: no-cache, must-revalidate"); 
  header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
  header("content-disposition: attachment;filename=rekap_usulan_dipa_ongoing".date('dmY').".xls");
 
 ?>
 
 <table class="table table-hover" border="1">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                  <th>
                                    Tanggal Usulan
                                  </th>
                                  <th>
                                    Pengirim Usulan
                                  </th>
                                  <th>
                                    Detail Usulan
                                  </th>
                                  <th>
                                    Koordinat Latitude
                                  </th>
                                  <th>
                                    Koordinat Longitude
                                  </th>
                                  <th>
                                   Tindak Lanjut
                                  </th>
                                   <th>
                                   Keterangan
                                  </th>
                                  <th>
                                   Nama Pengirim
                                  </th>
                                  <th>
                                   Email Pengirim
                                  </th>
                                  <th>
                                   No Hp Pengirim
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_dipa==true){
                                     $no=1;
                                  foreach($rekap_dipa as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->tanggal_usulan;?></td>
                                        <td>
                                          <?php echo $study->pengirim_usulan;?>
                                        </td>
                                        <td><?php echo $study->detail_usulan;?></td>
                                         <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->tindak_lanjut;?></td>
                                        <td><?php echo $study->keterangan;?></td>
                                        <td><?php echo $study->nama_pengirim;?></td>
                                        <td>
                                          <?php echo $study->email_pengirim;?>
                                        </td>
                                        <td><?php echo $study->no_hp;?></td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>