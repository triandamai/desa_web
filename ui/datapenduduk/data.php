<?php 
        $db = new database();

        if(isset($_POST['hapus'])){
            $id = $_POST['id'];
            $simpan = $db->hapus_penduduk($id);
            if($simpan){
                echo '<script>alert("Berhasil Menghapus ");</script>';
               echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }else{
                echo '<script>alert("Gagal Menghapus ");</script>';
            }
        }
    
?>
<div class="card-body">
                                <h4 class="card-title">Data Penduduk </h4>
                                <a href="<?= $base_url_module;?>&&action=tambah" type="button"
                                        class="btn waves-effect waves-light btn-outline-primary">TAMBAH</a>
                                <a href="<?= $base_url_module;?>&&action=import" type="button"
                                        class="btn waves-effect waves-light btn-outline-primary">IMPORT</a>
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
                                                <a href="<?= $base_url_module .'&&action=ubah&&id='.$data["id_data"]; ?>"  class="btn waves-effect waves-light btn-outline-primary">
                                                    EDIT
                                                    </a>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="id" value="<?=  $data['id_data'];?>">
                                                        <input type="submit" name="hapus"  class="btn waves-effect waves-light btn-outline-primary" value="HAPUS" >
                                                    </form>
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