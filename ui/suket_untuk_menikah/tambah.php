<?php 
        $db = new database();

        if(isset($_POST['simpan'])){
          
     
            $simpan = $db->simpan_suket_untuk_nikah($_POST['simpan'],$_POST['bin'],'tersedia',$_POST['pasangan']) or die(mysqli_error($db->koneksi));
            
            if($simpan){
                echo '<script>alert("Berhasil Menambahkan ");</script>';
                echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }else{
                echo '<script>alert("Gagal Menambahkan ");</script>';
                echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }
        }
?>
<div class="card-body">
    <h4 class="card-title">Pilih Warga Untuk Diajukan Surat Untuk Menikah</h4>             
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
                       
                        <div class="btn-list">
                            <button id="ajukan" type="button" 
                            data-nik="<?= $data['nik'];?>"
                             data-idpenduduk="<?= $data['id_data']; ?>" class="btn btn-primary" data-toggle="modal"
                                data-target="#ajukan_surat_untuknikah">Ajukan Surat
                            </button>
                        </div>
                    </td>
                </tr>
                <?php
                }
                }?>
            </tbody>
        </table>
    </div>
</div>
<!-- Signup modal content -->

<div id="ajukan_surat_untuknikah" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="#" class="text-success">
                    </a>
                </div>
                <form class="pl-3 pr-3" action="" method="POST">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" name="nik" type="number" disabled id="nik"
                            required="" value="" placeholder="000xxx">
                        <input class="form-control" name="idpenduduk" type="hidden" disabled id="id_data"
                            required="" value="" placeholder="000xxx">
                    </div>
                    <div class="form-group">
                        <label for="bin">Bin/Binti</label>
                        <input class="form-control" name="bin" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input class="form-control" name="status" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="pasangan">Pasangan Terdahulu</label>
                        <input class="form-control" name="pasangan" type="text" required=""
                            id="pasangan" value="" placeholder="Masukkan Nama Pasangan">
                    </div>
                    <input class="form-control" name="simpan" value="simpan" type="hidden"
                            required="" placeholder="000xxx">
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
