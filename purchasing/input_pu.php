<?php $role = "procurement" ?>

<?php
require '../env.php';
cekAdmin($role);
$title = 'Input Barang Masuk';
$total = 0;
$query = query("SELECT * FROM purchase_order");


if (isset($_POST['submit'])) {
    extract($_POST);
    $sql = '';
    $total_quantity = 0;
    for ($i = 1; $i <= $total_item; $i++) {
        $id_admin = $_SESSION['admin']['id'];
        $quantity_terima = $_POST['quantity_terima_' . $i];
        $barcode = $_POST['barcode_' . $i];
        $inven = query("SELECT * FROM inventory WHERE barcode = '$barcode'")[0];
        $quantity_inven  =  intval($inven['quantity']) + intval($quantity_terima);
        $sql .= "UPDATE inventory SET quantity = '$quantity_inven' WHERE barcode = '$barcode';";
        $harga_satuan = $_POST['harga_satuan_' . $i];
        $quantity_order = $_POST['quantity_order_' . $i];
        $sql .= "INSERT INTO purchasing_item(kode_pu,barcode,quantity_order,quantity_terima,harga_satuan, id_admin, id_edit_admin) VALUES('$nomor_invoice','$barcode','$quantity_order','$quantity_terima','$harga_satuan', '$id_admin', '0');";
        $total_quantity += intval($quantity_terima);
    }
    $id_admin = $_SESSION['admin']['id'];
    $sql .= "INSERT INTO purchasing(kode,nomor_surat_jalan,kode_supplier,diterima_oleh,tanggal_terima,tanggal_jatuh_tempo,total_quantity, id_admin, id_edit_admin) VALUES('$nomor_invoice','$nomor_surat_jalan','$kode_supplier','$diterima_oleh',CAST('$tanggal_terima' AS DATE),CAST('$tanggal_jatuh_tempo' AS DATE),'$total_quantity', '$id_admin', '0');";
    $query = mysqli_multi_query($conn, $sql);
    lanjutkan($query, "Dimasukkan");
    $reload = true;
}
if (isset($_GET['kode_po'])) {
    if (!isset($reload)) {
        $kode = $_GET['kode_po'];
        $query_po = query("SELECT * FROM purchase_order WHERE kode='$kode'");
        if (!isset($query_po[0])) {
            alert('Data tidak ditemukan!');
        } else {
            $query_po = $query_po[0];
            $query_item = query("SELECT * FROM purchase_order_item WHERE kode_po='$kode'");
            $accept = true;
        }
    }
}

?>

<!-- =============================================== -->
<?php if (isset($reload)) : ?>
    <script>
        window.stop();
        window.location.href = 'input_pu.php';
    </script>
<?php endif ?>
<script>
    var active = 'header_purchasing';
    var active_2 = 'header_purchasing_input';
</script>
<?php include('../templates/header.php') ?>

<!-- `Content` Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Input Barang Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Input Barang Masuk</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- Setelah ada GET -->
            <?php if (isset($accept)) : ?>
                <form action="" method="POST" class="form-horizontal">

                    <div class="box-body">
                        <div class="form">
                            <div class="col-md-6">
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="text" name="kode_po" readonly value="<?= $query_po['kode'] ?>" class="form-control col-md-7" placeholder="KODE PO" style="width: 60%;">
                                        <i class="fa fa-search text-dark fa-2x col-md-4"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nomor_surat_jalan" class="form-control" placeholder="NOMOR SURAT JALAN" style="width: 80%">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nomor_invoice" class="form-control" placeholder="NOMOR INVOICE" style="width: 80%">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <div class="form-group" style="padding-right: 10px;">
                                                <input type="text" class="form-control" name="kode_supplier" readonly value="<?= $query_po['kode_supplier'] ?>" placeholder="KODE SUPP">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nama_supplier" readonly value="<?= $query_po['nama_supplier'] ?>" placeholder="SUPPLIER">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="ALAMAT" readonly><?= $query_po['alamat'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Diterima oleh</label>
                                        <div class="col-md-8">
                                            <input type="text" name="diterima_oleh" class="form-control" placeholder="DITERIMA OLEH">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tanggal Terima</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="date" required id="formtanggal" name="tanggal_terima" class="form-control">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tgl Jatuh Tempo</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="date" required id="formtanggal" name="tanggal_jatuh_tempo" class="form-control">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive" style="margin-top: 20px">
                            <table id="table_pu" class="table table-bordered table-striped">
                                <thead class="thead-dark" align="center">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Nama Item</th>
                                        <th>QTY Order</th>
                                        <th>QTY Terima</th>
                                        <th>Sat</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah Harga</th>
                                    </tr>
                                </thead>
                                <tbody align="center" class="text-center">
                                    <?php $i = 1;
                                        foreach ($query_item as $data) :
                                            $id_s = $data['satuan'];
                                            $satuan = query("SELECT * FROM satuan WHERE id = '$id_s'")[0] ?>
                                        <tr class="text-center">
                                            <td><?= $i ?></td>
                                            <td><?= $data['barcode_inventory'] ?></td>
                                            <td><?= $data['nama_inventory'] ?></td>
                                            <td><?= $data['quantity'] ?></td>
                                            <td><input size="1px" type="text" name="quantity_terima_<?= $i ?>"></td>
                                            <td><?= $satuan['satuan'] ?></td>
                                            <td><?= $data['harga_satuan'] ?></td>
                                            <td><?= intval($data['quantity']) * intval($data['harga_satuan']) ?></td>
                                            <input type="hidden" name="barcode_<?= $i ?>" value="<?= $data['barcode_inventory'] ?>">
                                            <input type="hidden" name="nama_inventory_<?= $i ?>" value="<?= $data['nama_inventory'] ?>">
                                            <input type="hidden" name="quantity_order_<?= $i ?>" value="<?= $data['quantity'] ?>">
                                            <input type="hidden" name="satuan_<?= $i ?>" value="<?= $data['satuan'] ?>">
                                            <input type="hidden" name="harga_satuan_<?= $i ?>" value="<?= $data['harga_satuan'] ?>">

                                        </tr> <?php
                                                        $i++;
                                                        $total += intval($data['quantity']);
                                                    endforeach; ?> </tbody>
                            </table>
                        </div>
                        <div class="form-group pull-right">
                            <input type="hidden" name="total_item" value="<?= --$i ?>">
                            <button type="submit" name="submit" class="btn btn-info">Save</button>
                        </div>
                    </div>
                </form>
                <!-- Sebelum ada GET -->
            <?php else : ?>

                <div class="box-body">
                    <div class="form">
                        <form action="" method="GET" class="form-horizontal">
                            <div class="col-md-6">
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="text" name="kode_po" class="form-control col-md-7" placeholder="KODE PO" style="width: 60%;">
                                        <button type="submit" class="btn" style="background-color:transparent"><i class="fa fa-search text-dark fa-2x col-md-4"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body">
                    <!-- table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Purchase Order</th>
                                    <th>Tanggal Approve</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Pilih</th>
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
                                        <td> <?= ($keterangan !== '') ? $keterangan : $keterangan_approve ?></td>
                                        <td><a href="purchasing/input_pu.php?kode_po=<?= $kode ?>" class="btn btn-info">Pilih</a></td>

                                    </tr>
                                <?php $i++;
                                    endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../templates/footer.php') ?>