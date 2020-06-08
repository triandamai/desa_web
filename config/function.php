<?php 
  $base_url = 'http://localhost/pd/';
  $base_url_images = $base_url.'/ui/images/';
    class database{
       var $host ='localhost';
       var $username = 'root';
       var $password ='';
       var $db = 'db_layanan';
       var $koneksi = '';

        function __construct(){
           $this->koneksi = mysqli_connect(
                $this->host,
                $this->username,
                $this->password,
                $this->db
            );
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
        }
        function overview(){
            $o =0;
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_data");
            if($data){
                $o = mysqli_num_rows($data);
            }else{
                $o =0;
            }
            return $o;
        }
        function tampil_akta($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_akta
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_akta.id_data WHERE id_akta=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_akta 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_akta.id_data");
            }
           
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_suket_belum_menikah($id){
            $data = null;
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_belum_nikah
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_belum_nikah.id_kk WHERE tbl_belum_nikah.id_belum_nikah=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_belum_nikah 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_belum_nikah.id_kk");
            }
             $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
         return $hasil;
        }
        //data
        function tampil_penduduk($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_data WHERE id_data=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_data");
            }
            
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_domisili($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_domisili  
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_domisili.id_data WHERE tbl_domisili.id_domisili=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_domisili  
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_domisili.id_data");
            }
            
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_pengantar_hajatan($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_hajatan
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_hajatan.id_data WHERE tbl_hajatan.id_hajatan=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_hajatan
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_hajatan.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_ijin_hiburan($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_hiburan
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_hiburan.id_data WHERE tbl_hiburan.id_hiburan=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_hiburan
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_hiburan.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_kehilangan($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kehilangan
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_kehilangan.id_data WHERE tbl_kehilangan.id_kehilangan=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kehilangan
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_kehilangan.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_kematian($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kematian 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_kematian.id_data WHERE id_kematian=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kematian
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_kematian.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_kk($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kk 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_kk.id_data WHERE id_kk=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_kk 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_kk.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_suket_untuk_menikah($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_nikah 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_nikah.id_data WHERE id_nikah=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_nikah 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_nikah.id_data");
            }
            

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_pengunjung($id){
            if($id != null){

            }else{
                
            }
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_nikah 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_nikah.id_data");

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        function tampil_pengantar_skck($id){
            $data = null;
            if($id != null){
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_skck 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_skck.id_kk WHERE tbl_skck.id_skck=$id");
            }else{
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_skck 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_skck.id_kk");
            }
             $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }



        function tampil_suket_pindah_penduduk($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_pindah 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_pindah.id_data WHERE id_pindah=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_pindah 
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_pindah.id_data");
            }
           

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_sktm($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_sktm
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_sktm.id_data WHERE id_sktm=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_sktm
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_sktm.id_data");

            }
            
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_sktm_sekolah($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_sktm_sekolah
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_sktm_sekolah.id_data WHERE id_sktm_sekolah=$id");
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_sktm_sekolah
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_sktm_sekolah.id_data");
            }
            
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_usaha($id){
            if($id != null){
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_usaha
                INNER JOIN tbl_data ON tbl_data.id_data = tbl_usaha.id_data WHERE id_usaha=$id");
    
            }else{
                $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_usaha
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_usaha.id_data");

            }
            
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function login($username,$password){
            $hasil = mysqli_query($this->koneksi,"SELECT * FROM tbl_admin 
            WHERE username='$username' AND password='$password'");


           return $hasil;
        }
        function simpan_admin($nama,$username,$password){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_admin (nama_lengkap,username,password) 
            values ('$nama','$username','$password')");

	        return $simpan;
        }
        function simpan_akta(
            $nik,$keperluan,$keterangan){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_akta (id_data,keperluan,keterangan) 
            values (
            $nik,
            '$keperluan',
            '$keterangan')");

	        return $simpan;
        }
        

        function simpan_suket_belum_nikah($nik){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_belum_nikah (id_kk) values ($nik)");

	        return $simpan;
        }
        function simpan_penduduk(
            $nik,
            $nokk,
            $nama,
            $jenis_kelamin,
            $tgl_lahir,
            $umur,
            $tmp_lahir,
            $alamat,
            $rt,
            $rw,
            $kelurahan,
            $status_kawin,
            $pendidikan,
            $kewarganegaraan,
            $agama,
            $pekerjaan,
            $gol_darah,
            $akta_lahir,
            $no_akta,
            $akta_kawin,
            $nok_akta_kawin,
            $akta_cerai,
            $no_aktacerai,
            $nama_ayah,
            $nama_ibu){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_data (
                nik,
            nkk,
            nama,
            jenis_kel,
            tgl_lahir,
            umur,
            tmp_lahir,
            alamat,
            no_rt,
            no_rw,
            kelurahan,
            status_kawin,
            pendidikan,
            kewarganegaraan,
            agama,
            pekerjaan,
            gol_darah,
            akta_lahir,
            no_akta_lahir,
            akta_kawin,
            no_akta_kawin,
            akta_cerai,
            no_akta_cerai,
            nama_ayah,
            nama_ibu) values (
                $nik,
                $nokk,
                '$nama',
                '$jenis_kelamin',
                '$tgl_lahir',
                $umur,
                '$tmp_lahir',
                '$alamat',
                $rt,
                $rw,
                '$kelurahan',
                '$status_kawin',
                '$pendidikan',
                '$kewarganegaraan',
                '$agama',
                '$pekerjaan',
                '$gol_darah',
                '$akta_lahir',
                $no_akta,
                '$akta_kawin',
                $nok_akta_kawin,
                '$akta_cerai',
                $no_aktacerai,
                '$nama_ayah',
                '$nama_ibu')");

	        return $simpan;
        }
        function simpan_domisili($nik,$alamat){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_domisili (id_data,alamat_domisili) values ($nik,'$alamat')");

	        return $simpan;
        }
        function simpan_pengantar_hajatan($id_data,$keperluan,$keterangan,$tanggal){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_hajatan (id_data,keperluan,keterangan,masa_berlaku) values (
                                        $id_data,
                                        '$keperluan',
                                        '$keterangan',
                                        '$tanggal')");

            return $simpan;
        }
        function simpan_hiburan($id_data,$acara,$hiburan,$tanggal,$tempat){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_hiburan (id_data,
            acara,hiburan,tgl_hiburan,tmp_acara) values (
                                        $id_data,
                                        '$acara',
                                        '$hiburan',
                                        '$tanggal','$tempat')");

            return $simpan;
        }
        function simpan_kehilangan($id_data, $keperluan,$keterangan){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_kehilangan (id_data,
            keperluan,keterangan) values (
                                        $id_data,
                                        '$keperluan',
                                        '$keterangan')");

            return $simpan;
        }
        function simpan_kematian($id_data,$tgl_mati,$tmp_mati,$sebab){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_kematian (id_data,
            tgl_mati,tmp_mati,sebab_mati) values (
                                        $id_data,
                                        '$tgl_mati',
                                        '$tmp_mati',
                                        '$sebab')");

            return $simpan;
        }
        function simpan_kk($nokk,$id_data,$status,$keperluan,$keterangan){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_kk (nokk,id_data,status,keperluan,keterangan) 
            values ('$nokk',
                                        $id_data,
                                        '$status',
                                        '$keperluan',
                                        '$keterangan')");

            return $simpan;
        }
        function simpan_suket_untuk_nikah($id_data,$bin_binti,$status,$terdahulu){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_nikah (id_data,bin_binti,status,pasangan_terdahulu) values ($id_data,
                                        '$bin_binti',
                                        '$status',
                                        '$terdahulu')");

            return $simpan;
        }
        function simpan_pengunjung($id_data,$bin_binti,$status,$terdahulu){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_nikah (id_data,bin_binti,status,pasangan_terdahulu) values ($id_data,
                                        '$bin_binti',
                                        '$status',
                                        '$terdahulu')");

            return $simpan;
        }
        function simpan_suket_pindah_penduduk($id_data,$kepkel,$asal,$tuju,$jml){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_pindah (id_data,
            nama_kepkel,
            alamat_asal,
            alamat_tuju,
            jumlah_anggota) values (
                                        $id_data,
                                        '$kepkel',
                                        '$asal',
                                        '$tuju','$jml')");

            return $simpan;
        }
        function simpan_skck($nik){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_skck (id_kk) values ($nik)");

	        return $simpan;
        }
        function simpan_sktm($nik,$keperluan,$keterangan){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_sktm (id_data,keperluan,keterangan) 
            values ($nik,'$keperluan','$keterangan')");

	        return $simpan;
        }
        function simpan_sktm_sekolah($nis,$id_data,$nama_sekolah,$alamat_sekolah,$alamat_ortu,$pekerjaan_ortu,$penghasilan_ortu,$jml_tanggungan){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_sktm_sekolah (nis,id_data,nama_sekolah,alamat_sekolah,alamat_ortu,pekerjaan_ortu,penghasilan_ortu,jumlah_tanggung) 
            values ($nis,
            $id_data,
            '$nama_sekolah',
            '$alamat_sekolah',
            '$alamat_ortu',
            '$pekerjaan_ortu',
            '$penghasilan_ortu',
            $jml_tanggungan)");

	        return $simpan;
        }
        function simpan_usaha($nik,$alamat_usaha,$jenis_usaha){
            $simpan = mysqli_query($this->koneksi,
            "INSERT INTO tbl_usaha (id_data,alamat_usaha,jenis_usaha) 
            values ($nik,'$alamat_usaha','$jenis_usaha')");

	        return $simpan;
        }

    }
?>