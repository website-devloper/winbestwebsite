<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
        </nav>
        <div  style="width: 440px" class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 15px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Type here...">
            </div>
            </div>
       
            <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
                <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Sign Out</span>
                </a>
            </li>
            <li  class="nav-item d-flex align-items-center ps-4">
                @if(session('user_email'))
                <p style="margin-top: 18px" class="nav-link text-body font-weight-bold px-0">{{ session('user_email')}}</p>
            @endif
             </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="{{ url('profile') }}" class="nav-link text-body p-0">
                    <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                    <svg style="color: #83898a" height="15px" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" width="15px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M117.488,78.948l-10.427-7.741c0.026-0.158,0.045-0.317,0.07-0.476  c0.011-0.065,0.019-0.131,0.029-0.195c0.102-0.675,0.188-1.349,0.257-2.024c0.004-0.036,0.007-0.07,0.011-0.106  c0.071-0.704,0.125-1.409,0.16-2.114c0.003-0.03,0.004-0.062,0.005-0.092c0.034-0.698,0.053-1.396,0.054-2.094  c0-0.035,0.002-0.07,0.002-0.105c0-0.039-0.002-0.078-0.002-0.117c0-0.152,0.003-0.306,0.001-0.458c-0.001-0.028,0-0.056,0-0.085  c-0.005-0.304-0.018-0.606-0.029-0.91c-0.008-0.188-0.017-0.374-0.026-0.561c-0.02-0.372-0.034-0.744-0.062-1.115  c-0.004-0.038-0.009-0.077-0.011-0.115c-0.009-0.109-0.02-0.219-0.027-0.327c-0.017-0.197-0.04-0.394-0.059-0.591  c-0.005-0.043-0.009-0.086-0.013-0.128c-0.003-0.024-0.005-0.05-0.008-0.074c-0.011-0.099-0.019-0.199-0.029-0.298  c-0.014-0.123-0.021-0.246-0.036-0.368c-0.008-0.064-0.018-0.127-0.024-0.19c-0.009-0.069-0.021-0.14-0.03-0.209  c-0.063-0.507-0.134-1.012-0.216-1.514c-0.007-0.044-0.01-0.088-0.017-0.132l10.441-7.752c2.478-1.43,3.326-4.597,1.896-7.074  l-8.631-14.949c-1.43-2.477-4.598-3.325-7.074-1.895l-11.936,5.167c-0.066-0.055-0.138-0.102-0.204-0.155  c-0.031-0.025-0.061-0.05-0.092-0.075c-0.154-0.125-0.313-0.245-0.47-0.368c-0.171-0.135-0.341-0.268-0.513-0.398  c-0.141-0.107-0.283-0.211-0.424-0.316c-0.065-0.05-0.133-0.099-0.199-0.148c-0.116-0.085-0.229-0.174-0.346-0.258  c-0.064-0.047-0.128-0.093-0.193-0.14c-0.162-0.115-0.326-0.226-0.49-0.339c-0.041-0.028-0.082-0.058-0.124-0.086  c-0.071-0.049-0.143-0.098-0.214-0.146c-0.239-0.163-0.479-0.323-0.721-0.481c-0.027-0.017-0.055-0.034-0.082-0.052  c-0.396-0.256-0.794-0.508-1.198-0.751c-0.103-0.062-0.206-0.12-0.31-0.181c-0.868-0.513-1.752-0.999-2.656-1.451  c-0.018-0.009-0.034-0.017-0.053-0.025c-1.171-0.585-2.373-1.117-3.602-1.598c-0.034-0.013-0.068-0.026-0.102-0.04  c-0.157-0.061-0.313-0.127-0.47-0.187l-1.493-12.922c0.001-2.86-2.317-5.179-5.178-5.179H55.365c-2.86,0-5.178,2.318-5.178,5.179  l-1.493,12.922c-0.07,0.026-0.137,0.056-0.207,0.082c-0.081,0.031-0.163,0.064-0.244,0.097c-0.477,0.185-0.949,0.376-1.417,0.577  c-0.084,0.035-0.168,0.074-0.251,0.11c-0.424,0.185-0.846,0.375-1.264,0.572c-0.044,0.021-0.088,0.043-0.132,0.064  c-0.055,0.026-0.11,0.051-0.165,0.077c-0.153,0.074-0.305,0.15-0.457,0.226c-0.351,0.175-0.698,0.355-1.043,0.54  c-0.25,0.133-0.502,0.264-0.751,0.401c-0.157,0.088-0.311,0.182-0.467,0.271c-0.012,0.006-0.024,0.014-0.036,0.021  c-0.029,0.017-0.06,0.029-0.088,0.046c-0.051,0.029-0.098,0.063-0.148,0.091c-0.565,0.328-1.122,0.669-1.672,1.023  c-0.063,0.04-0.125,0.08-0.187,0.121c-0.063,0.041-0.128,0.082-0.192,0.123c-0.018,0.013-0.037,0.023-0.054,0.035  c-0.47,0.311-0.933,0.632-1.392,0.961c-0.064,0.046-0.129,0.092-0.193,0.139c-0.513,0.372-1.019,0.757-1.517,1.152  c-0.086,0.068-0.173,0.137-0.258,0.206c-0.109,0.089-0.221,0.172-0.329,0.262l-11.92-5.16c-2.477-1.43-5.645-0.581-7.075,1.896  L8.602,41.99c-1.431,2.479-0.581,5.646,1.895,7.076l10.429,7.742c-0.021,0.125-0.036,0.251-0.056,0.376  c-0.022,0.143-0.043,0.285-0.063,0.428c-0.087,0.594-0.164,1.187-0.227,1.78c-0.012,0.117-0.023,0.233-0.035,0.351  c-0.052,0.531-0.096,1.063-0.128,1.594c-0.002,0.041-0.004,0.083-0.006,0.124c-0.003,0.045-0.004,0.09-0.007,0.135  c-0.007,0.117-0.012,0.235-0.018,0.353c-0.028,0.605-0.043,1.211-0.045,1.815c-0.001,0.085-0.007,0.167-0.007,0.252  c0,0.092,0.005,0.185,0.005,0.277c0,0.067-0.001,0.135,0,0.202c0,0.073-0.002,0.146,0,0.22c0.004,0.247,0.015,0.495,0.024,0.742  c0.01,0.321,0.027,0.641,0.044,0.96c0.015,0.269,0.026,0.537,0.046,0.805c0.003,0.038,0.006,0.077,0.008,0.115  c0.01,0.133,0.022,0.266,0.033,0.397c0.014,0.171,0.034,0.341,0.05,0.511c0.037,0.385,0.074,0.769,0.121,1.15  c0,0.005,0.002,0.011,0.002,0.016c0.07,0.569,0.151,1.135,0.244,1.698c0.005,0.032,0.007,0.065,0.013,0.099L10.498,78.95  c-2.478,1.43-3.326,4.597-1.895,7.073l8.63,14.949c1.43,2.478,4.598,3.326,7.074,1.896l11.918-5.156  c0.082,0.068,0.169,0.125,0.251,0.191c0.014,0.013,0.03,0.022,0.044,0.033c0,0.002,0.002,0.002,0.002,0.003  c0.128,0.104,0.26,0.204,0.39,0.307c0.204,0.161,0.408,0.322,0.615,0.479c0.12,0.092,0.241,0.18,0.362,0.271  c0.159,0.118,0.317,0.238,0.478,0.355c0.018,0.013,0.034,0.025,0.051,0.039c0.076,0.055,0.15,0.11,0.227,0.164  c0.185,0.132,0.374,0.259,0.561,0.387c0.016,0.013,0.033,0.023,0.049,0.033c0.074,0.052,0.147,0.103,0.221,0.152  c0.655,0.446,1.321,0.877,2.002,1.287c0.119,0.071,0.238,0.14,0.357,0.208c0.853,0.504,1.723,0.981,2.612,1.428  c0.03,0.016,0.061,0.029,0.091,0.045c1.346,0.67,2.729,1.28,4.149,1.812l1.492,12.904c0,2.859,2.318,5.179,5.179,5.179l17.261,0.001  c2.859-0.001,5.179-2.318,5.179-5.18l1.493-12.906c0.073-0.027,0.143-0.058,0.216-0.085c0.072-0.027,0.144-0.058,0.215-0.086  c0.481-0.186,0.959-0.379,1.432-0.581c0.093-0.039,0.185-0.082,0.277-0.122c0.422-0.185,0.842-0.373,1.256-0.569  c0.039-0.02,0.079-0.039,0.118-0.059c0.003-0.001,0.007-0.003,0.011-0.005c0.044-0.021,0.09-0.04,0.134-0.063  c0.163-0.079,0.326-0.159,0.487-0.24c0.345-0.171,0.685-0.349,1.023-0.529c0.258-0.137,0.516-0.27,0.771-0.411  c0.13-0.072,0.258-0.15,0.387-0.225c0.043-0.024,0.087-0.051,0.13-0.076c0.022-0.012,0.045-0.021,0.066-0.034  c0.038-0.021,0.073-0.046,0.111-0.067c0.588-0.341,1.169-0.696,1.741-1.065c0.042-0.027,0.083-0.055,0.125-0.08  c0.089-0.059,0.179-0.114,0.267-0.173c0.483-0.318,0.961-0.649,1.433-0.988c0.047-0.033,0.092-0.066,0.138-0.101  c0.531-0.385,1.056-0.782,1.57-1.192c0.07-0.055,0.141-0.11,0.209-0.165c0.116-0.096,0.236-0.186,0.352-0.281l11.92,5.159  c2.478,1.431,5.645,0.581,7.074-1.896l8.631-14.948C120.813,83.545,119.965,80.378,117.488,78.948z M64,82.013  c-9.948,0-18.013-8.064-18.013-18.013S54.052,45.986,64,45.986S82.014,54.052,82.014,64S73.948,82.013,64,82.013z" style="fill:#73797a;"/></svg>         
                                                   </a>
            </li>
          
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="my-auto">
                        <img src="../assets/img/" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Marwa
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New user</span> by taha 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->