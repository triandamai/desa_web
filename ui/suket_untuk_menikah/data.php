<?php 
        $db = new database();
       // echo json_encode($db->tampil_suket_untuk_menikah() );
?>
<div class="card-body">
                                <h4 class="card-title">Multi-column ordering</h4>
                                <a href="<?= $base_url_module;?>&&action=tambah" type="button"
                                        class="btn waves-effect waves-light btn-outline-primary">TAMBAH</a>
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                        class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Agama</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>Bin/Binti</th>
                                                <th>Status</th>
                                                <th>Pasangan Terdahulu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no =1; 
                                        foreach($db->tampil_suket_untuk_menikah(null) as $data) {
                                            if($data != null){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td><?php echo $data['nik'] ?></td>
	                                            <td><?php echo $data['jenis_kel'] ?></td>
	                                            <td><?php echo $data['tmp_lahir'] ?></td>
	                                            <td><?php echo $data['tgl_lahir'] ?></td>
	                                            <td><?php echo $data['kewarganegaraan'] ?></td>
	                                            <td><?php echo $data['agama'] ?></td>
	                                            <td><?php echo $data['pekerjaan'] ?></td>
	                                            <td><?php echo $data['alamat'] ?></td>
	                                            <td><?php echo $data['bin_binti'] ?></td>
	                                            <td><?php echo $data['status'] ?></td>
                                                <td><?php echo $data['pasangan_terdahulu'] ?></td>
                                                <td>    
                                                <a href="<?= $base_url.'/ui/cetak_untukmenikahsurat.php?module=cetak_pengantar_skck&&ref=yes&&id='.$data['id_nikah']; ?>">
                                                    Cetak
                                                    </a>
                                                </td>
	
                                            </tr>
                                            <?php
                                            }
                                         }?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>