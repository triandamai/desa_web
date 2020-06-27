<?php 
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Reader\Csv;
        use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

        $db = new database();

        if(isset($_POST['simpan'])){
            $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
                $arr_file = explode('.', $_FILES['berkas_excel']['name']);
                $extension = end($arr_file);
             
                if('csv' == $extension) {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }
             
                $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
                 
                $sheetData = $spreadsheet->getActiveSheet()->toArray();
                for($i = 1;$i < count($sheetData);$i++)
                {
                    $nama     = $sheetData[$i]['1'];
                    $nik    = $sheetData[$i]['2'];
                    $nokk     = $sheetData[$i]['3'];
                    $jk = $sheetData[$i]['4'];
                    $tgl_lahir = str_replace("/","-",$sheetData[$i]['5']);
                    $umur = $sheetData[$i]['6'];
                    $tmp_lahir = $sheetData[$i]['7'];
                    $alamat = $sheetData[$i]['8'];
                    $rt = $sheetData[$i]['9'];
                    $rw = $sheetData[$i]['10'];
                    $kelurahan = $sheetData[$i]['11'];
                    $status_kawin = $sheetData[$i]['12'];
                    $pendidikan = $sheetData[$i]['13'];
                    $warganegara = $sheetData[$i]['14'];
                    $agama = $sheetData[$i]['15'];
                    $pekerjaan = $sheetData[$i]['16'];
                    $goldarah = $sheetData[$i]['17'];
                    $nama_ayah = $sheetData[$i]['18'];
                    $nama_ibu = $sheetData[$i]['19'];
                    

                    $simpan = $db->simpan_penduduk(
                        $nik,
                        $nokk,
                        $nama,
                        $jk,
                        $tgl_lahir,
                        $umur,
                        $tmp_lahir,
                        'Lumbir Rt '.$rt.' Rw '. $rw,
                        $rt,
                        $rw,
                        'kosong',
                        $status_kawin,
                        $pendidikan,
                        $warganegara,
                        $agama,
                        $pekerjaan,
                        $goldarah,
                        'kosong',
                        0,
                        'kosong',
                        0,
                        'kosong',
                        0,
                        $nama_ayah,
                        $nama_ibu)or die(mysqli_error($db->koneksi));
                        
                 
             
                }
             
                    echo '<script>alert("Berhasil Menambahkan ");</script>';
                    echo '<script> location.replace("'.$base_url_module.'"); </script>';
  
            }

 

        }
?>
<div class="card-body">
    <h4 class="card-title">IMPORT Data Penduduk</h4>  
    <div class="form-group text-center">
            <a href="<?php echo $base_url;?>ui/datapenduduk/TEMPLATE_DATA_PENDUDUK.xlsx" class="btn btn-primary" type="submit">Download Template</a>
        </div>           
    <form class="pl-3 pr-3" action="" enctype="multipart/form-data" method="POST">
        <div class="input-group">
        <div class="custom-file">
                <input
                    type="file"
                    class="custom-file-input"
                    name="berkas_excel"
                    id="inputGroupFile04"
                    />
                 <label class="custom-file-label" for="inputGroupFile04"
                     >Pilih </label>
        </div>
        <!-- <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    Button
                </button>
               </div> -->
        </div>
        <input class="form-control" name="simpan" value="simpan" type="hidden" required="" placeholder="000xxx">
        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

