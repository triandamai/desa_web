<?php 
        $db = new database();

        if(isset($_POST['simpan'])){
 
            $simpan = $db->simpan_penduduk(
                $_POST['nik'],
                $_POST['nokk'],
                $_POST['nama'],
                $_POST['jenis_kel'],
                $_POST['tgl_lahir'],
                $_POST['umur'],
                $_POST['tmp_lahir'],
                $_POST['alamat'],
                $_POST['rt'],
                $_POST['rw'],
                $_POST['kelurahan'],
                $_POST['status_kawin'],
                $_POST['pendidikan'],
                $_POST['kewarganegaraan'],
                $_POST['agama'],
                $_POST['pekerjaan'],
                $_POST['gol_darah'],
                'kosong',
                0,
                'kosong',
                0,
                'kosong',
                0,
                $_POST['ayah'],
                $_POST['ibu'])or die(mysqli_error($db->koneksi));
                
                echo  $simpan;
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
                            required="" value="" placeholder="000">
                
                    </div>
                    <div class="form-group">
                        <label for="nik">NO KK</label>
                        <input class="form-control" name="nokk" type="number"  id="nik"
                            required="" value="" placeholder="000">
                
                    </div>
    
                    <div class="form-group">
                        <label for="bin">Nama</label>
                        <input class="form-control" name="nama" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Jenis Kelamin</label>
                                        <select name="jenis_kel" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Pilih...</option>
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="bin">Umur</label>
                        <input class="form-control" name="umur" type="number" id="bin"
                            required="" value="" placeholder="Masukkan Umur">
                    </div>
                    <div class="form-group mb-4">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Status Perkawinan</label>
                                        <select name="status_kawin" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Pilih...</option>
                                            <option value="KAWIN">KAWIN</option>
                                            <option value="BELUM-KAWIN">BELUM-KAWIN</option>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bin">Tempat Lahir</label>
                        <input class="form-control" name="tmp_lahir" type="text" id="bin"
                            required="" value="" placeholder="misal: Lumbir">
                    </div>
                    <div class="form-group">
                        <label for="status">RT</label>
                        <input class="form-control" name="rt" type="number" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">RW</label>
                        <input class="form-control" name="rw" type="number" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Pendidikan</label>
                        <select name="pendidikan" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Pilih...</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SLTP</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D3">D3</option>
                                            <option value="SARJANA">SARJANA</option>
                                            <option value="LAIN">LAINNYA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Pekerjaan</label>
                        <input class="form-control" name="pekerjaan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="status">Kewarganegaraan</label>
                        <select name="kewarganegaraan" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Pilih...</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Kelurahan</label>
                        <input class="form-control" name="kelurahan" type="text" required=""
                            id="status" value="" placeholder="Masukkan Kelurahan">
                    </div>
                    <div class="form-group">
                        <label for="status">Agama</label>
                        <input class="form-control" name="agama" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="status">Golongan Darah</label>
                        <input class="form-control" name="gol" type="text" required=""
                            id="status" value="" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                        <label for="bin">Nama Ayah</label>
                        <input class="form-control" name="ayah" type="text" id="bin"
                            required="" value="" placeholder="misal:john">
                    </div>
                    <div class="form-group">
                        <label for="status">Nama Ibu</label>
                        <input class="form-control" name="ibu" type="text" required=""
                            id="status" value="" placeholder="Masukkan Nama Ibu">
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

