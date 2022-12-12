</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::About card-->
							<div class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-17">
                                <a href="./general/cetak.php" target="_blank" class="btn btn-primary">Cetak Laporan</a><br><br><br>
								<table class="table table-hover my-0">
									<thead>
										<tr>
                                        <th class="d-none d-xl-table-cell">No</th>
                                        <th class="d-none d-xl-table-cell">NISN</th>
											<th class="d-none d-xl-table-cell">Nama Siswa</th>
                                            <th class="d-none d-xl-table-cell">Kelas</th>
											<th class="d-none d-xl-table-cell">Jurusan</th>
											<th class="d-none d-xl-table-cell">Angkatan</th>
											<th class="d-none d-xl-table-cell">Tanggal</th>
                                            <th class="d-none d-xl-table-cell">Bulan</th>
											<th class="d-none d-xl-table-cell">Tahun</th>
                                            <th class="d-none d-xl-table-cell">Keterangan</th>
										</tr>
									</thead>
									<tbody>
                                    <?php
								
                                include "koneksi.php";
                                $qry_histori=mysqli_query($conn,"select * from siswa
                                inner join pembayaran on pembayaran.nisn=siswa.nisn
                                inner join kelas on kelas.id_kelas=siswa.id_kelas");
                                $no=0;
                                while($data_histori=mysqli_fetch_array($qry_histori)){
									if($data_histori['tgl_bayar']!=='0000-00-00'){
                                $no++;?>
								
                                        <tr class="text-xs font-weight-bold">
                                            <td class="align-middle text-left"><?=$no?></td>
                                            <td class="align-middle text-left"><?=$data_histori['nisn']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['nama']?></td>
											<td class="align-middle text-left"><?=$data_histori['nama_kelas']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['jurusan']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['angkatan']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['tgl_bayar']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['bulan_spp']?></td>
											<td class="align-middle text-left"><?=$data_histori['tahun_spp']?></td>
                                           
                                            <td>
												<?php
													if($data_histori['tgl_bayar']=='0000-00-00'){
														echo '<div class="alert alert-danger" role="alert">Belum Lunas</div>';
													}else{
														echo '<div class="alert alert-success" role="alert">Lunas</div>';
													}
												?>
											</td>
                                        </tr>
                                        <?php
											}
                                        }
                                        ?>
                                    </tbody>
								</table>
							</div>
							</div>
                            
						</div>
                        
					</div>
					</div>
				</div>
				</div>
				
					</div>
				</div>
									
					</div>