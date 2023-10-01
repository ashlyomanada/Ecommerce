<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    private $product;
    private $newproduct;
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
        $this->newproduct = new \App\Models\NewProductModel();
    }
   
    public function index()
    {
        return view('login');
    }

    public function register(){
        helper(['form']);
        $rules = [
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[tbl_useracct.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVAR('password'),PASSWORD_DEFAULT)

            ];
            $userModel->save($data);
            return redirect()->to('/');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('registration',$data);
        }
    }

    public function login(){
        helper(['form']);
        echo view('login');
    }
    public function loginAuth(){
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $username)->first();

        if($data){
            $pass = $data['password'];
            $authenticate = password_verify($password, $pass);
            if($authenticate){
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'email' => $data['email'],
                    'isLoggedin'=> TRUE,
                ];
                    $session->set($ses_data);
                    return redirect()->to('/website');
            }
            else{
                $session->setFlashdata('msg','Password is incorrect');
                return redirect()->to('/');
            }
        }
        else{
            $session->setFlashdata('msg','Email does not exist');
            return redirect()->to('/');
        }
    }
    public function website(){
        $data['name'] = $this->product->findAll();
        $data['newName'] = $this->newproduct->findAll();
        return view('index',$data);
    }
    
}