<?php
include_once('layouts/header.php');
include_once('layouts/navbar.php');
include_once('layouts/sidebar.php');
?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Table-Export</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>RowID</th>
                                                <th>FK USER</th>
                                                <th>PHONE REF</th>
                                                <th>PHONE AFI</th>
                                                <th>STATUS REF</th>
                                                <th>STATUS AFI</th>
                                                <th>BONUS REF</th>
                                                <th>REDEEM</th>
                                                <th>Datec</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $pdo = Koneksi::connect();
                                        $sql = 'SELECT * FROM llx_afiliasi where bonus_ref = 1 AND  redeem = 1';

                                        foreach ($pdo->query($sql) as $row) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id'] . '</td>';
                                            echo '<td>' . $row['fk_user'] . '</td>';
                                            echo '<td>' . $row['phone_ref'] . '</td>';
                                            echo '<td>' . $row['phone_afi'] . '</td>';
                                            echo '<td>' . $row['fk_status_ref'] . '</td>';
                                            echo '<td>' . $row['fk_status_afi'] . '</td>';
                                            echo '<td>' . $row['bonus_ref'] . '</td>';
                                            echo '<td>' . $row['redeem'] . '</td>';
                                            echo '<td>' . $row['created_at'] . '</td>';
                                            echo '<td>';
                                            echo '<a class="btn btn-info" href="">Show</a>';
                                            echo '<a class="btn btn-primary" href="">Edit</a>';
                                            echo '<a class="btn btn-warning" href="redeem.php?id=' . $row['id'] . '">Redeem</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                        Koneksi::disconnect();
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php
include_once('layouts/footer.php')

?>