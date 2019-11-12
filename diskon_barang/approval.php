<?php require '../env.php';
if (isset($_POST['id_approve'])) {
    $data = query("SELECT * FROM diskon_barang_reject WHERE id = '$_POST[id_approve]'")[0];
    $inventory = query("SELECT * FROM inventory WHERE barcode = '$data[barcode]'")[0];
    $customer = query("SELECT * FROM customer WHERE kode = '$data[kode_customer]'")[0];
    $tipe_customer = $customer['tipe_customer'];
    $inventory['harga_jual' . $tipe_customer] = intval($inventory['harga_jual' . $tipe_customer]) * (intval($data['diskon']) / 100);

    $sql = "INSERT INTO inventory(barcode,nama_barang,satuan,id_tipe_barang,harga_jual1,harga_jual2,harga_jual3,quantity) VALUES('$data[barcode_reject]','$inventory[nama_barang]','$inventory[satuan]','$inventory[id_tipe_barang]','$inventory[harga_jual1]','$inventory[harga_jual2]','$inventory[harga_jual3]',$data[quantity]);";
    $sql .= PHP_EOL;
    $quantity_kurang = intval($inventory['quantity']) - intval($data['quantity']);
    $sql .= "UPDATE diskon_barang_reject SET status = 1 WHERE id = '$_POST[id_approve]';";
    $sql .= PHP_EOL;
    $sql .= "UPDATE inventory SET quantity = '$quantity_kurang' WHERE barcode = '$inventory[barcode]';";
    $query = mysqli_multi_query($conn, $sql);
    lanjutkan($query, "Di Approve!");
    header('Refresh:0');
}
?>
<?php $role = "inventory" ?>
<?php $title = "Approval Diskon Barang" ?>
<?php include('../templates/header.php') ?>

<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-body">
                <h3 class="text-center" style="margin-bottom: 20px">APPROVAL DISKON REJECT</h3>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th>No</th>
                            <th>Kode Reject</th>
                            <th>Kode Customer</th>
                            <th>Barcode Reject</th>
                            <th>Quantity</th>
                            <th>Harga Diskon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach (query("SELECT * FROM diskon_barang_reject WHERE status = 0") as $data) :
                                $inventory = query("SELECT * FROM inventory WHERE barcode = '$data[barcode]'")[0];
                                $customer = query("SELECT * FROM customer WHERE kode = '$data[kode_customer]'")[0];
                                $tipe_customer = $customer['tipe_customer'];
                                $harga_satuan = intval($inventory['harga_jual' . $tipe_customer]) * (intval($data['diskon']) / 100);
                                ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data['kode_reject'] ?></td>
                                    <td><?= $data['kode_customer'] ?></td>
                                    <td><?= $data['barcode_reject'] ?></td>
                                    <td><?= $data['quantity'] ?></td>
                                    <td><?= $harga_satuan ?></td>
                                    <td>
                                        <form action="" method="POST">
                                            <input type="hidden" name="id_approve" value="<?= $data['id'] ?>">
                                            <button class="btn btn-primary" type="submit">Approve</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    let active = "header_diskon";
    let active_2 = "header_diskon_approval";
</script>
<?php include('../templates/footer.php') ?>