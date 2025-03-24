
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Reservations</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('booknows.index')}}">Reservations</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                {{-- <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}">
                            table</a></li>
                </ul> --}}

                
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/contacts">Contact</a>
                    </li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('ourteams.create')}}">Our Team</a>
                    </li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('tripcruds.index')}}">ourtripcruds</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>