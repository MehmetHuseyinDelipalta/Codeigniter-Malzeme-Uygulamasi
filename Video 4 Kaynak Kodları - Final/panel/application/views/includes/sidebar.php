<!-- BEGIN SIDEBAR -->
<div class="sidebar-scroll">
    <div id="sidebar" class="nav-collapse collapse">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search" />
            </form>
        </div>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li class="sub-menu">
                <a class="" href="index.html">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="" href="<?php echo base_url("category"); ?>">
                    <i class="icon-tasks"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="" href="<?php echo base_url("supplier"); ?>">
                    <i class="icon-user"></i>
                    <span>Tedarikçi</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="" href="<?php echo base_url("product"); ?>">
                    <i class="icon-print"></i>
                    <span>Ürünler</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-tags"></i>
                    <span>Giriş - Çıkış İşlemleri</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo base_url("purchase"); ?>"> <i class="icon-chevron-right"></i> Alış
                            İşlemi</a></li>
                    <li><a class="" href="#"> <i class="icon-chevron-right"></i>Satış İşlemi</a></li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->