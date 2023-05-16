<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : ' ' }}"
                    href="/dashboard/products">
                    <span data-feather="file-text"></span>
                    Produk
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ' ' }}"
                    href="/dashboard/categories">
                    <span data-feather="list"></span>
                    Kategori
                </a>
            </li> --}}
            <hr>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-5 bg-light border-0">Keluar
                        <span data-feather="log-out"></span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
