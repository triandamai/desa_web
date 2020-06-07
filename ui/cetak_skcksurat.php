<?php 
    include '../config/function.php';
    $db = new database();
?>
        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center>PEMERINTAH KABUPATEN BANYUMAS</center></td></tr>
<tr><td colspan=8 ><center>KECAMATAN LUMBIR</center></td></tr>
<tr><td colspan=8 ><center>DESA LUMBIR</center></td></tr>
<tr><td colspan=8 ><center>Jl. Raya Lumbir Desa. Lumbir Kec. Lumbir 53177 Banyumas Jawa Tengah</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th><center>No</th> 
<td><center>Nama</td>
<td><center>NIK</td>
<td><center>Jenis Kelamin</td>
<td><center>Tempat/ Tanggal Lahir</td>
<td><center>Status Perkawinan</td>
<td><center>Kewarganegaraan</td>
<td><center>Agama</td>
<td><center>Pekerjaan</td>
<td><center>Alamat</td>
</tr>

<?php

$no =1;
foreach($db->tampil_pengantar_skck($_GET['id']) as $data) {
    if($data != null){
?>
<tr bgcolor='#FFF'>
<td><?php echo $no++ ?></td>
	                                            <td><?php echo $data['nama'] ?></td>
	                                            <td><?php echo $data['nik'] ?></td>
	                                            <td><?php echo $data['jenis_kel'] ?></td>
	                                            <td><?php echo $data['tmp_lahir'] ?></td>
	                                            <td><?php echo $data['tgl_lahir'] ?></td>
	                                            <td><?php echo $data['status_kawin'] ?></td>
	                                            <td><?php echo $data['agama'] ?></td>
	                                            <td><?php echo $data['pekerjaan'] ?></td>
	                                            <td><?php echo $data['alamat'] ?></td>
</tr>
<?php
$no++;
    }
}
?>
<table>
</table>
<table>
</table>
<br>

<br>
<table>
<td><tr>LUMBIR,<?php echo date('d - M - Y'); ?></tr><br>
<tr>KEPALA DESA <br>
<tr>                 </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>      SUWARJO     </tr>
</td>
</table>

</div>
</div>
</div>
</div>