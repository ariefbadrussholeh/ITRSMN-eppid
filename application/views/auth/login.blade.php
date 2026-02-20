<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.auth')
@section('content')
    <div class="w-full flex justify-center items-center px-4">
        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body gap-4">

                <div class="text-center mb-2">
                    <span class="icon-[tabler--login] size-12 text-primary mx-auto mb-2"></span>
                    <h2 class="card-title justify-center text-2xl font-bold">
                        Login
                    </h2>
                    <p class="text-base-content/70 text-sm">
                        Silakan masuk menggunakan identitas Anda
                    </p>
                </div>

                <div class="input-floating">
                    <input type="text" name="identitas" placeholder="Masukkan NIK / NIP / Username / No HP"
                        class="input w-full" id="identitas" required />
                    <label class="input-floating-label" for="identitas">
                        Identitas
                    </label>
                </div>

                <div class="input w-full">
                    <div class="input-floating grow">
                        <input id="password" type="password" name="password" placeholder="Masukkan password" required />
                        <label class="input-floating-label ms-0" for="password">
                            Password
                        </label>
                    </div>

                    <button type="button" data-toggle-password='{ "target": "#password" }' class="cursor-pointer px-2"
                        aria-label="toggle password">
                        <span class="icon-[tabler--eye] password-active:block hidden size-5 text-base-content/70"></span>
                        <span
                            class="icon-[tabler--eye-off] password-active:hidden block size-5 text-base-content/70"></span>
                    </button>
                </div>

                <div class="text-right">
                    <a href="<?= base_url('forgot-password') ?>" class="link link-hover text-sm text-primary">
                        Lupa password?
                    </a>
                </div>

                <button class="btn btn-primary btn-gradient w-full mt-2">
                    Masuk
                </button>

                <div class="divider text-sm">ATAU</div>

                <div class="text-center text-sm">
                    Belum punya akun?
                    <a href="<?= base_url('register') ?>" class="link link-primary link-hover font-medium">
                        Daftar
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
