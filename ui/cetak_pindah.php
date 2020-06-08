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
<td><center>Kepala Keluarga</td>
<td><center>Tempat/ Tanggal Lahir</td>
<td><center>Kewarganegaraan</td>
<td><center>Alamat Asal</td>
<td><center>Alamat Tujuan</td>
<td><center>Jumlah Anggota</td>
</tr>

<?php 
    $no =1; 
    foreach($db->tampil_suket_pindah_penduduk(null) as $row) {
        if($row != null){?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='center'> <?php echo $row['nama']; ?></td>
<td align='center'> <?php echo $row['nik']; ?> </td>
<td align='center'> <?php echo $row['nama_kepkel']; ?> </td>
<td align='center'><?php echo $row['tmp_lahir']; ?>/ <?php echo $row['tgl_lahir'];?> </td>
<td align='center'> <?php echo $row['kewarganegaraan']; ?>  </td>
<td align='center'> <?php echo $row['alamat_asal']; ?>  </td>
<td align='center'> <?php echo $row['alamat_tuju']; ?>  </td>
<td align='center'> <?php echo $row['jumlah_anggota']; ?>  </td>
</tr>
<?php
$no++;}
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