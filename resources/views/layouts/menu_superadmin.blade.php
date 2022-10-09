<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="">
            <a href="/beranda">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/pegawai">
                <i class="fa fa-list"></i> <span>Pegawai</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/sekda">
                <i class="fa fa-list"></i> <span>Sekda</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/jabatan">
                <i class="fa fa-list"></i> <span>Jabatan</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/skpd">
                <i class="fa fa-list"></i> <span>SKPD</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/biaya">
                <i class="fa fa-list"></i> <span>Biaya</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/spt">
                <i class="fa fa-list"></i> <span>SPT</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/sppd">
                <i class="fa fa-list"></i> <span>SPPD</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/bendahara">
                <i class="fa fa-list"></i> <span>Bendahara</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/pembayaran">
                <i class="fa fa-list"></i> <span>Pembayaran</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/laporan">
                <i class="fa fa-list"></i> <span>Laporan</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/logout">
                <i class="fa fa-sign-out"></i> <span>Log Out</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>

    </ul>
</section>