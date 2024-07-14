<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Evergreen</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Eve</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ url('dashboard-ecommerce-dashboard') }}"
                    class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Pages</li>
            <li class="nav-item {{ Request::is('features-post') ? 'active' : '' }}" >
                <a href="{{ url('features-post') }}"
                    class="nav-link"><i class="fas fa-bicycle"></i> <span>Stock</span></a>
            </li>
        </ul>
    </aside>
</div>
