        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="dashboard/crm-index.html" class="logo">
                    <span>
                        <img src="{{ asset('admin/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{ asset('admin/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ asset('admin/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="{{ route('dashboard') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="{{ route('chats') }}"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Chat</span><span class="menu-arrow"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
