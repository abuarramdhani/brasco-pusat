  <?php

  require 'functions.php';
  if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0 ) {
      echo "
      <script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'index.php';
      </script>
      ";
    }else{
      echo "
      <script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = 'index.php';
      </script>
      ";
    }
  }
  $data = query("SELECT * FROM inventory");
  $title = "Master Inventory";
  ?>
  <?php include('../templates/header.php') ?>
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
        <h1>
          Master Inventori
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Blank page</li>
        </ol>
      </section> -->

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-body">
            <h1>MASTER INVENTORY</h1>
            <div class="border bg-light " style="width: 100%; margin-bottom: 20px;">
              <p class="text-danger">
                Informasi! <br>
                Pastikan Barcode sudah dibuat dan disetujui <br>
                Harap Cek Duplikasi Barcode sebelum lanjut ke langkah berikutnya
              </p>
            </div>
            <form  class="inline-form" action="" method="post">
              <div class="form-group">
                <input class="mr-sm-2 " type="text" id="isi_barcode" name="barcode" placeholder="Barcode">
                <button type="button" class="btn btn-danger mr-sm-2" id="barcode">Cek Duplikasi</button>
                <input class="mr-sm-2" type="text" name="nama_barang" placeholder="Nama Barang">
                <input class="mr-sm-2" type="text" name="satuan" placeholder="Satuan">
                <select name="id_tipe_barang" style="width: auto" class="custom-select">
                <?php
                  $datat = cariBarang();
                  foreach($datat as $datas):
                ?>
                   <option value="<?=$datas['id']?>"><?=$datas['nama_barang']?></option>
                <?php endforeach;?>
                </select>
              </div>
              <div class="form-group ">
                <input class="mr-sm-2" type="text" name="harga_jual1" placeholder="Harga Jual 1">
                <input class="mr-sm-2" type="text" name="harga_jual2" placeholder="Harga Jual 2">
                <input class="mr-sm-2" type="text" name="harga_jual3" placeholder="Harga Jual 3">
              </div>
              <button type="submit" class="btn btn-light" name="submit">Add</button>
            </form>
            <div style="width: 100%">
              <div style="border-top: solid; width: 100%; margin-top: 20px">
                <h3 style="margin-top: 20px">LIST MASTER INVENTORY</h3>
              </div>
              <button type="button" class="btn btn-light">Copy</button>
              <button type="button" class="btn btn-light">CSV</button>
              <button type="button" class="btn btn-light">Excel</button>
              <button type="button" class="btn btn-light">PDF</button>
              <button type="button" class="btn btn-light">Print</button>
            </div>
            <div class="table-responsive" style="margin-top: 20px">
              <table class="table table-bordered table-striped">
                <thead class="thead-dark" align="center">
                  <tr>
                    <th>No</th>
                    <th>BARCODE</th>
                    <th>NAMA</th>
                    <th>SAT</th>
                    <th>TIPE BARANG</th>
                    <!-- <th>HARGA BELI AKHIR</th>
                    <th>TOT BELI AKHIR</th> -->
                    <th>HARGA JUAL 1</th>
                    <th>HARGA JUAL 2</th>
                    <th>HARGA JUAL 3</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody align="center">
                <?php $i = 1; ?>
                  <?php foreach($data as $row) : 
                    ?>
                    
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row["barcode"]; ?></td>
                      <td><?php echo $row["nama_barang"]; ?></td>
                      <td><?php echo $row["satuan"]; ?></td>
                      <?php 
                        $id_tipe = $row['id_tipe_barang'];
                        $result = query("SELECT * FROM tipe_barang WHERE id = '$id_tipe'");

                      ?>
                      <td><?php echo $result[0]['nama_barang']; ?></td>
                      <td><?php echo $row["harga_jual1"]; ?></td>
                      <td><?php echo $row["harga_jual2"]; ?></td>
                      <td><?php echo $row["harga_jual3"]; ?></td>
                      <td>
                        <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?php echo $row["id"]; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div style="width: 100%; text-align: right;">
              <button class="btn btn-light">Close</button>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    
    <!-- /.content-wrapper -->
    
    <?php include('../templates/footer.php') ?>