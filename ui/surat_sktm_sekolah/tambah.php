<?php 
        $db = new database();

        if(isset($_POST['simpan'])){
          
            $simpan = $db->simpan_sktm_sekolah(
                $_POST['nis'],
                $_POST['simpan'],
                $_POST['namasekolah'],
                $_POST['alamat_sekolah'],
                $_POST['alamat_ortu'],
                $_POST['pekerjaan_ortu'],
                $_POST['penghasilan_ortu'],
                $_POST['jml_tanggungan'])or die(mysqli_error($db->koneksi));
            echo $simpan;
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
    <h4 class="card-title">Pilih Warga Untuk Diajukan Surat Tidak Mampu Sekolah</h4>             
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
                        <label for="status">NIS</label>
                        <input class="form-control" name="nis" type="number" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Nama Sekolah</label>
                        <input class="form-control" name="namasekolah" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="bin">Alamat Sekolah</label>
                        <textarea name="alamat_sekolah" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bin">Alamat Orang Tua</label>
                        <textarea name="alamat_ortu" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Pekerjaan Orang Tua</label>
                        <input class="form-control" name="pekerjaan_ortu" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="pasangan">Penghasilan Orang Tua</label>
                        <input class="form-control" name="penghasilan_ortu" type="text" required=""
                            id="pasangan" value="" placeholder="Masukkan Nama Pasangan">
                    </div>
                    <div class="form-group">
                        <label for="pasangan">Jumlah Tanggungan</label>
                        <input class="form-control" name="jml_tanggungan" type="text" required=""
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
