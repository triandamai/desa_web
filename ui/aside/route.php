<?php 
//type menu = 1 = no link, 2 = with link , 3 = dropdown , 4 = divider
$menus = array(
    0 =>array(
        "id"=> 0,
        "name"=> "BERANDA",
        "link" => $base_url."ui/index.php?page=index",
        "type" => "1",
        "child" => array(),
    ),
    1 =>array(
        "id"=> 1,
        "name"=> "LAYANAN",
        "link" => $base_url."ui/index.php?page=index&&module=layanan",
        "type" => "5",
        "child" => array(),
    ),
    2 =>array(
        "id"=> 2,
        "name"=> "DATA PENDUDUK",
        "link" => $base_url."ui/index.php?page=index&&module=datapenduduk",
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
                "name" => "BELUM PERNAH MENIKAH",
                "link" => $base_url."/ui/index.php?page=index&&module=suket_belum_pernah_menikah",
                "child" =>"",
            ),2  => array(
                "id"=> 1,
                "name" => "UNTUK MENIKAH",
                "link" => $base_url."/ui/index.php?page=index&&module=suket_untuk_menikah",
                "child" =>"",
            ), 3  => array(
                "id"=> 1,
                "name" => "IJIN HAJATAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_hajatan",
                "child" =>"",
            ),4  => array(
                "id"=> 1,
                "name" => "IJIN KERAMAIAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_keramaian",
                "child" =>"",
             ), 
            //5  => array(
            //     "id"=> 1,
            //     "name" => "KETERANGAN TIDAK MAMPU",
            //     "link" => $base_url."/ui/index.php?page=index&&module=keterangan_tidak_mampu",
            //     "child" =>"",
            // ),
             6  => array(
                "id"=> 1,
                "name" => "SKTM SEKOLAH",
                "link" => $base_url."/ui/index.php?page=index&&module=surat_sktm_sekolah",
                "child" =>"",
            ), 7  => array(
                "id"=> 1,
                "name" => "KETERANGAN DOMISILI",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_domisili",
                "child" =>"",
            ), 8  => array(
                "id"=> 1,
                "name" => "KETERANGAN USAHA",
                "link" =>$base_url."/ui/index.php?page=index&&module=keterangan_usaha",
                "child" =>"",
            ), 9  => array(
                "id"=> 1,
                "name" => "KETERANGAN KEHILANGAN",
                "link" => $base_url."/ui/index.php?page=index&&module=keterangan_kehilangan",
                "child" =>"",
            ), 10  => array(
                "id"=> 1,
                "name" => "PERMOHONAN KK",
                "link" => $base_url."/ui/index.php?page=index&&module=permohonan_kk",
                "child" =>"",
            ), 11  => array(
                "id"=> 1,
                "name" => "PENGANTAR AKTA KELAHIRAN",
                "link" => $base_url."/ui/index.php?page=index&&module=pengantar_akta_kelahiran",
                "child" =>"",
            ), 12  => array(
                "id"=> 1,
                "name" => "SURAT KEMATIAN",
                "link" => $base_url."/ui/index.php?page=index&&module=surat_kematian",
                "child" =>"",
            ), 13  => array(
                "id"=> 1,
                "name" => "KETERANGAN PINDAH PENDUDUK",
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
                "name" => "SKCK",
                "link" => $base_url.'/ui/cetak_skck.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            1 => array(
                "id"=> 1,
                "name" => "SUKET BELUM MENIKAH",
                "link" => $base_url.'/ui/cetak_belumpernahmenikah.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            2 => array(
                "id"=> 1,
                "name" => "KETERANGAN UNTUK MENIKAH",
                "link" => $base_url.'/ui/cetak_untukmenikah.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            3 => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN HAJATAN",
                "link" => $base_url.'/ui/cetak_hajatan.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            4 => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN KERAMAIAN",
                "link" => $base_url.'/ui/cetak_keramaian.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            // 5 => array(
            //     "id"=> 1,
            //     "name" => "KETERANGAN TIDAK MAMPU",
            //     "link" => $base_url.'/ui/cetak_tidakmampu.php?module=cetak&&ref=yes',
            //     "child" =>"",
            // ),
            6 => array(
                "id"=> 1,
                "name" => "SKTM SEKOLAH",
                "link" => $base_url.'/ui/cetak_sktm_sekolah.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            7 => array(
                "id"=> 1,
                "name" => "KETERANGAN DOMISILI",
                "link" => $base_url.'/ui/cetak_domisili.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            8 => array(
                "id"=> 1,
                "name" => "KETERANGAN USAHA",
                "link" =>$base_url.'/ui/cetak_usaha.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            9 => array(
                "id"=> 1,
                "name" => "KETERANGAN KEHILANGAN",
                "link" => $base_url.'/ui/cetak_kehilangan.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            10 => array(
                "id"=> 1,
                "name" => "PERMOHONAN KK",
                "link" => $base_url.'/ui/cetak_kk.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            11 => array(
                "id"=> 1,
                "name" => "PENGANTAR AKTA KELAHIRAN",
                "link" => $base_url.'/ui/cetak_akta.php?module=cetak&&ref=yes',
                "child" =>"",
            ), 
            12 => array(
                "id"=> 1,
                "name" => "KEMATIAN",
                "link" => $base_url.'/ui/cetak_kematian.php?module=cetak&&ref=yes',
                "child" =>"",
            ),
            13 => array(
                "id"=> 1,
                "name" => "KETERANGAN PINDAH PENDUDUK",
                "link" => $base_url.'/ui/cetak_pindah.php?module=cetak&&ref=yes',
                "child" =>"",
            )
            
        ),
    ),
 );

?>