<?php $role = "procurement" ?>

<?php
$title = "Close Purchase Order";
require '../env.php';

if (isset($_POST['submit'])) {
    extract($_POST);
    $t = false;
    $sql = 'SELECT * FROM purchase_order ';
    if ($tanggal !== '') {
        if ($tanggal2 !== '') {
            $sql .= "WHERE tanggal BETWEEN CAST('$tanggal' AS DATE)  AND CAST('$tanggal2' AS DATE) ";
        } else {
            $sql .= "WHERE tanggal = CAST('$tanggal' AS DATE) ";
        }
        $sql .= "AND status != 'Closed' ";
        // $t = true;
    }
    // if ($t && $status !== "Semua") {
    //     $sql .= "AND status = '$status' ";
    // }
    // if (!$t && $status !== "Semua") {
    //     $sql .= "WHERE status = '$status'";
    // }
    // if ($tanggal2 !== '' && $tanggal == '') {
    //     alert("Tolong diisi tanggal pertamanya");
    //     $sql = '';
    // }
    $query = query($sql);
}

?>
<script>
    var active = 'header_po';
    var active_2 = 'header_purchase_closed';
</script>

<?php include('../templates/header.php') ?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
            Approve Purchase Order
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Laporan PO</li>
        </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info pb-4">

            <div class="box-body ">
                <h3 class="text-center">CLOSE PURCHASE ORDER </h3>

                <div class="row" style="margin-top: 40px;">
                    <form method="POST" action="">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Tanggal PO</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="date" name="tanggal" id="formtanggal" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="date" name="tanggal2" id="formtanggal" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="submit" class="btn btn-info" value="Search">
                        </div>
                    </form>
                </div>


            </div>
            <!-- /.box-footer-->
        </div>
        <?php if (isset($query)) : ?>
            <div class="box box-info">
                <div class="box-body">
                    <!-- table -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Tanggal Purchase Order</th>
                                <th>Tanggal Approve</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                                <th>Close PO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                                foreach ($query as $data) : extract($data); ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $kode ?></td>
                                    <td><?= $tanggal ?></td>
                                    <td><?= ($tanggal_approve == '') ? 'Unknown' : $tanggal_approve ?></td>
                                    <td><?= $status ?></td>
                                    <td><a href="purchase_order/lihat_po.php?kode=<?= $kode ?>" target="_blank" class="btn btn-info">Detail</a></td>
                                    <td> <?= $keterangan_approve ?></td>
                                    <td><button class="btn btn-danger" onclick="close_po('<?= $kode ?>')">Close PO</button></td>
                                    <input type="hidden" name="total" value="<?= $i ?>">
                                    <input type="hidden" name="kode<?= $i ?>" value="<?= $kode ?>">
                                </tr>
                            <?php $i++;
                                endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function close_po(kode) {
        $.post('purchase_order/ajax.php', {
            request: 'close',
            'kode': kode
        }, function() {
            alert('PO berhasil di Close!')
            window.location.href = 'purchase_order/closed_po.php';
        })
    }
</script>
<?php include('../templates/footer.php') ?>