 <?php
 
  header("Content-Type: application/force-download");
  header("Cache-Control: no-cache, must-revalidate"); 
  header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
  header("content-disposition: attachment;filename=rekap_infrastruktur_terbangun".date('dmY').".xls");
 
 ?>
 
 <table class="table table-hover" border="1">
                                <thead>
                                    <th>
                                        No.
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
                                  <th>
                                      Penilaian Kinerja
                                  </th>
                                  <th>
                                      AKNOP
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_terbangun==true){
                                  $no=1;
                                  foreach($rekap_terbangun as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->nama_paket;?></td>
                                        <td>
                                          <?php echo $study->penyedia_jasa_konstruksi;?>
                                        </td>
                                        <td><?php echo $study->masa_konstruksi;?></td>
                                         <td><?php echo $study->item_pekerjaan;?></td>
                                        <td>
                                          <?php echo $study->volume;?>
                                        </td>
                                        <td><?php echo $study->satuan;?></td>
                                        <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                        <td><?php echo $study->penilaian_kinerja;?></td>
                                        <td>
                                          <?php echo $study->aknop;?>
                                        </td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>