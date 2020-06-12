<?php 
        $db = new database();

        if(isset($_POST['simpan'])){
 
            $simpan = $db->ubah_penduduk(
                $_GET['id'],
                $_POST['nik'],
                $_POST['nokk'],
                $_POST['nama'],
                $_POST['jenis_kel'],
                $_POST['tgl_lahir'],
                $_POST['umur'],
                $_POST['tmp_lahir'],
                'kosong',
                $_POST['rt'],
                $_POST['rw'],
                'kosong',
                $_POST['status_kawin'],
                $_POST['pendidikan'],
                $_POST['kewarganegaraan'],
                $_POST['agama'],
                $_POST['pekerjaan'],
                $_POST['gol'],
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
                echo '<script>alert("Berhasil Merubah ");</script>';
                echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }else{
                echo '<script>alert("Gagal Menambahkan ");</script>';
                echo '<script> location.replace("'.$base_url_module.'"); </script>';
            }
        }
?>
<div class="card-body">
    <h4 class="card-title">Tambah Data Penduduk</h4>
    <?php $no =1; 
        foreach($db->tampil_penduduk($_GET['id']) as $data) {
        if($data != null){
    ?>      
    <form class="pl-3 pr-3" action="" method="POST">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input class="form-control" name="nik" type="number"  id="nik" required="" value="<?= $data['nik'];?>" placeholder="000">
        </div>
        <div class="form-group">
            <label for="nik">NO KK</label>
            <input class="form-control" name="nokk" type="number"  id="nik" required="" value="<?= $data['nkk'];?>" placeholder="000">
        </div>
        <div class="form-group">
            <label for="bin">Nama</label>
            <input class="form-control" name="nama" type="text" id="bin" required="" value="<?= $data['nama'];?>" placeholder="misal:john">
        </div>
        <div class="form-group mb-4">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Jenis Kelamin</label>
            <select name="jenis_kel" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected><?= $data['jenis_kel'];?></option>
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
            </select>
        </div>
        <div class="form-group">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'];?>">
        </div>
        <div class="form-group">
            <label for="bin">Umur</label>
            <input class="form-control" name="umur" type="number" id="bin" required="" value="<?= $data['umur'];?>" placeholder="Masukkan Umur">
        </div>
        <div class="form-group mb-4">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Status Perkawinan</label>
            <select name="status_kawin" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected><?= $data['status_kawin'];?></option>
                <option value="KAWIN">KAWIN</option>
                <option value="BELUM-KAWIN">BELUM-KAWIN</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bin">Tempat Lahir</label>
            <input class="form-control" name="tmp_lahir" type="text" id="bin" required="" value="<?= $data['tmp_lahir'];?>" placeholder="misal: Lumbir">
        </div>
        <div class="form-group">
            <label for="status">RT</label>
            <input class="form-control" name="rt" type="number" required="" id="status" value="<?= $data['no_rt'];?>" placeholder="Masukkan Status">
        </div>
        <div class="form-group">
            <label for="status">RW</label>
            <input class="form-control" name="rw" type="number" required="" id="status" value="<?= $data['no_rw'];?>" placeholder="Masukkan Status">
        </div>
        <div class="form-group">
            <label for="status">Pendidikan</label>
            <select name="pendidikan" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected><?= $data['pendidikan'];?></option>
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
            <select name="pekerjaan" class="custom-select mr-sm-2" id="">
                <option selected><?= $data['pekerjaan'];?></option>
                <option value="PELAJAR">Pelajar/Mahasiswa</option>
                <option value="PNS">PNS</option>
                <option value="WIRASWASTA">Wiraswasta</option>
                <option value="KARYAWAN">Karyawan</option>
                <option value="LAIN">LAINNYA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Kewarganegaraan</label>
            <select name="kewarganegaraan" class="custom-select mr-sm-2" id="">
                <option selected><?= $data['kewarganegaraan'];?></option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Agama</label>
            <select name="agama" class="custom-select mr-sm-2" id="">
                <option selected><?= $data['agama'];?></option>
                <option value="ISLAM">ISLAM</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="PROTESTAN">PROTESTAN</option>
                <option value="HINDU">HINDU</option>
                <option value="BELUM TAHU">BUDHA</option> 
                <option value="KONGHUCU">KONGHUCU</option>
                <option value="LINNYA">Lainnya..</option>
            </select>  
        </div>
        <div class="form-group">
            <label for="status">Golongan Darah</label>
            <select name="gol" class="custom-select mr-sm-2" id="">
                <option selected><?= $data['gol_darah'];?></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <option value="BELUM TAHU">Belum tahu</option> 
            </select>
        </div>
        <div class="form-group">
            <label for="bin">Nama Ayah</label>
            <input class="form-control" name="ayah" type="text" id="bin" required="" value="<?= $data['nama_ayah'];?>" placeholder="misal:john">
        </div>
        <div class="form-group">
            <label for="status">Nama Ibu</label>
            <input class="form-control" name="ibu" type="text" required="" id="status" value="<?= $data['nama_ibu'];?>" placeholder="Masukkan Nama Ibu">
        </div>
        <input class="form-control" name="simpan" value="simpan" type="hidden" required="" placeholder="000xxx">
        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
        <?php }}?>
</div>

