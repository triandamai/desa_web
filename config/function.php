<?php 
    class database{
       var $host ='localhost';
       var $username = 'root';
       var $password ='';
       var $db = 'data_layanan';
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
        function tampil_penduduk(){
            $data = mysqli_query($this->koneksi,"SELECT * from tbl_data");
            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_pengantar_skck(){
            $data = mysqli_query($this->koneksi,"SELECT * from tbl_skck 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_skck.id_kk");
             $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_suket_belum_menikah(){
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_belum_nikah 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_belum_nikah.id_kk");
             $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_suket_untuk_menikah(){
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_nikah 
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_nikah.id_data");

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
        function tampil_pengantar_hajatan(){
            $data = mysqli_query($this->koneksi,"SELECT * FROM tbl_hajatan
            INNER JOIN tbl_data ON tbl_data.id_data = tbl_hajatan.id_data");

            $hasil[] = null;
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        function simpan_skck($nik){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_skck (id_kk) values ($nik)");

	        return $simpan;
        }
        function simpan_suket_belum_nikah($nik){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_belum_nikah (id_kk) values ($nik)");

	        return $simpan;
        }
        function simpan_suket_untuk_nikah($id_data,$bin_binti,$status,$terdahulu){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_nikah (
                                    id_data,bin_binti,status,pasangan_terdahulu
                                    ) values (
                                        $id_data,
                                        '$bin_binti',
                                        '$status',
                                        '$terdahulu'
                                        )"
                                );

            return $simpan;
        }
        function simpan_pengantar_hajatan($id_data,$keperluan,$keterangan,$tanggal){
            $simpan = mysqli_query($this->koneksi,"INSERT INTO tbl_hajatan (
                                    id_data,keperluan,keterangan,masa_berlaku
                                    ) values (
                                        $id_data,
                                        '$keperluan',
                                        '$keterangan',
                                        '$tanggal'
                                        )"
                                );

            return $simpan;
        }
    }
?>