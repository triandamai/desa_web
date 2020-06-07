<?php 
        $db = new database();

        if(isset($_POST['simpan'])){
          
            $simpan = $db->simpan_pengantar_hajatan(
                $_POST['simpan'],
                $_POST['keperluan'],
                $_POST['keterangan'],
                $_POST['masaberlaku'])or die(mysqli_error($db->koneksi));
            
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
    <h4 class="card-title">Tambah Data Penduduk</h4>             
    <form class="pl-3 pr-3" action="" method="POST">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" name="nik" type="number"  id="nik"
                            required="" value="" placeholder="000xxx">
                
                    </div>
                
    
                    <div class="form-group">
                        <label for="bin">Nama</label>
                        <input class="form-control" name="keperluan" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group">
                        <label for="bin">Umur</label>
                        <input class="form-control" name="keperluan" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group">
                        <label for="status">RT</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">RW</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Alamat</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Pendidikan</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Kewarganegaraan</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Agama</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Golongan Darah</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="bin">Nama Ayah</label>
                        <input class="form-control" name="keperluan" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group">
                        <label for="status">Nama Ibu</label>
                        <input class="form-control" name="keterangan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="pasangan">Masa Berlaku</label>
                        <input class="form-control" name="masaberlaku" type="text" required=""
                            id="pasangan" value="" placeholder="Masukkan Nama Pasangan">
                    </div>
                    <input class="form-control" name="simpan" value="simpan" type="hidden"
                            required="" placeholder="000xxx">
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>

                </form>
</div>

