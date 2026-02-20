<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<footer class="footer py-4 bg-white shadow-2xl">
    <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-2 text-xl font-bold text-base-content">
            <img src="<?= base_url('assets/images/logo/logo-rsmn.png') ?>" alt="Logo RSMN" class="h-10 w-auto">
        </div>
        <aside class="grid-flow-col items-center">
            <p>Copyright © 2026 - RSMN IT</p>
        </aside>
        <div class="flex justify-center gap-4 h-full">
            <!-- Alamat -->
            <a href="https://maps.app.goo.gl/NqXFQESHzbLJdPks5" target="_blank" aria-label="Alamat" class="link">
                <span class="icon-[tabler--map-pin] w-5 h-5 text-purple-600"></span>
            </a>

            <!-- Telepon / WhatsApp -->
            <a href="https://wa.me/6281125224455" target="_blank" aria-label="Telepon / WhatsApp" class="link">
                <span class="icon-[tabler--phone] w-5 h-5 text-purple-600"></span>
            </a>

            <!-- Email -->
            <a href="mailto:rsumohnoer.jatimprov@gmail.com" aria-label="Email" class="link">
                <span class="icon-[tabler--mail] w-5 h-5 text-purple-600"></span>
            </a>
        </div>
    </div>
</footer>
