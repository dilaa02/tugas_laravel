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
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('dashboard-ecommerce-dashboard') }}"
                    class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="nav-item dropdown {{ $type_menu === 'modules' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('modules-chartjs') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('modules-chartjs') }}">ChartJS</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="nav-item {{ Request::is('features-post') ? 'active' : '' }}" >
                <a href="{{ url('features-post') }}"
                    class="nav-link"><i class="fas fa-bicycle"></i> <span>Stock</span></a>
            </li>
        </ul>
    </aside>
</div>
