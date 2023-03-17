<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    {{ Auth::user()->name}}
                    {{-- <img src="{{asset('admin/images//icon/logo.png')}}" alt="Cool Admin" /> --}}
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{ route ('home')}}">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route ('book.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Books</a>
                        </li>
                        <li>
                            <a href="{{ route ('contacts.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Contacts Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
