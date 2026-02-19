<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<header>
    <div class="pt-4 sm:pt-6 md:pt-8">
        <div class="max-w-7xl mx-auto px-4">
            <nav class="navbar rounded-box shadow-base-300/20 shadow-sm">
                <div class="navbar-start">
                    <a href="<?= base_url() ?>" aria-label="Homepage Link" class="flex items-center gap-2">
                        <img src="<?= base_url('assets/images/logo/logo-rsmn-icon.png') ?>" alt="Logo RSMN"
                            class="h-10 w-auto">
                        <span class="font-bold text-lg sm:text-xl text-primary tracking-wide ml-2">
                            E-PPID RSMN
                        </span>

                    </a>
                </div>
                <div class="navbar-center max-md:hidden">
                    <ul class="menu menu-horizontal gap-2 p-0 text-base rtl:ml-20">
                        <li><a href="#" class="font-medium">Beranda</a></li>
                        <li class="dropdown relative inline-flex [--auto-close:inside] [--offset:9]">
                            <button id="dropdown-end" type="button"
                                class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-md:px-2 font-medium"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                Layanan Informasi
                                <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu"
                                aria-orientation="vertical" aria-labelledby="nested-dropdown">
                                <li><a class="dropdown-item" href="#">Permohonan Informasi</a></li>
                                <li><a class="dropdown-item" href="#">Pengajuan Keberatan</a></li>
                            </ul>
                        </li>

                        <li class="dropdown relative inline-flex [--auto-close:inside] [--offset:9]">
                            <button id="dropdown-end" type="button"
                                class="dropdown-toggle dropdown-open:bg-base-content/10 dropdown-open:text-base-content max-md:px-2 font-medium"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                Daftar Informasi
                                <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu"
                                aria-orientation="vertical" aria-labelledby="nested-dropdown">
                                <li><a class="dropdown-item" href="#">Informasi Berkala</a></li>
                                <li><a class="dropdown-item" href="#">Informasi Serta Merta</a></li>
                                <li><a class="dropdown-item" href="#">Informasi Setiap Saat</a></li>
                                <li><a class="dropdown-item" href="#">Informasi yang Dikecualikan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar-end items-center gap-4">
                    <div class="dropdown relative inline-flex [--placement:bottom] md:hidden">
                        <button id="dropdown-default" type="button"
                            class="dropdown-toggle btn btn-text btn-secondary btn-square" aria-haspopup="menu"
                            aria-expanded="false" aria-label="Dropdown">
                            <span class="icon-[tabler--menu-2] dropdown-open:hidden size-5"></span>
                            <span class="icon-[tabler--x] dropdown-open:block hidden size-5"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                            aria-orientation="vertical" aria-labelledby="dropdown-default">
                            <li><a class="dropdown-item" href="#">Beranda</a></li>
                            <li class="dropdown relative [--auto-close:inside] [--offset:9] [--placement:bottom]">
                                <button id="dropdown-end-2"
                                    class="dropdown-toggle dropdown-item dropdown-open:bg-base-content/10 dropdown-open:text-base-content justify-between"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Layanan Informasi
                                    <span class="icon-[tabler--chevron-right] size-4 rtl:rotate-180"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-48" role="menu"
                                    aria-orientation="vertical" aria-labelledby="nested-dropdown">
                                    <li><a class="dropdown-item" href="#">Permohonan Informasi</a></li>
                                    <li><a class="dropdown-item" href="#">Pengajuan Keberatan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-primary btn-gradient" href="#">Login</a>
                </div>
            </nav>
        </div>
    </div>
</header>
