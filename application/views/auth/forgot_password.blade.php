<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.auth')
@section('content')
    <div class="w-full flex justify-center items-center px-4 py-6">
        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body">

                <div class="flex justify-center mb-2">
                    <span class="icon-[tabler--mail-forward] size-12 text-primary"></span>
                </div>

                <h2 class="card-title justify-center text-2xl font-bold text-center">
                    Lupa Password
                </h2>

                <p class="text-center text-base-content/70 text-sm mb-4">
                    Masukkan NIK / Username / Email Anda untuk menerima kode OTP
                </p>

                <form method="post" action="<?= base_url('send-otp') ?>">

                    <div class="input-floating mb-4">
                        <input type="text" name="identitas" class="input w-full" placeholder="NIK / Username / Email" />
                        <label class="input-floating-label">
                            Identitas
                        </label>
                    </div>

                    <button class="btn btn-primary btn-gradient w-full">
                        Kirim Kode OTP
                    </button>

                </form>

                <div class="text-center text-sm mt-3">
                    <a href="<?= base_url('login') ?>" class="link link-primary">
                        Kembali ke Login
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
