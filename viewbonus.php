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
                                                <th>Phone REF</th>
                                                <th>Total Afi</th>
                                                <th>Total Bonus RP</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $pdo = Koneksi::connect();
                                        $sql = 'SELECT count(phone_afi), phone_ref FROM llx_afiliasi WHERE redeem = 1 AND
                                        bonus_ref GROUP BY phone_ref' ;

                                        foreach ($pdo->query($sql) as $row) {
                                            $hitung = $row['count(phone_afi)'] * 100000;

                                            echo '<tr>';
                                            echo '<td>' . $row['phone_ref'] . '</td>';
                                            echo '<td>' . $row['count(phone_afi)'] . '</td>';
                                            echo '<td> Rp. ' . $hitung .'</td>';
                                            echo '<td>';
                                            echo '<a class="btn btn-info" href="">Show</a>';
                                            echo '<a class="btn btn-primary" href="">Edit</a>';
                                            echo '<a class="btn btn-warning" href="redeem.php?phone_ref=' . $row['phone_ref'] . '">Redeem</a>';
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