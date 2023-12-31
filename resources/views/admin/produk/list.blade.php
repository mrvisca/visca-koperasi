<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Visca Koperasi - Master Produk</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <style>
            #data-table_info {
                color: white; /* Mengatur warna font menjadi putih */
            }
            #data-table_length,
            #data-table_filter {
                color: white;      /* Mengatur warna teks menjadi putih */
            }
            /* Custom DataTables Styling */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current,
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: #000 !important;
                background-color: #007bff !important; /* Ganti dengan warna latar belakang yang diinginkan */
                border-color: #007bff !important;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
                color: #495057 !important;
                background-color: #e9ecef !important; /* Ganti dengan warna latar belakang yang diinginkan */
                border-color: #dee2e6 !important;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button {
                color: #007bff !important; /* Ganti dengan warna teks yang diinginkan */
                background-color: #000 !important;
                border-color: #007bff !important;
            }

            .dataTables_empty {
                color: black !important; /* Gunakan !important jika diperlukan untuk mengatasi kelebihan lainnya */
            }

        </style>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-2 py-5 hidden">
                <li>
                    <a href="{{ route('dashboard') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('masteradmin') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="user-check"></i> </div>
                        <div class="menu__title"> Master Admin </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('masteremployee') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="user"></i> </div>
                        <div class="menu__title"> Master Pegawai </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="user"></i> </div>
                        <div class="menu__title"> Master Nasabah </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Master Role </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="menu__title"> Master Presensi Pegawai </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Master Promo </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Pengaturan <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="key"></i> </div>
                                <div class="menu__title"> Password App </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="image"></i> </div>
                                <div class="menu__title"> App logo + Nama </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="list"></i> </div>
                                <div class="menu__title"> Kategori Nasabah </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="truck"></i> </div>
                                <div class="menu__title"> Barang Jaminan </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produkkategori') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="list"></i> </div>
                                <div class="menu__title"> Kategori Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('unitsatuan') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="command"></i> </div>
                                <div class="menu__title"> Satuan Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="award"></i> </div>
                                <div class="side-menu__title"> Point Nasabah </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__devider my-6"></li>
                <center><b>Customer Service</b></center>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="menu__title"> Presensi </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title">Data Nasabah </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="book-open"></i> </div>
                        <div class="menu__title"> Transaksi <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="menu__title"> Transaksi Simpanan </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="menu__title"> Transaksi Pinjaman </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="menu__title"> Data Penugasan DC </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('masterproduk') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="package"></i> </div>
                        <div class="menu__title"> Data Produk </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="package"></i> </div>
                        <div class="menu__title"> Stockist Koperasi </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title">Data Nasabah </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="book-open"></i> </div>
                        <div class="menu__title"> Transaksi Koperasi <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="menu__title"> Penjualan Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="menu__title"> Pembelian Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="rewind"></i> </div>
                                <div class="menu__title"> Retur Produk </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="repeat"></i> </div>
                        <div class="menu__title"> Arus Kas </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="book-open"></i> </div>
                        <div class="menu__title"> Laporan Koperasi <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="menu__title"> Penjualan Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="menu__title"> Pembelian Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="rewind"></i> </div>
                                <div class="menu__title"> Retur Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="repeat"></i> </div>
                                <div class="menu__title"> Arus Kas </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="shopping-bag"></i> </div>
                        <div class="menu__title"> Kasir Koperasi </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="shopping-bag"></i> </div>
                        <div class="menu__title"> Data Jaminan Pinjaman </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>
                <center><b>Dept Collection</b></center>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="menu__title"> Data Presensi </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="menu__title"> Tugas <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-feather="search"></i> </div>
                                <div class="menu__title"> Survei Lapangan </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                                <div class="menu__title"> Penagihan Pinjaman </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__devider my-6"></li>
                <center><b>Nasabah</b></center>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="book-open"></i> </div>
                        <div class="menu__title"> Transaksi <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-feather="download"></i> </div>
                                <div class="menu__title"> Simpanan </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                                <div class="menu__title"> Pinjaman </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu">
                                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="menu__title"> Pembelian Produk </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-feather="user-plus"></i> </div>
                        <div class="menu__title"> Royalty Fee </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> <span class="font-medium">Visca Koperasi</span> </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"> <a href="">Aplikasi</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Master Admin</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-13.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Hugh Jackman</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-9.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-10.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-3.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-12.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-13.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                <div class="font-medium nama-akun"></div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600 role-akun"></div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600 codeblue">Hallo</div>
                            </div>
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </div>
                            <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('masteradmin') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                                <div class="side-menu__title"> Master Admin </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('masteremployee') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                <div class="side-menu__title"> Master Pegawai </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                <div class="side-menu__title"> Master Nasabah </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                <div class="side-menu__title"> Master Role </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title"> Master Presensi Pegawai </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                                <div class="side-menu__title"> Master Promo </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="tool"></i> </div>
                                <div class="side-menu__title">
                                    Pengaturan
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="key"></i> </div>
                                        <div class="side-menu__title"> Password App </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="image"></i> </div>
                                        <div class="side-menu__title"> App logo + Nama </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                        <div class="side-menu__title"> Kategori Nasabah </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="truck"></i> </div>
                                        <div class="side-menu__title"> Barang Jaminan </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('produkkategori') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Kategori Produk </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('unitsatuan') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="command"></i> </div>
                                        <div class="side-menu__title"> Satuan Produk </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="award"></i> </div>
                                        <div class="side-menu__title"> Point Nasabah </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <center><b>Customer Service</b></center>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Presensi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                                <div class="side-menu__title">
                                    Data Nasabah
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="book-open"></i> </div>
                                <div class="side-menu__title">
                                    Transaksi
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                        <div class="side-menu__title">
                                            Transaksi Simpanan
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                        <div class="side-menu__title">
                                            Transaksi Pinjaman
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                                <div class="side-menu__title">
                                    Data Penugasan DC
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('masterproduk') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="package"></i> </div>
                                <div class="side-menu__title">
                                    Data Produk
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="package"></i> </div>
                                <div class="side-menu__title">
                                    Stockist Koperasi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="book-open"></i> </div>
                                <div class="side-menu__title">
                                    Transaksi Koperasi
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                        <div class="side-menu__title">
                                            Penjualan Produk
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                        <div class="side-menu__title">
                                            Pembelian Produk
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="rewind"></i> </div>
                                        <div class="side-menu__title">
                                            Retur Produk
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="repeat"></i> </div>
                                <div class="side-menu__title">
                                    Arus Kas
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="book-open"></i> </div>
                                <div class="side-menu__title">
                                    Laporan Koperasi
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                        <div class="side-menu__title">
                                            Penjualan Produk
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                        <div class="side-menu__title">
                                            Pembelian Produk
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="rewind"></i> </div>
                                        <div class="side-menu__title">
                                            Retur Produk
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="repeat"></i> </div>
                                        <div class="side-menu__title">
                                            Arus Kas
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                                <div class="side-menu__title">
                                    Kasir Koperasi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                                <div class="side-menu__title">
                                    Data Jaminan Pinjaman
                                </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <center><b>Dept Collection</b></center>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Data Presensi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Tugas
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="search"></i> </div>
                                        <div class="side-menu__title"> Survei Lapangan </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                                        <div class="side-menu__title"> Penagihan Pinjaman </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <center><b>Nasabah</b></center>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="book-open"></i> </div>
                                <div class="side-menu__title">
                                    Transaksi
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="download"></i> </div>
                                        <div class="side-menu__title"> Simpanan </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                                        <div class="side-menu__title"> Pinjaman </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                        <div class="side-menu__title"> Pembelian Produk </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user-plus"></i> </div>
                                <div class="side-menu__title">
                                    Royalti fee
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            List Master Produk
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <button class="btn btn-primary shadow-md mr-2 tambah-admin">Tambah Data</button>
                        </div>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-5 mt-5">
                        <div class="overflow-x-auto scrollbar-hidden">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">ID</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Nama</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Variant</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Kode</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Photo</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Harga</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
                <!-- BEGIN: Modal Create Data Content -->
                <div id="modal-create" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- BEGIN: Modal Header -->
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">
                                    Form Tambah Produk
                                </h2>
                                <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            </div>
                            <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Kategori</label>
                                    <select id="kategori" class="form-select frm-category_id" required>
                                        <option disabled selected> --- Pilih Kategori --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-1" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control frm-nama" placeholder="Sosis Kenzler" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="fileInput" class="form-label">Variant</label>
                                    <input type="text" class="form-control frm-variant" placeholder="Daging Kebo" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Kode Produk</label>
                                    <input type="text" class="form-control frm-kode-produk" placeholder="071095951007" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Batas Kadaluarsa</label>
                                    <input type="text" class="form-control frm-expired" placeholder="2023-12-31" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Stock Produk</label>
                                    <input type="number" class="form-control frm-stock" placeholder="50" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Harga Modal</label>
                                    <input type="number" class="form-control frm-modal" placeholder="10000" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Harga Jual</label>
                                    <input type="number" class="form-control frm-harga_jual" placeholder="15000" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Satuan Beli</label>
                                    <select id="satuan-beli" class="form-select frm-satuan-beli" required>
                                        <option disabled selected> --- Pilih Satuan Pembelian --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Satuan Jual</label>
                                    <select id="satuan-jual" class="form-select frm-satuan-jual" required>
                                        <option disabled selected> --- Pilih Satuan Penjualan --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Deskripsi</label>
                                    <textarea id="update-profile-form-5" class="form-control frm-desc" placeholder="Jagung rebus, direbus dengan bahan asli" required></textarea>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="fileInput" class="form-label">Foto Produk</label>
                                    <input type="file" class="form-control" id="fileInput" required>
                                </div>
                            </div>
                            <!-- END: Modal Body -->
                            <!-- BEGIN: Modal Footer -->
                            <div class="modal-footer text-right">
                                <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                <button type="button" class="btn btn-primary w-20 btn-simpan">Simpan</button>
                            </div>
                            <!-- END: Modal Footer -->
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Create Sukses Content -->
                <div id="success-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Tambah Data Produk Berhasil!</div>
                                    <div class="text-gray-600 mt-2 pesan-sukses"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Create Gagal Content -->
                <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Oops...Tambah Data Produk Gagal!</div>
                                    <div class="text-gray-600 mt-2 pesan-gagal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Update Content -->
                <div id="modal-update" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- BEGIN: Modal Header -->
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">
                                    Form Update Produk
                                </h2>
                                <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                            </div>
                            <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Kategori</label>
                                    <input type="hidden" class="form-control updt-id" required>
                                    <select id="kategori-updt" class="form-select updt-category_id" required>
                                        <option disabled selected> --- Pilih Kategori --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-1" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control updt-nama" placeholder="Sosis Kenzler" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="fileInput" class="form-label">Variant</label>
                                    <input type="text" class="form-control updt-variant" placeholder="Daging Kebo" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Kode Produk</label>
                                    <input type="text" class="form-control updt-kode-produk" placeholder="071095951007" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Batas Kadaluarsa</label>
                                    <input type="text" class="form-control updt-expired" placeholder="2023-12-31" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Stock Produk</label>
                                    <input type="number" class="form-control updt-stock" placeholder="50" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Harga Modal</label>
                                    <input type="number" class="form-control updt-modal" placeholder="10000" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Harga Jual</label>
                                    <input type="number" class="form-control updt-harga_jual" placeholder="15000" required>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Satuan Beli</label>
                                    <select id="satuan-beli-updt" class="form-select updt-satuan-beli" required>
                                        <option disabled selected> --- Pilih Satuan Pembelian --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Satuan Jual</label>
                                    <select id="satuan-jual-updt" class="form-select updt-satuan-jual" required>
                                        <option disabled selected> --- Pilih Satuan Penjualan --- </option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="modal-form-2" class="form-label">Deskripsi</label>
                                    <textarea id="update-profile-form-5" class="form-control updt-desc" placeholder="Jagung rebus, direbus dengan bahan asli" required></textarea>
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="fileInput" class="form-label">Foto Produk</label>
                                    <input type="file" class="form-control" id="fileInput1" required>
                                </div>
                            </div>
                            <!-- END: Modal Body -->
                            <!-- BEGIN: Modal Footer -->
                            <div class="modal-footer text-right">
                                <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                <button type="button" class="btn btn-primary w-20 btn-update">Update</button>
                            </div>
                            <!-- END: Modal Footer -->
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Update Sukses Content -->
                <div id="success-update-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Update Data Produk Berhasil!</div>
                                    <div class="text-gray-600 mt-2 update-sukses"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Update Gagal Content -->
                <div id="warning-update-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Oops...Update Data Produk Gagal!</div>
                                    <div class="text-gray-600 mt-2 update-gagal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Delete Content -->
                <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-24 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Apa kamu yakin ingin hapus data produk ini?</div>
                                    <div class="text-gray-600 mt-2">
                                        Apa kamu yakin akan menghapus data produk ini?
                                        <br>
                                        Data yang dihapus tidak akan bisa dikembalikan.
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Batalkan</button>
                                    <button type="button" class="btn btn-danger w-24 hapus-btn">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Hapus Sukses Content -->
                <div id="success-hapus-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Hapus Data Produk Berhasil!</div>
                                    <div class="text-gray-600 mt-2 hapus-sukses"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Hapus Gagal Content -->
                <div id="warning-hapus-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Oops...Hapus Data Produk Gagal!</div>
                                    <div class="text-gray-600 mt-2 hapus-gagal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Verifikasi Sukses Content -->
                <div id="success-verifikasi-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Verifikasi Email Pegawai Berhasil!</div>
                                    <div class="text-gray-600 mt-2 verifikasi-sukses"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
                <!-- BEGIN: Modal Verifikasi Gagal Content -->
                <div id="warning-verifikasi-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Oops...Verifikasi akun pegawai gagal!</div>
                                    <div class="text-gray-600 mt-2 verifikasi-gagal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Content -->
            </div>
            <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <script>
            // cek package jquery
            $(document).ready(function(){
                // Fungsi untuk mendapatkan nilai cookie
                function getCookie(name) {
                    var cookieName = name + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var cookieArray = decodedCookie.split(';');

                    for (var i = 0; i < cookieArray.length; i++) {
                        var cookie = cookieArray[i];
                        while (cookie.charAt(0) === ' ') {
                            cookie = cookie.substring(1);
                        }
                        if (cookie.indexOf(cookieName) === 0) {
                            return cookie.substring(cookieName.length, cookie.length);
                        }
                    }
                }

                var token = getCookie('token');

                if (token) {
                    // Token ada dalam cookie, lakukan tindakan yang sesuai
                    console.log('Token:', token);
                } else {
                    window.location.href = "{{ route('login') }}";
                }

                // Hide Element
                $('.codeblue').hide();
                $('.khusus1').hide();
                $('.khusus2').hide();

                var url = '{{ env('BASE_URL') }}api/dashboard/home';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {

                    $('.nama-akun').text(data.name);
                    $('.role-akun').text(data.jabatan);
                    $('.codeblue').text(data.kode);

                }).catch(error => {
                    console.error('Error:', error);
                });

                // Panggil data support satuan
                var url = '{{ env('BASE_URL') }}api/master-produk/list-support/satuan';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {

                    // Terapkan ke satuan pembelian dan penjualan create
                    var select = $('#satuan-beli');
                    var selectJual = $('#satuan-jual');

                    // Terapkan ke satuan pembelian dan penjualan update
                    var selectUpdt = $('#satuan-beli-updt');
                    var selectJualUpdt = $('#satuan-jual-updt');

                    // Iterasi melalui data dan membuat opsi baru untuk setiap entri
                    $.each(data, function(index, item) {
                        for (let i = 0; i < item.length; i++) {
                            select.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                            selectJual.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                            selectUpdt.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                            selectJualUpdt.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                        }
                    });

                }).catch(error => {
                    console.error('Error:', error);
                });

                // Panggil data support kategori produk
                var url = '{{ env('BASE_URL') }}api/master-produk/list-support/kategori';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {

                    // Terapkan ke satuan pembelian form create
                    var select = $('#kategori');

                    // Terapkan ke satuan pembelian form create
                    var selectUpdtKat = $('#kategori-updt');

                    // Iterasi melalui data dan membuat opsi baru untuk setiap entri
                    $.each(data, function(index, item) {
                        for (let i = 0; i < item.length; i++) {
                            select.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                            selectUpdtKat.append('<option value="' + item[i].id + '"> ' + item[i].name + ' </option>');
                        }
                    });

                }).catch(error => {
                    console.error('Error:', error);
                });

                // Modal Tambah data admin
                $(".tambah-admin").click(function() {
                    // Show the modal
                    cash("#modal-create").modal("show");
                });

                // Fungsi tombol simpan
                $(".btn-simpan").click(function() {
                    // Show the modal
                    event.preventDefault(); // Prevent default form submission

                    // Get form data
                    var category_id = $(".frm-category_id").val();
                    var nama = $(".frm-nama").val();
                    var variant = $(".frm-variant").val();
                    var kode = $(".frm-kode-produk").val();
                    var expired = $(".frm-expired").val();
                    var stock = $(".frm-stock").val();
                    var modal = $(".frm-modal").val();
                    var harga_jual = $(".frm-harga_jual").val();
                    var satuan_beli = $(".frm-satuan-beli").val();
                    var satuan_jual = $(".frm-satuan-jual").val();
                    var deskripsi = $(".frm-desc").val();
                    var inp = $('#fileInput')[0];
                    var foto = inp.files[0];

                    if (foto) {
                        var formData = new FormData();
                        formData.append('category_id', category_id);
                        formData.append('nama', nama);
                        formData.append('variant', variant);
                        formData.append('kode', kode);
                        formData.append('expired', expired);
                        formData.append('stock', stock);
                        formData.append('modal', modal);
                        formData.append('harga_jual', harga_jual);
                        formData.append('satuan_beli', satuan_beli);
                        formData.append('satuan_jual', satuan_jual);
                        formData.append('deskripsi', deskripsi);
                        formData.append('foto', foto);

                        // Kirim permintaan pembaruan produk ke API
                        $.ajax({
                            url: '{{ env('BASE_URL') }}api/master-produk/tambah-produk',
                            type: 'POST',
                            headers: {
                                "Authorization": "Bearer " + token
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                // Show the modal
                                $('.pesan-sukses').text(response.message);
                                cash("#success-modal-preview").modal("show");

                                setTimeout(function() {
                                    cash("#success-modal-preview").modal("hide");

                                    location.reload();
                                }, 3000); // 3000 milliseconds = 3 seconds
                            },
                            error: function(xhr, status, error) {
                                // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                console.log(error);

                                // Tampilkan pesan kesalahan yang dikirim oleh server
                                var response = JSON.parse(xhr.responseText);
                                if (response.success === false && response.message) {
                                    $('.pesan-gagal').text(response.message);
                                    cash("#warning-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#warning-modal-preview").modal("hide");

                                        location.reload();
                                    }, 5000); // 5000 milliseconds = 5 seconds
                                } else {
                                    // Tangani kesalahan lainnya jika ada
                                    // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                    alert('Terjadi kesalahan lainnya: ' + error);
                                }
                            }
                        });
                    }else{
                        var formData = new FormData();
                        formData.append('nama', nama);
                        formData.append('variant', variant);
                        formData.append('kode', kode);
                        formData.append('expired', expired);
                        formData.append('stock', stock);
                        formData.append('modal', modal);
                        formData.append('harga_jual', harga_jual);
                        formData.append('satuan_beli', satuan_beli);
                        formData.append('satuan_jual', satuan_jual);
                        formData.append('deskripsi', deskripsi);
                        formData.append('foto', '');

                        // Kirim permintaan pembaruan produk ke API
                        $.ajax({
                            url: '{{ env('BASE_URL') }}api/master-produk/tambah-produk',
                            type: 'POST',
                            headers: {
                                "Authorization": "Bearer " + token
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                // Show the modal
                                $('.pesan-sukses').text(response.message);
                                cash("#success-modal-preview").modal("show");

                                setTimeout(function() {
                                    cash("#success-modal-preview").modal("hide");

                                    location.reload();
                                }, 3000); // 3000 milliseconds = 3 seconds
                            },
                            error: function(xhr, status, error) {
                                // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                console.log(error);

                                // Tampilkan pesan kesalahan yang dikirim oleh server
                                var response = JSON.parse(xhr.responseText);
                                if (response.success === false && response.message) {
                                    $('.pesan-gagal').text(response.message);
                                    cash("#warning-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#warning-modal-preview").modal("hide");

                                        location.reload();
                                    }, 5000); // 5000 milliseconds = 5 seconds
                                } else {
                                    // Tangani kesalahan lainnya jika ada
                                    // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                    alert('Terjadi kesalahan lainnya: ' + error);
                                }
                            }
                        });
                    }
                });

                // Get data produk dengan datatable serverside
                $('#data-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": '{{ env('BASE_URL') }}api/master-produk/list',
                        "dataType": "json",
                        "type": "POST",
                        "headers": {
                            'Authorization': 'Bearer ' + token
                        }
                    },
                    "columns": [
                        { data: 'id', className: ' border-b border-gray-600 text-center' },
                        { data: 'nama', className: 'border-b border-gray-600 text-center' },
                        { data: 'variant', className: 'border-b border-gray-600 text-center' },
                        { data: 'kode', className: 'border-b border-gray-600 text-center' },
                        {
                            data: 'foto',
                            className: 'border-b border-gray-600 text-center',
                            render: function (data, type, row) {
                                if (data) {
                                    return '<img src="' + data + '" alt="Gambar" width="50" data-action="zoom" class="w-full rounded-md">';
                                } else {
                                    return ''; // Atau tampilkan placeholder gambar kosong jika 'foto' tidak ada
                                }
                            }
                        },
                        { data: 'harga_jual', className: 'border-b border-gray-600 text-center' },
                        {
                            data: null,
                            render: function (data, type, row) {

                                // Jika akun sudah diverifikasi
                                var editBtn = '<button class="btn btn-primary btn-edit" data-id="' + data.id + '" data-nama="' + data.nama + '" data-variant="' + data.variant + '" data-kode="' + data.kode + '" data-expired="' + data.expired + '" data-stock="' + data.stock + '" data-modal="' + data.modal + '" data-harga_jual="' + data.harga_jual + '" data-category_id="' + data.category_id + '" data-satuan_jual="' + data.satuan_jual + '" data-satuan_beli="' + data.satuan_beli + '" data-deskripsi="' + data.deskripsi + '"><i data-feather="edit" class="w-4 h-4"></i></button>';
                                var deleteBtn = '<button class="btn btn-danger btn-delete" data-id="' + data.id + '"><i data-feather="trash-2" class="w-4 h-4"></i></button>';

                                // Combine the buttons
                                var actions = editBtn + '  ||  ' + deleteBtn;
                                return actions;
                            }
                        }
                    ],
                    "drawCallback": function( settings ) {
                        feather.replace();
                    },
                        "createdRow": function (row, data, dataIndex) {
                        // Add a custom class to each row
                        $(row).addClass('bg-gray-700 dark:bg-dark-1 text-white');
                    }
                });

                // Passing data list row ke dalam modal update
                $('#data-table').on('click', '.btn-edit', function() {
                    cash("#modal-update").modal("show");
                    var id = $(this).attr("data-id");
                    var nama = $(this).attr("data-nama");
                    var variant = $(this).attr("data-variant");
                    var kode = $(this).attr("data-kode");
                    var expired = $(this).attr("data-expired");
                    var stock = $(this).attr("data-stock");
                    var modal = $(this).attr("data-modal");
                    var harga_jual = $(this).attr("data-harga_jual");
                    var category_id = $(this).attr("data-category_id");
                    var satuan_jual = $(this).attr("data-satuan_jual");
                    var satuan_beli = $(this).attr("data-satuan_beli");
                    var deskripsi = $(this).attr("data-deskripsi");

                    // Handle edit action
                    $('.updt-id').val(id);
                    $('.updt-category_id').val(category_id);
                    $('.updt-nama').val(nama);
                    $('.updt-variant').val(variant);
                    $('.updt-kode-produk').val(kode);
                    $('.updt-expired').val(expired);
                    $('.updt-stock').val(stock).prop('disabled',true);
                    $('.updt-modal').val(modal);
                    $('.updt-harga_jual').val(harga_jual);
                    $('.updt-satuan-beli').val(satuan_beli);
                    $('.updt-satuan-jual').val(satuan_jual);
                    $('.updt-desc').val(deskripsi);
                });

                // Fungsi Tombol hapus
                $('#data-table').on('click', '.btn-delete', function() {
                    var id = $(this).attr("data-id");
                    cash("#delete-modal-preview").modal("show");
                    $('.hapus-btn').click(function() {
                        // Ajax delete Api
                        $.ajax({
                            url: '{{ env('BASE_URL') }}api/master-produk/hapus-produk/' + id,
                            type: 'DELETE',
                            headers: {
                                'Authorization': 'Bearer ' + token
                            },
                            success: function(response) {
                                    // Show the modal
                                    $('.hapus-sukses').text(response.message);
                                    cash("#success-hapus-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#success-hapus-modal-preview").modal("hide");

                                        location.reload();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                },
                                error: function(xhr, status, error) {
                                    // Show error alert
                                    $('.hapus-gagal').text(response.message);
                                    cash("#warning-hapus-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#warning-update-modal-preview").modal("hide");

                                        location.reload();
                                    }, 5000); // 3000 milliseconds = 3 seconds
                                }
                        });
                    });
                });

                // Tombol Update Admin
                $(".btn-update").click(function() {
                    // Get form data
                    var id = $(".updt-id").val();
                    var category_id = $(".updt-category_id").val();
                    var nama = $(".updt-nama").val();
                    var variant = $(".updt-variant").val();
                    var kode = $(".updt-kode-produk").val();
                    var expired = $(".updt-expired").val();
                    var modal = $(".updt-modal").val();
                    var harga_jual = $(".updt-harga_jual").val();
                    var satuan_beli = $(".updt-satuan-beli").val();
                    var satuan_jual = $(".updt-satuan-jual").val();
                    var deskripsi = $(".updt-desc").val();
                    var inp = $('#fileInput1')[0];
                    var foto = inp.files[0];

                    if (foto) {
                        var formData = new FormData();
                        formData.append('id', id);
                        formData.append('category_id', category_id);
                        formData.append('nama', nama);
                        formData.append('variant', variant);
                        formData.append('kode', kode);
                        formData.append('expired', expired);
                        formData.append('modal', modal);
                        formData.append('harga_jual', harga_jual);
                        formData.append('satuan_beli', satuan_beli);
                        formData.append('satuan_jual', satuan_jual);
                        formData.append('deskripsi', deskripsi);
                        formData.append('foto', foto);

                        // Kirim permintaan pembaruan produk ke API
                        $.ajax({
                            url: '{{ env('BASE_URL') }}api/master-produk/update-produk',
                            type: 'POST',
                            headers: {
                                "Authorization": "Bearer " + token
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                // Show the modal
                                $('.update-sukses').text(response.message);
                                cash("#success-update-modal-preview").modal("show");

                                setTimeout(function() {
                                    cash("#success-update-modal-preview").modal("hide");

                                    location.reload();
                                }, 3000); // 3000 milliseconds = 3 seconds
                            },
                            error: function(xhr, status, error) {
                                // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                console.log(error);

                                // Tampilkan pesan kesalahan yang dikirim oleh server
                                var response = JSON.parse(xhr.responseText);
                                if (response.success === false && response.message) {
                                    $('.update-gagal').text(response.message);
                                    cash("#warning-update-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#warning-update-modal-preview").modal("hide");

                                        location.reload();
                                    }, 5000); // 5000 milliseconds = 5 seconds
                                } else {
                                    // Tangani kesalahan lainnya jika ada
                                    // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                    alert('Terjadi kesalahan lainnya: ' + error);
                                }
                            }
                        });
                    }else{
                        var formData = new FormData();
                        formData.append('id', id);
                        formData.append('category_id', category_id);
                        formData.append('nama', nama);
                        formData.append('variant', variant);
                        formData.append('kode', kode);
                        formData.append('expired', expired);
                        formData.append('modal', modal);
                        formData.append('harga_jual', harga_jual);
                        formData.append('satuan_beli', satuan_beli);
                        formData.append('satuan_jual', satuan_jual);
                        formData.append('deskripsi', deskripsi);
                        formData.append('foto', '');

                        // Kirim permintaan pembaruan produk ke API
                        $.ajax({
                            url: '{{ env('BASE_URL') }}api/master-produk/update-produk',
                            type: 'POST',
                            headers: {
                                "Authorization": "Bearer " + token
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                // Show the modal
                                $('.update-sukses').text(response.message);
                                cash("#success-update-modal-preview").modal("show");

                                setTimeout(function() {
                                    cash("#success-update-modal-preview").modal("hide");

                                    location.reload();
                                }, 3000); // 3000 milliseconds = 3 seconds
                            },
                            error: function(xhr, status, error) {
                                // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                console.log(error);

                                // Tampilkan pesan kesalahan yang dikirim oleh server
                                var response = JSON.parse(xhr.responseText);
                                if (response.success === false && response.message) {
                                    $('.update-gagal').text(response.message);
                                    cash("#warning-update-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#warning-update-modal-preview").modal("hide");

                                        location.reload();
                                    }, 5000); // 5000 milliseconds = 5 seconds
                                } else {
                                    // Tangani kesalahan lainnya jika ada
                                    // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                    alert('Terjadi kesalahan lainnya: ' + error);
                                }
                            }
                        });
                    }
                });

                function logout(name) {
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    window.location.href = "{{ route('login') }}";
                }
            });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>
