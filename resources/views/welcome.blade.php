<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bhutan</title>

        <link rel="icon" href="{{ url('img/logo1.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper" id="app">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <router-link to="/" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <router-link to="/contact" class="nav-link">Contact</router-link>
                    </li>
                </ul>
            </nav>


            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <router-link to="/" class="brand-link text-decoration-none">
                    <img src="./img/logo1.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Bhutan</span>
                </router-link>

                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <router-link to="/" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                    Details
                                    </p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/report" class="nav-link">
                                <i class="fas fa-users nav-icon green"></i>
                                <p>Report</p>
                                </router-link>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <router-view />
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <strong>Copyright &copy; 2022 <a class="text-decoration-none" href="#">nyuethyue.io</a>.</strong> All rights reserved.
            </footer>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>