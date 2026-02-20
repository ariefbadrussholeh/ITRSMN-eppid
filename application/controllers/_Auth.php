<?php
class _Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->library(['session', 'email']);
        $this->load->helper(['url', 'form']);
    }

    /*
    |--------------------------------------------------------------------------
    | REGISTER
    |--------------------------------------------------------------------------
    */

    public function register()
    {
        if ($_POST) {

            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('nik'),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_BCRYPT
                )
            ];

            $this->User_model->create($data);

            redirect('login');
        }

        $this->load->view('auth/register');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */

    public function login()
    {
        if ($_POST) {

            $identitas = $this->input->post('identitas');
            $password = $this->input->post('password');

            $user = $this->User_model->verify_login(
                $identitas,
                $password
            );

            if ($user) {

                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'nama' => $user->nama,
                    'logged_in' => true
                ]);

                redirect('dashboard');
            } else {

                $this->session->set_flashdata(
                    'error',
                    'Login gagal'
                );
            }
        }

        $this->load->view('auth/login');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
    }

    /*
    |--------------------------------------------------------------------------
    | FORGOT PASSWORD
    |--------------------------------------------------------------------------
    */

    public function forgot_password()
    {
        $this->load->view('auth/forgot_password');
    }

    public function send_otp()
    {
        $identitas = $this->input->post('identitas');

        $user = $this->User_model
            ->find_by_identitas($identitas);

        if (!$user) {

            $this->session->set_flashdata(
                'error',
                'User tidak ditemukan'
            );

            redirect('auth/forgot_password');
        }

        $otp = rand(100000, 999999);

        $this->User_model->save_otp(
            $user->id,
            $otp
        );

        $this->send_email(
            $user->email,
            $otp
        );

        $this->session->set_userdata(
            'reset_user_id',
            $user->id
        );

        redirect('auth/verify_otp');
    }

    /*
    |--------------------------------------------------------------------------
    | VERIFY OTP
    |--------------------------------------------------------------------------
    */

    public function verify_otp()
    {
        if ($_POST) {

            $otp =
                $this->input->post('otp1') .
                $this->input->post('otp2') .
                $this->input->post('otp3') .
                $this->input->post('otp4') .
                $this->input->post('otp5') .
                $this->input->post('otp6');

            $user = $this->User_model
                ->verify_otp($otp);

            if ($user) {

                $this->User_model->update(
                    $user->id,
                    ['otp_verified' => 1]
                );

                redirect('auth/reset_password');
            } else {

                $this->session->set_flashdata(
                    'error',
                    'OTP salah'
                );
            }
        }

        $this->load->view('auth/verify_otp');
    }

    /*
    |--------------------------------------------------------------------------
    | RESEND OTP
    |--------------------------------------------------------------------------
    */

    public function resend_otp()
    {
        $id = $this->session
            ->userdata('reset_user_id');

        $user = $this->User_model
            ->update($id);

        $otp = rand(100000, 999999);

        $this->User_model->save_otp(
            $id,
            $otp
        );

        $this->send_email(
            $user->email,
            $otp
        );

        redirect('auth/verify_otp');
    }

    /*
    |--------------------------------------------------------------------------
    | RESET PASSWORD
    |--------------------------------------------------------------------------
    */

    public function reset_password()
    {
        $this->load->view('auth/reset_password');
    }

    public function update_password()
    {
        $id = $this->session
            ->userdata('reset_user_id');

        $password = password_hash(
            $this->input->post('password'),
            PASSWORD_BCRYPT
        );

        $this->User_model->update(
            $id,
            [
                'password' => $password,
                'otp_code' => NULL,
                'otp_verified' => 0
            ]
        );

        redirect('login');
    }

    /*
    |--------------------------------------------------------------------------
    | SEND EMAIL OTP
    |--------------------------------------------------------------------------
    */

    private function send_email($to, $otp)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'your@gmail.com',
            'smtp_pass' => 'your_app_password',
            'mailtype' => 'text',
            'charset' => 'utf-8'
        ];

        $this->email->initialize($config);

        $this->email->from(
            'your@gmail.com',
            'System'
        );

        $this->email->to($to);

        $this->email->subject(
            'Kode OTP Reset Password'
        );

        $this->email->message(
            'Kode OTP Anda: ' . $otp
        );

        $this->email->send();
    }
}
