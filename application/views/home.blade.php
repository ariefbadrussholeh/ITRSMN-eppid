<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.default')
@section('content')
    <div
        class="mx-auto flex max-w-7xl flex-col items-center gap-8 justify-self-center px-4 text-center sm:px-6 lg:px-8 my-8">
        <!-- Badge khusus mobile -->
        <span class="badge badge-primary shrink-0 rounded-full text-sm sm:hidden">
            E-PPID RSMN
        </span>

        <!-- Container desktop -->
        <div
            class="bg-base-200 border border-base-content/20 flex flex-wrap items-center justify-center gap-2 px-3 py-2 rounded-full w-auto max-w-full hidden sm:flex">
            <span class="badge badge-primary shrink-0 rounded-full text-sm sm:text-base">
                E-PPID RSMN
            </span>
            <span class="text-base-content/80 text-xs sm:text-sm truncate">
                Informasi publik cepat dan transparan
            </span>
        </div>

        <h1
            class="text-base-content relative z-1 text-5xl leading-[1.15] font-bold max-md:text-2xl md:max-w-3xl md:text-balance">
            <span>E-PPID RSUD Mohammad Noer Provinsi Jawa Timur</span>
            <svg width="223" height="12" viewBox="0 0 223 12" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="absolute -bottom-1.5 left-10 -z-1 max-lg:left-4 max-md:hidden">
                <path
                    d="M1.30466 10.7431C39.971 5.28788 76.0949 3.02 115.082 2.30401C143.893 1.77489 175.871 0.628649 204.399 3.63102C210.113 3.92052 215.332 4.91391 221.722 6.06058"
                    stroke="url(#paint0_linear_10365_68643)" stroke-width="2" stroke-linecap="round" />
                <defs>
                    <linearGradient id="paint0_linear_10365_68643" x1="19.0416" y1="4.03539" x2="42.8362"
                        y2="66.9459" gradientUnits="userSpaceOnUse">
                        <stop offset="0.2" stop-color="var(--color-primary)" />
                        <stop offset="1" stop-color="var(--color-primary-content)" />
                    </linearGradient>
                </defs>
            </svg>
        </h1>
        <p class="text-base-content/80 max-w-2xl">
            Ajukan permohonan informasi publik secara online melalui layanan resmi E-PPID RSMN dengan mudah, cepat, dan
            transparan.
        </p>
        <a href="#" class="btn btn-primary btn-gradient btn-sm py-4 sm:btn-md lg:btn-lg flex items-center gap-2">
            Permohonan Informasi Online
            <span class="icon-[tabler--arrow-right] size-5 rtl:rotate-180"></span>
        </a>
    </div>
@endsection
