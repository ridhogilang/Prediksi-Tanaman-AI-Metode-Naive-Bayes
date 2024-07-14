<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('home/assets/gambar/icon/plant.png') }}" alt="">
        <img class="logo-compact" src="{{ asset('home/assets/gambar/icon/text.png') }}" alt="">
        <img class="brand-title" src="{{ asset('home/assets/gambar/icon/text.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        {{ $title }}
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <div class="input-group search-area d-lg-inline-flex d-none mr-5">
                            <input type="text" class="form-control" placeholder="Search here">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z"
                                            fill="#A4A4A4"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="{{ asset('home/assets/gambar/icon/farmer.png') }}" width="20"
                                alt="" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/" class="dropdown-item ai-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="text-primary"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M506.188 236.413 297.798 26.65c-.267-.27-.544-.532-.826-.786-22.755-20.431-57.14-20.504-79.982-.169-.284.253-.56.514-.829.782L5.872 236.352c-7.818 7.804-7.831 20.467-.028 28.285 7.804 7.818 20.467 7.83 28.284.028L50 248.824v172.684c0 44.112 35.888 80 80 80h72c11.046 0 20-8.954 20-20v-163h70v163c0 11.046 8.954 20 20 20h70c44.112 0 80-35.888 80-80 0-11.046-8.954-20-20-20s-20 8.954-20 20c0 22.056-17.944 40-40 40h-50v-163c0-11.046-8.954-20-20-20H202c-11.046 0-20 8.954-20 20v163h-52c-22.056 0-40-17.944-40-40v-212c0-.2-.003-.399-.009-.597L243.946 55.26a19.984 19.984 0 0 1 25.947.055L422 208.425v113.083c0 11.046 8.954 20 20 20s20-8.954 20-20v-72.82l15.812 15.917A19.934 19.934 0 0 0 492 270.509a19.94 19.94 0 0 0 14.096-5.812c7.836-7.785 7.878-20.448.092-28.284z"
                                            fill="#71c725" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                                <span class="ml-2">Home </span>
                            </a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ml-2">Logout </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('datatraining') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Data Training</span>
                </a>
            </li>
            <li><a href="{{ route('datatesting') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Data Testing User</span>
                </a>
            </li>
            <li><a href="{{ route('registrasi.admin') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Registrasi Admin</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>Prediksi Tanah Admin Dashboard</strong> ©All Rights Reserved</p>
            <p>by Projek Ridho</p>
        </div>
    </div>
</div>
