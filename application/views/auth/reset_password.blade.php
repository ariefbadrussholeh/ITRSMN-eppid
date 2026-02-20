<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

@extends('layouts.auth')
@section('content')
    <div class="w-full flex justify-center items-center px-4 py-6">

        <div class="card w-full max-w-md bg-base-100 shadow-xl">

            <div class="card-body gap-4">

                <!-- Header -->
                <div class="text-center mb-2">
                    <span class="icon-[tabler--lock] size-12 text-primary mx-auto mb-2"></span>

                    <h2 class="card-title justify-center text-2xl font-bold">
                        Reset Password
                    </h2>

                    <p class="text-base-content/70 text-sm">
                        Masukkan password baru Anda. Pastikan password kuat dan mudah diingat.
                    </p>
                </div>

                <form method="post" action="<?= base_url('auth/update_password') ?>" class="flex flex-col gap-4">

                    <!-- Password Baru -->
                    <div class="input w-full">
                        <div class="input-floating grow">
                            <input id="password" type="password" name="password" placeholder="Masukkan password baru"
                                required />
                            <label class="input-floating-label ms-0" for="password">
                                Password Baru
                            </label>
                        </div>

                        <button type="button" data-toggle-password='{ "target": "#password" }' class="cursor-pointer px-2"
                            aria-label="toggle password">
                            <span
                                class="icon-[tabler--eye] password-active:block hidden size-5 text-base-content/70"></span>
                            <span
                                class="icon-[tabler--eye-off] password-active:hidden block size-5 text-base-content/70"></span>
                        </button>
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="input w-full">
                        <div class="input-floating grow">
                            <input id="confirm_password" type="password" name="confirm_password"
                                placeholder="Konfirmasi password baru" required />
                            <label class="input-floating-label ms-0" for="confirm_password">
                                Konfirmasi Password
                            </label>
                        </div>

                        <button type="button" data-toggle-password='{ "target": "#confirm_password" }'
                            class="cursor-pointer px-2" aria-label="toggle password">
                            <span
                                class="icon-[tabler--eye] password-active:block hidden size-5 text-base-content/70"></span>
                            <span
                                class="icon-[tabler--eye-off] password-active:hidden block size-5 text-base-content/70"></span>
                        </button>
                    </div>

                    <button class="btn btn-primary btn-gradient w-full">
                        Simpan Password
                    </button>

                </form>

            </div>

        </div>

    </div>
@endsection
