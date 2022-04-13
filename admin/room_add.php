<?php 
$title = "Room Add";
require "include/header.php";

if(isset($_POST['insert'])){
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $image = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $path = "../assets/rooms/";

if(move_uploaded_file($file, $path.$image)){
    $query = mysqli_query($conn, "INSERT INTO kamar(jenis, harga, image) value ('$jenis', '$harga', '$image')");
if($query){
    echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/rooms.php'/>";
}
}
}
?>
<div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Room Add</div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-5">
            <div class="form-group">
                <label>Jenis Kamar</label>
                <input type="text" name="jenis" class="form-control" placeholder="Jenis Kamar" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Harga Kamar" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
            <div class="form-group">
                <input type="submit" name="insert" value="ADD ROOM" class="btn btn-sm btn-info">
            </div>
            </div>
            </div>

        </form>
    </div>

</div>

</div>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Klik tombol logout untuk menghapus seluruh sesi dan keluar</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="logout.php">Logout</a>
</div>
</div>
</div>
</div>