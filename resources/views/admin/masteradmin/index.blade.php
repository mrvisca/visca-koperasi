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
        <title>Visca Koperasi - Master Admin</title>
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
                    <a href="#" class="menu menu--active">
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
                            <a href="#" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="list"></i> </div>
                                <div class="menu__title"> Kategori Produk </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu menu--active">
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
                    <a href="#" class="menu">
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
                            <a href="#" class="side-menu">
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
                                    <a href="#" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Kategori Produk </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="side-menu">
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
                            <a href="#" class="side-menu">
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
                            List Master Admin
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <button class="btn btn-primary shadow-md mr-2">Tambah Data</button>
                        </div>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-5 mt-5">
                        <div class="overflow-x-auto scrollbar-hidden">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">No</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Nama</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Email</th>
                                        <th class="border-b-2 dark:border-dark-5 border-gray-600 whitespace-nowrap">Role</th>
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

                var url = '{{ env('BASE_URL') }}api/dashboard/home';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {

                    $('.nama-akun').text(data.name);
                    $('.role-akun').text(data.jabatan);

                }).catch(error => {
                    console.error('Error:', error);
                });

                // Ambil Data Admin
                var url = '{{ env('BASE_URL') }}api/master-admin/list';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {
                    // Panggil fungsi untuk mengisi data ke dalam tbody DataTable
                    populateDataTable(data);
                }).catch(error => {
                    console.error('Error:', error);
                });

                function populateDataTable(data) {
                    var tableBody = $("#data-body");

                    // Bersihkan isi tbody sebelum mengisi dengan data baru
                    tableBody.empty();

                    var rowDataArray = []; // Variabel untuk menyimpan objek baris

                    // Perulangan menggunakan $.each()
                    $.each(data, function(index, item) {
                        for (let i = 0; i < item.length; i++) {
                            // // Create an object with the desired properties
                            var rowData = {
                                id: item[i].id,
                                nomer: item[i].nomer,
                                name: item[i].name,
                                email: item[i].email,
                                role_id: item[i].role_id,
                                roles: item[i].roles,
                            };

                            // Push the object to the data array
                            rowDataArray.push(rowData);
                        }
                    });

                    var dataTable = $('#data-table').DataTable();
                    if (dataTable) {
                        // Destroy DataTable
                        dataTable.destroy();
                    }

                    // Initialize DataTable
                    var table = $('#data-table').DataTable({
                        data: rowDataArray,
                        columns: [
                            { data: 'nomer', className: ' border-b border-gray-600 text-center' },
                            { data: 'name', className: 'border-b border-gray-600 text-center' },
                            { data: 'email', className: 'border-b border-gray-600 text-center' },
                            { data: 'roles', className: 'border-b border-gray-600 text-center' },
                            {
                                data: null,
                                render: function (data, type, row) {

                                    // Create action buttons
                                    var editBtn = '<button class="btn btn-primary btn-edit" data-id="' + data.id + '" data-name="' + data.name + '" data-email="' + data.email + '" data-phone="' + data.phone + '" data-title="' + data.title + '" data-subtitle="' + data.subtitle + '"><i data-feather="edit" class="w-4 h-4"></i></button>';

                                    // Combine the buttons
                                    var actions = editBtn;
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

                    // // Handle button click events
                    // $('#data-table').on('click', '.btn-edit', function() {
                    //     cash("#modal-update").modal("show");
                    //     var id = $(this).attr("data-id");
                    //     var name = $(this).attr("data-name");
                    //     var email = $(this).attr("data-email");
                    //     var phone = $(this).attr("data-phone");
                    //     var title = $(this).attr("data-title");
                    //     var subtitle = $(this).attr("data-subtitle");

                    //     // Handle edit action
                    //     $('.update-id').val(id);
                    //     $('.update-nama').val(name);
                    //     $('.update-email').val(email);
                    //     $('.update-phone').val(phone);
                    //     $('.update-title').val(title);
                    //     $('.update-subtitle').val(subtitle);
                    // });

                    // // Tombol Update Admin
                    // $(".update-btn").click(function() {
                    //     // Ajax update
                    //     var id = $('.update-id').val();
                    //     var name = $('.update-nama').val();
                    //     var email = $('.update-email').val();
                    //     var phone = $('.update-phone').val();
                    //     var title = $('.update-title').val();
                    //     var subtitle = $('.update-subtitle').val();
                    //     var kode = $('.update-kode').val();

                    //     // Kirim permintaan pembaruan produk ke API
                    //     $.ajax({
                    //         url: '{{ env('BASE_URL') }}api/profile/update/' + id,
                    //         type: "PUT",
                    //         beforeSend: function(xhr) {
                    //             xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                    //         },
                    //         data: {
                    //             name: name,
                    //             email: email,
                    //             phone: phone,
                    //             title: title,
                    //             subtitle: subtitle,
                    //             kode: kode,
                    //         },
                    //         success: function(response) {
                    //             // Show the modal
                    //             $('.update-sukses').text(response.message);
                    //             cash("#success-update-modal-preview").modal("show");

                    //             setTimeout(function() {
                    //                 cash("#success-update-modal-preview").modal("hide");

                    //                 location.reload();
                    //             }, 3000); // 3000 milliseconds = 3 seconds
                    //         },
                    //         error: function(xhr, status, error) {
                    //             // Tangani kesalahan dalam permintaan Ajax itu sendiri
                    //             console.log(error);

                    //             // Tampilkan pesan kesalahan yang dikirim oleh server
                    //             var response = JSON.parse(xhr.responseText);
                    //             if (response.success === false && response.message) {
                    //                 $('.update-gagal').text(response.message);
                    //                 cash("#warning-update-modal-preview").modal("show");

                    //                 setTimeout(function() {
                    //                     cash("#warning-update-modal-preview").modal("hide");

                    //                     location.reload();
                    //                 }, 5000); // 5000 milliseconds = 5 seconds
                    //             } else {
                    //                 // Tangani kesalahan lainnya jika ada
                    //                 // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                    //                 alert('Terjadi kesalahan lainnya: ' + error);
                    //             }
                    //         }
                    //     });
                    // });
                }

                function logout(name) {
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    window.location.href = "{{ route('login') }}";
                }
            });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>