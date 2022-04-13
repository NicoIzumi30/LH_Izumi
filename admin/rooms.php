<?php 
    $title = "Roams";
    require "include/header.php";
?>
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=BASE_URL;?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Roams</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>Data Table Room
                <a href="room_add.php" class="btn btn-sm btn-info mb-2">Tambah</a>
            </div >
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 8%;">No.</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                            $query = mysqli_query($conn, "SELECT * FROM kamar ");
                            $data = mysqli_fetch_assoc($query);
                            if (mysqli_num_rows($query) > 0) {
                            $no =1;
                            do{
                            ?>
                                <tr class="text-center">
                                    <td><?=$no++; ?></td>
                                    <td><?=$data['jenis']; ?></td>
                                    <td><?=$data['harga']; ?></td>
                                    <td><img style="width: 100px;" src="<?=BASE_URL;?>assets/rooms/<?=$data['image']; ?>"></td>
                                    <td>
                                        <a href="room_change.php?id=<?=$data['id'];?>"class="btn btn-sm btn-success mt-3">Change</a>
                                        <a href="room_delete.php?id=<?=$data['id']; ?>"class="btn btn-sm btn-danger mt-3">Delete</a>
                                    </td>
                                </tr>
                            <?php }while ($data = mysqli_fetch_assoc($query));
                        }else{
                            echo "<tr><td colspan='6'><center>Belum Ada Data</center></td></tr>";

                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
  </div>