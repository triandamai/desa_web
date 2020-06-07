<?php 
    $db = new database();
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
                                                <th>Status Kawin</th>
                                                <th>Agama</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no =1; 
                                       
                                        foreach($db->tampil_suket_pindah_penduduk(null) as $data) {
                                            if($data != null){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
	                                            <td><?php echo $data['nama'] ?></td>
	                                            <td><?php echo $data['nik'] ?></td>
	                                            <td><?php echo $data['jenis_kel'] ?></td>
	                                            <td><?php echo $data['tmp_lahir'] ?></td>
	                                            <td><?php echo $data['tgl_lahir'] ?></td>
	                                            <td><?php echo $data['status_kawin'] ?></td>
	                                            <td><?php echo $data['agama'] ?></td>
	                                            <td><?php echo $data['pekerjaan'] ?></td>
	                                            <td><?php echo $data['alamat'] ?></td>
                                                <td>
                                                    <a href="?module=edit_skck&id=<?php echo $data['id_skck']; ?>">
                                                    <span class="glyphicon glyphicon-pencil"></span></a>  
                                                    <a href="hapus_skck.php?id=<?php echo $data['id_skck']; ?>">
                                                    <span class="glyphicon glyphicon-trash"></span></a>  
                                                    <a href="print_skck.php?id=<?php echo $data['id_skck']; ?>" target="_blank">
                                                    <span class="glyphicon glyphicon-print"></span>
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