<?php 
        $db = new database();

        if(isset($_POST['nik'])){
            $nik = $_POST['nik'];
            $simpan = $db->simpan_skck($nik);
            if($simpan){
                echo '<script>alert("Berhasil Menambahkan ");</script>';
               echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }else{
                echo '<script>alert("Gagal Menambahkan ");</script>';
            }
        }
    
?>
<div class="card-body">
                                <h4 class="card-title">Data Penduduk </h4>
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
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no =1; 
                                        foreach($db->tampil_penduduk(null) as $data) {
                                            if($data != null){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
	                                            <td><?php echo $data['nama'] ?></td>
	                                            <td><?php echo $data['nik'] ?></td>
	                                            <td><?php echo $data['pekerjaan'] ?></td>
	                                            <td><?php echo $data['alamat'] ?></td>
                                                <td>
                                                <a href="#">
                                                    EDIT
                                                    </a>
                                                    <a href="#">
                                                    HAPUS
                                                    </a>
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