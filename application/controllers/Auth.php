<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Controller
 * @property Slice $slice
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->slice->view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function register()
    {
        $this->slice->view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function forgot_password()
    {
        $this->slice->view('auth.forgot_password', [
            'title' => 'Forgot Password'
        ]);
    }

    public function send_otp()
    {
        $this->slice->view('auth.send_otp', [
            'title' => 'Send OTP'
        ]);
    }

    public function reset_password()
    {
        $this->slice->view('auth.reset_password', [
            'title' => 'Reset Password'
        ]);
    }
}
