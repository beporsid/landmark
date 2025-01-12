<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.0
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
@include('layouts.partials.admin.head')
<body>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));
    //]]></script>

@include('layouts.partials.admin.sidebar')
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
                </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg>
            </a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                        </svg>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                        </svg>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                        </svg>
                    </a></li>
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                                                 role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md">
                            welcome {{\Illuminate\Support\Facades\Auth::user()->name ?? ''}}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                            </svg>
                            Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item"
                                                                                             href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                            </svg>
                            Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item"
                                                                                                 href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                            </svg>
                            Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item"
                                                                                             href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                            </svg>
                            Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                            </svg>
                            Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                            </svg>
                            Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                            </svg>
                            Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item"
                                                                                                   href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                            </svg>
                            Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                            </svg>
                            Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                            </svg>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <!-- if breadcrumb is single--><span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                </ol>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> &copy; 2021
            creativeLabs.
        </div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI
                Components</a></div>
    </footer>
</div>
<!-- CoreUI and necessary plugins-->
{{--<script src="/node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>--}}
{{--<script src="/node_modules/simplebar/dist/simplebar.min.js"></script>--}}
<script src="{{asset('/vendor/coreui.bundle.min.js')}}"></script>
<script src="{{asset('/vendor/simplebar.min.js')}}"></script>
<!-- We use those scripts to show code examples, you should remove them in your application.-->
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

<script src="{{asset('/js/app.js')}}"></script>

{{--<script src="/node_modules/chart.js/dist/chart.min.js"></script>--}}
{{--<script src="/node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>--}}
{{--<script src="/node_modules/@coreui/utils/dist/coreui-utils.js"></script>--}}


</body>
</html>
