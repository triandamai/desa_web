
<div class="container-fluid">
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <?php if(isset($_GET['action'])){
                   if($_GET['action'] == 'tambah'){
                        include 'tambah.php';
                   }else if($_GET['action'] == 'ubah'){
                        include 'ubah.php';
                   }else if($_GET['action'] == 'form'){
                         include 'formtambah.php';
                    }else{
                        include 'data.php';
                   }
                }else{
                    include 'data.php';
               }?>
                           
                        </div>
                    </div>
    </div>
 </div>