<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar">
    <ul class="side-menu toggle-menu">
        <li><h3>Main</h3></li>
        <li class="slide">
            <a class="side-menu__item {{ Request::routeIs('admin') ? 'active' : '' }}" href="{{ route('admin') }}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item {{ Request::routeIs('incoming-payment','incoming-request') ? 'active' : '' }}" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Permintaan</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="form-elements.html" class="slide-item">Permintaan Masuk</a></li>
                <li><a href="form-wizard.html" class="slide-item">Pembayaran Masuk</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item {{ Request::routeIs('incoming-payment','incoming-request') ? 'active' : '' }}" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Transaksi</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="form-elements.html" class="slide-item">Peminjaman</a></li>
                <li><a href="form-wizard.html" class="slide-item">Pengembalian</a></li>
            </ul>
        </li>
        <li>
            <a class="side-menu__item {{ Request::routeIs('items.index') ? 'active' : '' }}" href="{{ route('items.index') }}"><i class="side-menu__icon fe fe-codepen"></i><span class="side-menu__label">Barang</span></a>
            <a class="side-menu__item {{ Request::routeIs('items.index') ? 'active' : '' }}" href="{{ route('items.index') }}"><i class="side-menu__icon fe fe-codepen"></i><span class="side-menu__label">Manajemen User</span></a>
        </li>
    </ul>
</aside>
<!--sidemenu end-->
