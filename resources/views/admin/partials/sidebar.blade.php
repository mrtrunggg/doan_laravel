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
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="#">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span>
    </a>
    </li>
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="#">
        <i class="app-menu__icon fa fa-cogs"></i>
            <span class="app-menu__label">Settings</span>
         </a>
    </li>
    <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="#">
        <i class="app-menu__icon fa fa-tags"></i>
        <span class="app-menu__label">Categories</span>
        </a>
    </li>
</ul>
</aside>