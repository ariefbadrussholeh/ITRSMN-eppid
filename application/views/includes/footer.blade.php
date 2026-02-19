<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<footer class="footer bg-white p-10 shadow-2xl">
    <aside class="gap-6">
        <div class="flex items-center gap-2 text-xl font-bold text-base-content">
            <img src="<?= base_url('assets/images/logo/logo-rsmn-icon.png') ?>" alt="Logo RSMN" class="h-10 w-auto">
            <span>E-PPID RSMN</span>
        </div>
        <p class="text-base-content text-sm max-w-xs">
            Ajukan permohonan informasi publik dengan mudah, cepat, dan transparan melalui E-PPID RSMN.
        </p>
    </aside>
    <nav class="text-base-content">
        <h6 class="footer-title">Link lain</h6>
        <a href="https://rsumohammadnoer.jatimprov.go.id/" class="link link-hover flex items-center gap-2">
            <span class="icon-[tabler--chevron-right] size-4"></span>
            RSUD Mohammad Noer
        </a>
        <a href="https://ppid.jatimprov.go.id/" class="link link-hover flex items-center gap-2">
            <span class="icon-[tabler--chevron-right] size-4"></span>
            PPID Pemerintah Provinsi Jawa Timur
        </a>
        <a href="https://ppid.dinkes.jatimprov.go.id/" class="link link-hover flex items-center gap-2">
            <span class="icon-[tabler--chevron-right] size-4"></span>
            PPID Dinas Kesehatan Provinsi Jawa Timur
        </a>
    </nav>
    <nav class="text-base-content">
        <h6 class="footer-title">Hubungi Kami</h6>
        <div class="flex flex-col gap-2 text-sm">
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--map-pin] size-5 mt-0.5 text-purple-600"></span>
                <div>
                    <span class="font-medium">Alamat:</span><br>
                    Jl. Bonorogo No.17, Pamekasan
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--phone] size-5 mt-0.5 text-purple-600"></span>
                <div>
                    <span class="font-medium">Telepon / WhatsApp:</span><br>
                    <a href="https://wa.me/6281125224455" class="link link-hover">
                        +62 811-2522-4455
                    </a>
                </div>
            </div>
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--mail] size-5 mt-0.5 text-purple-600"></span>
                <div>
                    <span class="font-medium">Email:</span><br>
                    <a href="mailto:rsumohnoer.jatimprov@gmail.com" class="link link-hover">
                        rsumohnoer.jatimprov@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="text-base-content">
        <h6 class="footer-title flex items-center gap-2">
            Jam Layanan
        </h6>
        <div class="flex flex-col gap-2 text-sm">
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--calendar-week] size-4 mt-0.5 opacity-70 text-purple-600"></span>
                <span>Senin - Kamis : 08.00 - 16.00 WIB</span>
            </div>
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--calendar-week] size-4 mt-0.5 opacity-70 text-purple-600"></span>
                <span>Jumat : 08.00 - 15.30 WIB</span>
            </div>
            <div class="flex items-start gap-2">
                <span class="icon-[tabler--calendar-off] size-4 mt-0.5 opacity-70 text-purple-600"></span>
                <span>Sabtu, Minggu dan Hari Besar : Libur</span>
            </div>
        </div>
    </nav>
</footer>
