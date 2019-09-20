<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title id="title"></title>
  <base href="http://localhost/brasco/">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <!-- <img src="assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <h4>
                          AdminLTE Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <!-- <img src="assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <!-- <img src="assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <!-- <img src="assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <!-- <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <!-- <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li id="header_profile">
            <a href="profil.php"><i class="fa fa-user"></i> <span>Profil</span></a>
          </li>
          <li class="">
            <a href="master_customer"><i class="fa fa-calendar-o"></i> <span>Jurnal Referensi</span></a>
          </li>
          <li class="treeview" id="header_inventory">
            <a href="#"><i class="fa fa-cubes"></i>
              <span>Inventori</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="header_inventory_master"><a href="masterInventori.php"><i class="fa fa-circle-o"></i> Master Inventori</a></li>
              <li id="header_inventory_search"><a href="searchDataInventory.php"><i class="fa fa-circle-o"></i>Search Data Inventory</a></li>
              <li id="header_inventory_edit"><a href="editdatainventory.php"><i class="fa fa-circle-o"></i>Edit Data Inventory</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-cube"></i>
              <span>Stock Opname</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inputHasilStockOpname.php"><i class="fa fa-circle-o"></i>Input Hasil Stock Opname</a></li>
              <li><a href="selisihStokOpname.php"><i class="fa fa-circle-o"></i>Selisih Stock Opname</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dollar"></i>
              <span>Perubahan Harga</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pengajuanPerubahanHarga.php"><i class="fa fa-circle-o"></i>Pengajuan Perubahan Harga</a></li>
              <li><a href="approvalPengajuanPerubahanHarga.php"><i class="fa fa-circle-o"></i>Approval Perubahan Harga</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-archive"></i>
              <span>Supplier</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="dataSuplier.php"><i class="fa fa-circle-o"></i>Master Supplier</a></li>
              <li>
                <a href="listsSuplier.php"><i class="fa fa-circle-o"></i> <span>List Supplier</span></a>
              </li>
              <li>
                <a href="listHutang.php"><i class="fa fa-circle-o"></i> <span>List Hutang</span></a>
              </li>
              <li>
                <a href="masterSupplierDenganSaldo.php"><i class="fa fa-circle-o"></i> <span>Supplier Dengan Saldo</span></a> <!-- belom komplet-->
              </li>
              <li>
                <a href="jatuhTempoPembayaran.php"><i class="fa fa-circle-o"></i> <span>Jatuh Tempo Pembayaran</span></a>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Purchase Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="Purchase Order.php"><i class="fa fa-circle-o"></i>Purchase Order</a>
              </li>
              <li>
                <a href="cetakLabelBarcode.php"><i class="fa fa-circle-o"></i> <span>Cetak Label Barcode</span></a>
              </li>
              <li>
                <a href="menuDataPO.php"><i class="fa fa-circle-o"></i> <span>Data Purchase Order</span></a>
              </li>
              <li>
                <a href="approvalPurchaseOrder.php"><i class="fa fa-circle-o"></i> <span>Approval PO Manager</span></a>
              </li>
              <li>
                <a href="statusApprovalPO.php"><i class="fa fa-circle-o"></i> <span>Status Approval PO</span></a>
              </li>
              <li>
                <a href="menuClosedPO.php"><i class="fa fa-circle-o"></i> <span>Menu Closed PO</span></a>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-usd"></i>
              <span>Purchasing</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="#.php"><i class="fa fa-circle-o"></i> <span>Input Barang Masuk</span></a>
              </li>
              <li>
                <a href="laporanBarangMasuk.php"><i class="fa fa-circle-o"></i> <span>Laporan Barang Masuk</span></a>
              </li>
              <li>
                <a href="brgmasuk.php"><i class="fa fa-circle-o"></i> <span>Detail List Barang Masuk</span></a>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Customer</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="#.php"><i class="fa fa-circle-o"></i> <span>Data Master Customer</span></a>
              </li>
              <li>
                <a href="#.php"><i class="fa fa-circle-o"></i> <span>Input Sales Order</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a href="laporanSalesOrder.php"><i class="fa fa-circle-o"></i> <span>Laporan Sales Order</span></a>
          </li>
          <li>
            <a href="detailSalesOrder.php"><i class="fa fa-circle-o"></i> <span>Detail Sales Order</span></a>
          </li>
          <li>
            <a href="editSalesOrder.php"><i class="fa fa-circle-o"></i> <span>Edit Sales Order</span></a>
          </li>
          <li>
            <a href="listorder.php"><i class="fa fa-circle-o"></i> <span>List Order ke Gudang</span></a>
          </li>
          <li>
            <a href="orderkeGudang.php"><i class="fa fa-circle-o"></i> <span>Order ke Gudang</span></a>
          </li>
          <li>
            <a href="listpickinggudang.php"><i class="fa fa-circle-o"></i> <span>List Picking Gudang</span></a>
          </li>
          <li>
            <a href="pickingudang.php"><i class="fa fa-circle-o"></i> <span> Picking Gudang</span></a>
          </li>
          <li>
            <a href="listpackinggudang.php"><i class="fa fa-circle-o"></i> <span>List Packing Gudang</span></a>
          </li>
          <li>
            <a href="picking.php"><i class="fa fa-circle-o"></i> <span> Packing Gudang</span></a>
          </li>
          <li>
            <a href="sales.php"><i class="fa fa-circle-o"></i> <span>Menu Sales Invoice</span></a>
          </li>
          <li>
            <a href="cetaksuratjalan.php"><i class="fa fa-circle-o"></i> <span>Cetak Surat Jalan</span></a>
          </li>
          <li>
            <a href="cetakkwitansi.php"><i class="fa fa-circle-o"></i> <span>Cetak kwitansi</span></a>
          </li>
          <li>
            <a href="retpembrg.php"><i class="fa fa-circle-o"></i> <span>Retur Pembelian Barang</span></a>
          </li>
          <li>
            <a href="diskonBarangReject.php"><i class="fa fa-circle-o"></i> <span>Diskon Barang Reject</span></a>
          </li>
          <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>