<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Account</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-sun-o"></i> Account
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Input Data Pengguna
        </h3>
        <form method="post">
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="">Pilih Status</option>
                    <option value="admin">Admin Super</option>
                    <option value="sales">Sales</option>
                    <option value="adminmrk">Admin Marketing</option>
                    <option value="pic">PIC Marketing</option>
                </select>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="pass" placeholder="Password" required>
            </div>
            <input type="submit" name="input" class="btn btn-default" value="Input"/>
        </form>

        <!-- Script Input -->
        <?php 
        if(@$_POST['input']){
            $nama_pengguna=$_POST['nama_pengguna'];
            $status=$_POST['status'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            
            $query=mysql_query("insert into tb_pengguna(nama_pengguna, username, pass, status) values('$nama_pengguna','$username','$pass','$status')") or die (mysql_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=account";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=account";
                </script>
            <?php
            } 
        }
        ?>
    </div>
    <div class="col-lg-7">
        <h3 class="page-header">
            Tampil Data
        </h3>
        <div class="table-responsive">
            <?php
                $view=mysql_query("select * from tb_pengguna order by username desc");
                $no=0;
            ?>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysql_fetch_array($view)){
                            if($row['status']=='guru'){
                    ?>
                    <tr>
                        <td><?php echo $no=$no+1; ?></td>
                        <td><?php echo $row['nama_pengguna']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><i><a href="?page=editaccount&id=<?php echo $row['id_pengguna'];?>">Edit</a></i></td>
                    </tr>
                    <?php
                            } else {
                    ?>
                    <tr>
                        <td><?php echo $no=$no+1; ?></td>
                        <td><?php echo $row['nama_pengguna']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><i><a href="?page=editaccount&id=<?php echo $row['id_pengguna'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="account_hapus.php?id=<?php echo $row['id_pengguna'];?>">Hapus</a></i></td>
                    </tr>
                    <?php   
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>