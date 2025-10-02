@php
$dashboardRoutes = ['portal.dashboard'];
$settingRoutes = ['portal.setting.profile', 'portal.setting.notification'];
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('portal.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- SVG logo remains unchanged -->
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">TylaTwist</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ areActiveRoutes($dashboardRoutes, 'active open') }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboards</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ isActiveRoute('portal.dashboard') }}">
                    <a href="{{ route('portal.dashboard') }}" class="menu-link">
                        <div class="text-truncate">Main Dashboard</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="text-truncate">Analytics</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Chat -->
        <!-- <li class="menu-item {{ request()->is('portal/chat') ? 'active' : '' }}">
            <a href="{{ url('portal/chat') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div class="text-truncate">Chat</div>
            </a>
        </li> -->

        <!-- Help -->
        <!-- <li class="menu-item">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-help-circle"></i>
                <div class="text-truncate">Help</div>
            </a>
        </li> -->

        <!-- Support -->
        <!-- <li class="menu-item">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate">Support</div>
            </a>
        </li> -->

        <li class="menu-item {{ isActiveRoute('portal.referral.index') }}">
            <a href="{{ route('portal.referral.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div class="text-truncate">Referral</div>
            </a>
        </li>
        <li class="menu-item {{ isActiveRoute('portal.profile') }}">
            <a href="{{ route('portal.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div class="text-truncate">Profile</div>
            </a>
        </li>

        <!-- Settings -->
        <li class="menu-item {{ areActiveRoutes($settingRoutes, 'active open') }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div class="text-truncate">Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ isActiveRoute('portal.setting.profile') }}">
                    <a href="{{ route('portal.setting.profile') }}" class="menu-link">
                        <div class="text-truncate">Profile Setting</div>
                    </a>
                </li>
                <li class="menu-item {{ isActiveRoute('portal.setting.notification') }}">
                    <a href="{{ route('portal.setting.notification') }}" class="menu-link">
                        <div class="text-truncate">Notification Setting</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Logout -->
        <li class="menu-item">
            <a href="{{ route('portal.logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
                <div class="text-truncate">Logout</div>
            </a>
        </li>
    </ul>
</aside>