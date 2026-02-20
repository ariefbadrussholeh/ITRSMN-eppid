<?php
class user_model extends CI_Model
{

    private $table = 'ppid_users';

    public function find_by_identitas($identitas)
    {
        $this->db->where('nik', $identitas);
        $this->db->or_where('username', $identitas);
        $this->db->or_where('email', $identitas);
        $this->db->or_where('no_hp', $identitas);

        return $this->db->get($this->table)->row();
    }

    public function find_by_email($email)
    {
        return $this->db->get_where($this->table, [
            'email' => $email
        ])->row();
    }

    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db
            ->where('id', $id)
            ->update($this->table, $data);
    }

    public function verify_login($identitas, $password)
    {
        $user = $this->find_by_identitas($identitas);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return false;
    }

    public function save_otp($id, $otp)
    {
        return $this->update($id, [
            'otp_code' => $otp,
            'otp_expired' => date('Y-m-d H:i:s', strtotime('+5 minutes')),
            'otp_verified' => 0
        ]);
    }

    public function verify_otp($otp)
    {
        $this->db->where('otp_code', $otp);
        $this->db->where('otp_expired >=', date('Y-m-d H:i:s'));

        return $this->db->get($this->table)->row();
    }
}
