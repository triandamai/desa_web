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
<td><center>Kewarganegaraan</td>
<td><center>Pekerjaan</td>
<td><center>Alamat</td>
<td><center>Keperluan</td>
<td><center>Keterangan</td>
<td><center>Masa Berlaku</td>
</tr>

<?php 
    $no =1; 
    foreach($db->tampil_pengantar_hajatan(null) as $data) {
        if($data != null){?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='center'> <?php echo $data['nama']; ?></td>
<td align='center'> <?php echo $data['nik']; ?> </td>
<td align='center'> <?php echo $data['kewarganegaraan']; ?>  </td>
<td align='center'> <?php echo $data['pekerjaan']; ?>  </td>
<td align='center'> <?php echo $data['alamat']; ?>  </td>
<td align='center'> <?php echo $data['keperluan']; ?>  </td>
<td align='center'> <?php echo $data['keterangan']; ?>  </td>
<td align='center'> <?php echo $data['masa_berlaku']; ?> Bulan  </td>
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