<?php
$title = 'Approval Pengajuan Harga';
include '../env.php';
if (isset($_POST['kirim'])) {
    extract($_POST);
    $sql = '';
    for ($i = 1; $i <= $total; $i++) {
        $nomor_pengajuan  = $_POST['nomor_pengajuan' . $i];
        $tanggal_approve = $_POST['tanggal'];
        $approve = $_POST['approve' . $i];
        $keterangan = $_POST['keterangan' . $i];
        $sql .= "UPDATE pengajuan_perubahan_harga SET tanggal_approve = CAST('$tanggal_approve' AS DATE), keterangan = '$keterangan',status = '$approve'  WHERE nomor_pengajuan = '$nomor_pengajuan';";
        if ($approve == 'approve') {
            $sql2 = query("SELECT * FROM pph_item WHERE nomor_pengajuan = '$nomor_pengajuan'");
            foreach ($sql2 as $d) {
                extract($d);
                if ($tipe_customer == '3') {
                    $sql .= "UPDATE inventory SET harga_jual3 = '$harga_jual_baru', quantity = '$quantity' WHERE barcode = '$barcode_inventory';";
                }
                if ($tipe_customer == '2') {
                    $sql .= "UPDATE inventory SET harga_jual2 = '$harga_jual_baru', quantity = '$quantity' WHERE barcode = '$barcode_inventory';";
                }
                if ($tipe_customer == '1') {
                    $sql .= "UPDATE inventory SET harga_jual1 = '$harga_jual_baru', quantity = '$quantity' WHERE barcode = '$barcode_inventory';";
                }
            }
        }
    }
    $l = mysqli_multi_query($conn, $sql);
    lanjutkan($l, "Di Approve");
}
if (isset($_POST['submit'])) {
    extract($_POST);
    $i = false;
    $p = false;
    $sql = "SELECT * FROM pengajuan_perubahan_harga WHERE ";

    if (!$nomor_pengajuan2 == '') {
        $i = true;
    }
    if (!$nomor_pengajuan1 == '') {
        if ($i) {
            $sql .= "nomor_pengajuan BETWEEN '$nomor_pengajuan1' AND '$nomor_pengajuan2' ";
        } else {
            $sql .= "nomor_pengajuan = '$nomor_pengajuan1' ";
        }
        $i = true;
    }
    if (!$tanggal2 == '') {
        $p = true;
    }
    if (!$tanggal1 == '') {
        if ($i) {
            $sql .= "AND ";
        }
        if ($p) {
            $sql .= "tanggal_pengajuan BETWEEN CAST('$tanggal1' AS DATE) AND CAST('$tanggal2' AS DATE) ";
        } else {
            $sql .= "tanggal_pengajuan = CAST('$tanggal1' AS DATE) ";
        }
    }
    if (!$approve == 'semua') {
        $sql .= "AND status = '$approve'";
    }
    if ($i == false && $p == false) {
        $sql = "SELECT * FROM pengajuan_perubahan_harga";
    }
    $result = query($sql);
}
?>

<script>
    var active = 'header_perubahan';
    var active_2 = 'header_perubahan_approval';
</script>

<?php include('../templates/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>APPROVAL PENGAJUAN PERUBAHAN HARGA
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-body">
                        <!-- form -->
                        <form class="form-horizontal" action="" method="POST">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label class="col-sm-3">Nomor pengajuan</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="nomor_pengajuan1" class="form-control">
                                            </div>
                                            <label class="col-sm-1 control-label">s/d</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="nomor_pengajuan2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3">Tanggal pengajuan</label>
                                            <div class="col-sm-2">
                                                <div class="input-group">
                                                    <input type="date" name="tanggal1" id="formtanggal" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-sm-4 control-label">s/d</label>
                                            <div class="col-sm-2">
                                                <div class="input-group">
                                                    <input type="date" name="tanggal2" id="formtanggal" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3">Status</label>
                                            <div class="col-sm-4">
                                                <select name="approve" class="form-control" required>
                                                    <option value="semua">Semua</option>
                                                    <option value="approve">Approve</option>
                                                    <option value="batal">Batal</option>
                                                    <option value="belum_approve">Belum Approve</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="margin-top: 50px;">
                                        <button type="submit" name="submit" class="btn btn-info pull-right">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /end form -->

                    </div>
                    <!-- /.box-body -->
                </div>

                <?php if (isset($result)) : ?>
                    <div class="box box-info">
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Pengajuan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tipe Costumer</th>
                                        <th>Tanggal Approve</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                        <th>Approval</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="" method="POST">
                                        <?php $i = 1;
                                            foreach ($result as $res) : extract($res); ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $nomor_pengajuan ?></td>
                                                <td><?= $tanggal_pengajuan ?></td>
                                                <td>Customer <?= $tipe_customer ?></td>
                                                <td><?= ($tanggal_approve == '' ? 'Unknown' : $tanggal_approve) ?></td>
                                                <td><?= status($status) ?></td>
                                                <td><a href="pengajuan_perubahan_harga/detail.php?kode=<?= $nomor_pengajuan ?>" target="_blank" class="btn btn-info">Detail</a></td>
                                                <td><select name="approve<?= $i ?>" class="form-control" required="">
                                                        <option value="approve">Approve</option>
                                                        <option value="batal">Batal</option>
                                                    </select>
                                                </td>
                                                <input type="hidden" name="tanggal" value="<?= date("Y-m-d") ?>">
                                                <input type="hidden" name="nomor_pengajuan<?= $i ?>" value="<?= $nomor_pengajuan ?>">
                                                <input type="hidden" value="<?= $i ?>" name="total">
                                                <td><input class="form-control" type="text" name="keterangan<?= $i ?>"></td>
                                            </tr>
                                        <?php $i++;
                                            endforeach; ?>
                                </tbody>
                            </table>
                            <button class="btn btn-info pull-right" type='submit' name="kirim">Kirim</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../templates/footer.php') ?>