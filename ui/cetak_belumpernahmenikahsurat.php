<?php 
    include '../config/function.php';
    $db = new database();
?>
<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data</title>
<body onLoad="window.print()">
<?php


foreach($db->tampil_suket_belum_menikah($_GET['id']) as $data) {
    if($data != null){
?>
<table border=0 width=100%>
 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT KETERANGAN<br>
         BELUM PERNAH MENIKAH </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</table>

<table width='100%'>
<br>
<br>
<br>
<tr>
  <td>Saya yang bertanda tangan dibawah ini :  </td>
</tr>

</table>
<br>


<table width='100%' >
<tr>
<td></td>
<td width="40%">Nama Lengkap</td>
<td width="95%">: <?php echo "$data[nama]";?></td>
</tr>
<tr>
<td></td>
<td>NIK</td>
<td>: <?php echo "$data[nik]";?></td>
</tr>
<tr>
<td></td>
<td>Jenis Kelamin</td>
<td>: <?php echo "$data[jenis_kel]";?></td>
</tr>
<tr>
<td></td>
<td>Tempat/ Tanggal Lahir</td>
<td>: <?php echo "$data[tmp_lahir]";?>/ <?php echo $data['tgl_lahir']?></td>
</tr>
<tr>
<td></td>
<td>Kewarganegaraan</td>
<td>: <?php echo "$data[kewarganegaraan]";?></td>
</tr>
<tr>
<td></td>
<td>Agama</td>
<td>: <?php echo "$data[agama]";?></td>
</tr>
<tr>
<td></td>
<td>Pekerjaan</td>
<td>: <?php echo "$data[pekerjaan]";?></td>
</tr>
<tr>
<td></td>
<td>Alamat</td>
<td>: <?php echo "$data[alamat]";?></td>
</tr>
</table>

<p>Dengan ini menyatakan dengan sesungguhnya atau sebenarnya dan berani diangkat sumpah menurut agama yang saya anut bahwa saya sampai saat ini BELUM PERNAH MENIKAH DENGAN SIAPAPUN. Bila surat pernyataan ini tidak benar, saya bersedia dituntut menurut hukum yang berlaku. Demikian surat pernyataan ini dibuat untuk dipergunakan sebagai mana mestinya.</p>
<table width=100%>
  <tr>
    <td width="30%">
	
	
	<center>
        <br><br><br> 
		Yang Menyatakan<br><br><br><br><br><br>

           <?php echo "$data[nama]";?><br>
         
    
        </center>
    </td>
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table align = "center">
            
            <tr>
              <td>Lumbir,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          KEPALA DESA LUMBIR<br><br><br><br><br><br>

          SUWARJO <br>
         
    
        </center>
    </td>
  </tr>
</table> 
    <?php } }?>
</body>