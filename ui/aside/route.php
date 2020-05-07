<?php 
//type menu = 1 = no link, 2 = with link , 3 = dropdown , 4 = divider
$menus = array(
    0 =>array(
        "id"=> 0,
        "name"=> "BERANDA",
        "link" => $base_url."/ui/index.php?page=index",
        "type" => "1",
        "child" => array(),
    ),
    1 =>array(
        "id"=> 1,
        "name"=> "LAYANAN",
        "link" => $base_url."/ui/index.php?page=index&&module=layanan",
        "type" => "5",
        "child" => array(),
    ),
    2 =>array(
        "id"=> 2,
        "name"=> "DATA PENDUDUK",
        "link" => $base_url."/ui/index.php?page=index&&module=datapenduduk",
        "type" => "2",
        "child" => array(),
    ),
    3 =>array(
        "id"=> 3,
        "name"=> "MANAJEMEN",
        "link" => "",
        "type" => "3",
        "child" => array(
            0 => array(
                "id"=> 1,
                "name" => "PENGANTAR SKCK",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_skck",
                "child" =>"",
            ),1  => array(
                "id"=> 1,
                "name" => "KETERANGAN BELUM PERNAH MENIKAH",
                "link" => $base_url."/ui/index.php?page=index&&module=suket_belum_pernah_menikah",
                "child" =>"",
            ),2  => array(
                "id"=> 1,
                "name" => "KETERANGAN UNTUK MENIKAH",
                "link" => $base_url."/ui/index.php?page=index&&module=suket_untuk_menikah",
                "child" =>"",
            ), 3  => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN HAJATAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_hajatan",
                "child" =>"",
            ),4  => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN KERAMAIAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_keramaian",
                "child" =>"",
            ), 5  => array(
                "id"=> 1,
                "name" => "KETERANGAN TIDAK MAMPU",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_tidak_mampu",
                "child" =>"",
            ), 6  => array(
                "id"=> 1,
                "name" => "SURAT SKTM SEKOLAH",
                "link" => $base_url."/ui/index.php?page=index&&module=surat_sktm_sekolah",
                "child" =>"",
            ), 7  => array(
                "id"=> 1,
                "name" => "SURAT KETERANGAN DOMISILI",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_domisili",
                "child" =>"",
            ), 8  => array(
                "id"=> 1,
                "name" => "SURAT KETERANGAN USAHA",
                "link" =>$base_url."/ui/index.php?page=index&&module=keterangan_usaha",
                "child" =>"",
            ), 9  => array(
                "id"=> 1,
                "name" => "SURAT KETERANGAN KEHILANGAN",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_kehilangan",
                "child" =>"",
            ), 10  => array(
                "id"=> 1,
                "name" => "SURAT PERMOHONAN KK",
                "link" => $base_url."/ui/index.php?page=index&&module=permohonan_kk",
                "child" =>"",
            ), 11  => array(
                "id"=> 1,
                "name" => "SURAT PENGANTAR AKTA KELAHIRAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_akta_kelahiran",
                "child" =>"",
            ), 12  => array(
                "id"=> 1,
                "name" => "SURAT KEMATIAN",
                "link" => $base_url."/ui/index.php?page=index&&module=surat_kematian",
                "child" =>"",
            ), 13  => array(
                "id"=> 1,
                "name" => "SURAT KETERANGAN PINDAH PENDUDUK",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_pindah_penduduk",
                "child" =>"",
            )
        ),
    ),
     4 =>array(
        "id"=> 4,
        "name"=> "LAPORAN",
        "link" => "",
        "type" => "3",
        "child" => array(
            0 => array(
                "id"=> 1,
                "name" => "CETAK SKCK",
                "link" => $base_url."/ui/index.php?page=index&&module=cetak_skck",
                "child" =>"",
            )
        ),
    ),
 );

?>