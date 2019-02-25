<?php

class Home extends Controller {

    protected $user;

    public function __construct()
    {
        $this->user = $this->model('Users');
    }

    public function index($name = '') {

        $users = Users::all();

        $this->view('home/index',['users' => $users]);
    }

    public function create($username = '',$email = '') {

        $this->user->create([
            'username' => $username,
            'email' => $email
        ]);


    }

}