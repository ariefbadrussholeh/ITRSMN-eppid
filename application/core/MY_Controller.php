<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Output $output
 * @property CI_Form_validation $form_validation
 * @property CI_Security $security
 */
class MY_Controller extends CI_Controller
{
    protected $validationMessages = [
        'required' => '{field} wajib diisi',
        'numeric' => '{field} harus angka',
        'exact_length' => '{field} harus {param} digit',
        'min_length' => '{field} minimal {param} karakter',
        'valid_email' => 'Format email tidak valid',
        'matches' => 'Konfirmasi password tidak cocok',
        'is_unique' => '{field} sudah terdaftar'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Standard JSON response
     */
    protected function jsonResponse($data = [], $statusCode = 200)
    {
        $this->output
            ->set_status_header($statusCode)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data, JSON_UNESCAPED_UNICODE))
            ->_display();
        exit;
    }

    /**
     * Run validation
     */
    protected function validate(array $rules, array $messages = [])
    {
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules($rules);

        $messages = !empty($messages) ? $messages : $this->validationMessages;

        foreach ($messages as $rule => $message) {
            $this->form_validation->set_message($rule, $message);
        }

        if ($this->form_validation->run() === FALSE) {
            return [
                'status' => false,
                'errors' => $this->form_validation->error_array()
            ];
        }

        return [
            'status' => true,
            'errors' => []
        ];
    }

    /**
     * Return CSRF token (for AJAX refresh if needed)
     */
    protected function csrf()
    {
        return [
            'name'  => $this->security->get_csrf_token_name(),
            'hash'  => $this->security->get_csrf_hash()
        ];
    }
}
