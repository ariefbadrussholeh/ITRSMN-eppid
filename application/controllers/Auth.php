<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Controller
 * @property Slice $slice
 * @property CI_Input $input
 * @property user_model $user
 */
class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model', 'user');
    }


    public function login()
    {
        $this->slice->view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function register()
    {
        if ($this->input->method() === 'get') {
            $this->slice->view('auth.register', [
                'title' => 'Register'
            ]);
            return;
        }

        $rules = [
            ['field' => 'nik', 'label' => 'NIK', 'rules' => 'required|numeric|exact_length[16]'],
            ['field' => 'nama', 'label' => 'Nama Lengkap', 'rules' => 'required|min_length[3]'],
            ['field' => 'no_hp', 'label' => 'Nomor HP', 'rules' => 'required|numeric|min_length[10]'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'required|min_length[6]'],
            ['field' => 'confirm_password', 'label' => 'Konfirmasi Password', 'rules' => 'required|matches[password]']
        ];

        $validation = $this->validate($rules);

        if (!$validation['status']) {
            return $this->jsonResponse([
                'status' => false,
                'message' => 'Gagal validasi data',
                'errors' => $validation['errors']
            ], 422);
        }

        $data = [
            'nik' => trim($this->input->post('nik')),
            'nama' => trim($this->input->post('nama')),
            'no_hp' => trim($this->input->post('no_hp')),
            'email' => trim($this->input->post('email')),
            'password' => md5(sha1($this->input->post('password'))),
            'role' => 'user',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $exists = $this->user->find_by_identitas($data['nik']);
        if ($exists) {
            return $this->jsonResponse([
                'status' => false,
                'message' => 'NIK sudah terdaftar',
            ], 422);
        }

        $this->user->create($data);

        return $this->jsonResponse([
            'status' => true,
            'message' => 'Registrasi berhasil',
            'redirect' => base_url('login')
        ], 201);
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
