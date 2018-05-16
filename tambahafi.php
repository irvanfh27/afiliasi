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
                            <h1>Hello,
                                <span>Welcome</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Table-Export</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>

            <section id="main-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Tambah Data Afiliasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form action="{{ route('tambah.data.afiliasi') }}" method="post">
                                        <!-- @csrf -->
                                        <div class="form-group">
                                            <label>FK USER</label>
                                            <input type="numeric" class="form-control" placeholder="FK USER" name="fk_user">
                                        </div>
                                         <div class="form-group">
                                            <label>Phone Ref</label>
                                            <input type="text" class="form-control" placeholder="Phone Ref" name="phone_ref">
                                        </div>
                                         <div class="form-group">
                                            <label>Phone Afi</label>
                                            <input type="text" class="form-control" placeholder="Phone Afi" name="phone_afi">
                                        </div>
                                        <div class="form-group">
                                            <label>BONUS REF
                                            </label>
                                            <select class="form-control" name="bonus_ref">
                                                <option>Pilih Status Bonus</option>
                                                <option value="0">Belum Memenuhi</option>
                                                <option value="1">Sudah Mememnuhi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Redeem Status
                                            </label>
                                            <select class="form-control" name="redeem_status">
                                                <option>Pilih Status Redeem</option>
                                                <option value="1">Belum Terbayar</option>
                                                <option value="0">Sudah Terbayar</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Tambah Data</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /# row -->
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2018 © Admin Board. -
                                <a href="#">example.com</a>
                            </p>
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