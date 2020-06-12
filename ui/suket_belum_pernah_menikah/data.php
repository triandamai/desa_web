<?php 
        $db = new database();

        if(isset($_POST['hapus'])){
            $id = $_POST['id'];
            $simpan = $db->hapus_suket_belum_nikah($id);
            if($simpan){
                echo '<script>alert("Berhasil Menghapus ");</script>';
               echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }else{
                echo '<script>alert("Gagal Menghapus ");</script>';
            }
        }
    
?>
<div class="card-body">
                                <h4 class="card-title">Data Surat Keterangan Belum Menikah</h4>
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
                                                <th>Agama</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no =1; 
                                        foreach($db->tampil_suket_belum_menikah(null) as $data) {
                                            if($data != null){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
	                                            <td><?php echo $data['nama'] ?></td>
	                                            <td><?php echo $data['nik'] ?></td>
	                                            <td><?php echo $data['jenis_kel'] ?></td>
	                                            <td><?php echo $data['tmp_lahir'] ?></td>
	                                            <td><?php echo $data['tgl_lahir'] ?></td>                                       
	                                            <td><?php echo $data['agama'] ?></td>
	                                            <td><?php echo $data['pekerjaan'] ?></td>
	                                            <td><?php echo $data['alamat'] ?></td>
	                                            <td>
                                                <a href="<?= $base_url.'/ui/cetak_belumpernahmenikahsurat.php?module=cetak&&ref=yes&&id='.$data['id_belum_nikah']; ?>"lass="btn waves-effect waves-light btn-outline-primary">
                                                    Cetak
                                                    </a>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="id" value="<?=  $data['id_belum_nikah'];?>">
                                                        <input type="submit" name="hapus"  class="btn waves-effect waves-light btn-outline-primary" value="HAPUS" >
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                         }?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>