<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $errors = [
            'username' => 'The username field must be unique.',
            'email'    => 'You must provide a valid email address.',
        ];
        $data = [];
        $data['view'] = 'login/index';
        $data['title'] = 'login';
        if ($this->request->is('GET')) {
            return view('templates/login', $data);
        } else if ($this->request->is('POST')) {
            if (!$this->validate([
                'username' => 'required|regex_match[/^[a-zA-Z0-9_.-]{6,20}$/]',
                'password' => 'required|regex_match[/^[a-zA-Z0-9_.-]{6,20}$/]'
            ])) {
                return view('templates/login', $data);
            }
        }
    }
}
