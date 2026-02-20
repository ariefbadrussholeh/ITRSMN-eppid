<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.auth')
@section('content')
    <div class="w-full flex justify-center items-center px-4 py-6">
        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body text-center">
                <div class="flex justify-center mb-2">
                    <span class="icon-[tabler--shield-lock] size-12 text-primary"></span>
                </div>
                <h2 class="card-title justify-center text-2xl font-bold">
                    Verifikasi OTP
                </h2>
                <p class="text-sm text-base-content/70 mb-4">
                    Masukkan kode OTP yang dikirim ke email Anda
                </p>
                <form method="post" action="<?= base_url('auth/reset_password') ?>">
                    <div class="flex justify-center mb-4">
                        <div class="flex space-x-3" data-pin-input='{"availableCharsRE": "^[0-9]+$"}'>
                            <input type="text" name="otp1" maxlength="1" class="pin-input" data-pin-input-item
                                autofocus />
                            <input type="text" name="otp2" maxlength="1" class="pin-input" data-pin-input-item />
                            <input type="text" name="otp3" maxlength="1" class="pin-input" data-pin-input-item />
                            <input type="text" name="otp4" maxlength="1" class="pin-input" data-pin-input-item />
                            <input type="text" name="otp5" maxlength="1" class="pin-input" data-pin-input-item />
                            <input type="text" name="otp6" maxlength="1" class="pin-input" data-pin-input-item />
                        </div>
                    </div>
                    <button class="btn btn-primary btn-gradient w-full mb-3">
                        Verifikasi OTP
                    </button>
                </form>
                <div class="text-sm">
                    Tidak menerima kode?
                    <form method="post" action="<?= base_url('auth/resend_otp') ?>" class="inline">
                        <button type="submit" class="link link-primary font-medium">
                            Kirim ulang
                        </button>
                    </form>
                </div>
                <div class="text-xs text-base-content/60 mt-2">
                    OTP berlaku selama 5 menit
                </div>
            </div>
        </div>
    </div>
@endsection
