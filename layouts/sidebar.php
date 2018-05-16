  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
            <ul>
                <li class="label">Main</li>
                <li class=""><a href=""><i class="ti-home"></i> Dashboard</a></li>
                <li class=""><a href="tambahafi.php"><i class="ti-view-list-alt"></i> Tambah Afiliasi</a></li>
            
                <li class="{{ Request::is('data*') ? 'active': '' }}"><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Data <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li class="{{ Request::is('data/user*') ? 'active': '' }}"><a href="societe.php">Data Societe</a></li>
                        <li class="{{ Request::is('data/afiliasi*') ? 'active': '' }}"><a href="index.php">Data Afiliasi</a></li>
                    </ul>
                </li>
                <li class="viewbonus.php"><a href=""><i class="ti-layout-grid4-alt"></i>View BONUS</a></li>                                   
                <li>  <a href="">
                    <i class="ti-close"></i> <span>Logout</span></a></li>
          
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->