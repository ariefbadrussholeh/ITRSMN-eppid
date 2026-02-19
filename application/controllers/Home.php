<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Controller
 * @property Slice $slice
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->slice->view('home', [
            'title' => 'Beranda'
        ]);
    }
}
