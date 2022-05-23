<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none"><a class="navbar-brand me-lg-5"
        href="{{ route('index') }}"><img class="navbar-brand-dark"
            src="{{ asset('admin/assets/img/brand/light.svg') }}" alt="Volt logo"> <img class="navbar-brand-light"
            src="{{ asset('admin/assets/img/brand/dark.svg') }}" alt="Volt logo"></a>
    <div class="d-flex align-items-center"><button class="navbar-toggler d-lg-none collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4"><img src="{{ asset('admin/assets/img/team/profile-picture-3.jpg') }}"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2><a href="#"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center"><svg
                            class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg> Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none"><a href="#sidebarMenu" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation"><svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></a></div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up-left me-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z"/>
                        <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z"/>
                      </svg>
                        <span class="mt-1 sidebar-text">Sitega O'tish</span></a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700">

            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('aboutAdmin')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-file-person-fill me-2" viewBox="0 0 16 16">
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                            </svg>
                        </span>
                        <span class="sidebar-text">About</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('resumeAdmin')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                           
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-workspace me-2" viewBox="0 0 16 16">
                                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                              </svg>
                        </span>
                        <span class="sidebar-text">Resume</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('workAdmin')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-minus-fill me-2" viewBox="0 0 16 16">
                                <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1Z"/>
                              </svg>
                        </span>
                        <span class="sidebar-text">Work</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('blogAdmin')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-collection me-2" viewBox="0 0 16 16">
                                <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
                              </svg>
                        </span>
                        <span class="sidebar-text">Blog</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('contactAdmin')}}" class="nav-link d-flex align-items-center justify-content-between">
                    <span class="flex">
                        <span class="sidebar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill me-2" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                              </svg>
                        </span>
                        <span class="sidebar-text">Contact</span>
                    </span>
                </a>
            </li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700">
            </li>

            <li class="nav-item">
                <a href="{{route('profileAdmin')}}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon icon-xs-person me-2"
                            viewBox="0 0 20 20">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Profile
                    </span></a>
            </li>
        </ul>
    </div>
</nav>
