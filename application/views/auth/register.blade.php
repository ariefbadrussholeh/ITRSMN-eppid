<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.auth')
@section('content')
    <div class="w-full flex justify-center items-center px-4 py-6">
        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body gap-5">
                <div class="text-center">
                    <span class="icon-[tabler--user-plus] size-12 text-primary mx-auto mb-2"></span>
                    <h2 class="text-2xl font-bold">Daftar Akun</h2>
                    <p class="text-sm text-base-content/70">
                        Silakan isi data untuk membuat akun baru
                    </p>
                </div>

                <!-- IDENTITAS SECTION -->
                <div>
                    <h3 class="text-sm font-semibold text-base-content/70 mb-2">
                        Identitas
                    </h3>

                    <div class="space-y-3">
                        <div class="input-floating">
                            <input type="text" id="nik" class="input w-full" placeholder="NIK" required>
                            <label class="input-floating-label" for="nik">NIK</label>
                        </div>
                        <div class="input-floating">
                            <input type="text" id="nama" class="input w-full" placeholder="Nama Lengkap" required>
                            <label class="input-floating-label" for="nama">Nama Lengkap</label>
                        </div>
                        <div class="input-floating">
                            <input type="tel" id="no_hp" class="input w-full" placeholder="Nomor HP" required>
                            <label class="input-floating-label" for="no_hp">Nomor HP</label>
                        </div>
                    </div>
                </div>

                <div class="divider my-1"></div>

                <!-- PASSWORD SECTION -->
                <div>
                    <h3 class="text-sm font-semibold text-base-content/70 mb-2">
                        Password
                    </h3>

                    <div class="space-y-3">
                        <div class="input w-full">
                            <div class="input-floating grow">
                                <input id="password" type="password" placeholder="Password" required>
                                <label class="input-floating-label ms-0">Password</label>
                            </div>
                            <button type="button" data-toggle-password='{ "target": "#password" }'
                                class="cursor-pointer px-2">
                                <span class="icon-[tabler--eye-off] password-active:hidden block size-5"></span>
                                <span class="icon-[tabler--eye] password-active:block hidden size-5"></span>
                            </button>
                        </div>
                        <div class="input w-full">
                            <div class="input-floating grow">
                                <input id="confirm_password" type="password" placeholder="Konfirmasi Password" required>
                                <label class="input-floating-label ms-0">Konfirmasi Password</label>
                            </div>
                            <button type="button" data-toggle-password='{ "target": "#confirm_password" }'
                                class="cursor-pointer px-2">
                                <span class="icon-[tabler--eye-off] password-active:hidden block size-5"></span>
                                <span class="icon-[tabler--eye] password-active:block hidden size-5"></span>
                            </button>
                        </div>

                    </div>
                </div>

                <button class="btn btn-primary btn-gradient w-full mt-2">
                    Daftar Sekarang
                </button>

                <div class="text-center text-sm">
                    Sudah punya akun?
                    <a href="<?= base_url('login') ?>" class="link link-primary font-medium">
                        Masuk
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
