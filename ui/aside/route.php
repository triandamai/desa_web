<?php 
//type menu = 1 = no link, 2 = with link , 3 = dropdown , 4 = divider
$menus = array(
    0 =>array(
        "id"=> 0,
        "name"=> "BERANDA",
        "link" => "http://localhost/pd/ui/index.php?page=index&&module=index",
        "type" => "1",
        "child" => array(),
    ),
    1 =>array(
        "id"=> 1,
        "name"=> "LAYANAN",
        "link" => "http://localhost/pd/ui/index.php?page=index&&module=layanan",
        "type" => "5",
        "child" => array(),
    ),
    2 =>array(
        "id"=> 2,
        "name"=> "DATA PENDUDUK",
        "link" => "http://localhost/pd/ui/index.php?page=index&&module=datapenduduk",
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
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=pengantar_skck",
                "child" =>"",
            ),
            1  => array(
                "id"=> 1,
                "name" => "KETERANGAN BELUM PERNAH MENIKAH",
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=suket_belum_pernah_menikah",
                "child" =>"",
            ),
            2  => array(
                "id"=> 1,
                "name" => "KETERANGAN UNTUK MENIKAH",
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=suket_untuk_menikah",
                "child" =>"",
            ),
            3  => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN HAJATAN",
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=pengantar_hajatan",
                "child" =>"",
            ),
            4  => array(
                "id"=> 1,
                "name" => "PENGANTAR IJIN KERAMAIAN",
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=pengantar_keramaian",
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
                "link" => "http://localhost/pd/ui/index.php?page=index&&module=cetak_skck",
                "child" =>"",
            )
        ),
    ),
 );

?>