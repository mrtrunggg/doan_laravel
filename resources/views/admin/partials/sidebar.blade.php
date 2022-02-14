<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
<div class="app-sidebar__user">
    <div>
    <p class="app-sidebar__user-name">John Doe</p>
    <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
</div>
<ul class="app-menu">
    <li>
        <a class="app-menu__item" href={{route('admin.dashboard')}}>
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span>
    </a>
    </li>
    
    <li>
        <a class="app-menu__item" href= {{route('sanpham')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Sản phẩm</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('loaisanpham')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Loại sản phẩm</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('nhacungcap')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Nhà cung cấp</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('nhanvien')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Nhân viên</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('indexKH')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Khách hàng</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('indexTk')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Tài khoản</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('indexHDN')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Hóa đơn nhập</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('indexCTHDN')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Chi tiết hóa đơn nhập</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item" href= {{route('indexHDB')}}>
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Hoá đơn bán</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="#">
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Settings</span>
         </a>
    </li>   
</ul>
</aside>