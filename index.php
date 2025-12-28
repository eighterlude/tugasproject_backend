<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi To Do List</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!--Main Section-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1 class="text-center mb-4">Aplikasi To Do List</h1>
          
          <a href="frm_tambah.php" class="btn btn-primary btn-sm"> 
             <ion-icon name="add-outline"></ion-icon>
          </a>

          <!--Card dimulai dari sini---> 
          <?php
              include("koneksi.php"); 

              $sql="select*from list order by id asc"; 
              $query=mysqli_query($koneksi, $sql) or die ("Gagal SQL");
              while($data=mysqli_fetch_array($query)){
          ?>
          <div class="card mt-2">
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <?php
                    if($data['status_selesai'] == 1){
                  ?>
                  <ion-icon name="checkbox-outline" style="font-size: 20px;position:relative;
                  top:5px;color:green;"></ion-icon>
                <?php } ?>
                <?php echo $data['judul'];
                ?> 
              </div>
                <div class="col-md-3">
                  <a href ="#" class="btn btn-success btn-sm">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </a>
                  <a href="#" class="btn btn-warning btn-sm">
                    <ion-icon name="pencil-outline"></ion-icon>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <ion-icon name="trash-outline"></ion-icon>
                  </a>
                  </div>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
          <!--Card sampai disini--> 
        </div>
      </div>
    </div>
  </section>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>