<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public $product;
    public $newProduct;

    public function __construct(){
        $this->product = new \App\Models\ProductModel();
        $this->newProduct = new \App\Models\NewProductModel();
    }
    
    public function adminDashboard()
    {
        $data['name'] = $this->product->findall();
        $data['newname'] = $this->newProduct->findall();
        return view('admindashboard',$data);
    }

    public function save(){
        $id = $_POST['productId'];
        $data = [
            'productsId'=> $this->request->getVar('productId'),
            'productsName' => $this->request->getVar('productName'),
            'productsImg' => $this->request->getVar('productImage'),
            'productsPrice' => $this->request->getVar('productPrice'),
            'productsStar' => $this->request->getVar('productStar'),
        ];
        if($id != null){
            $this->product->set($data)->where('productsId',$id)->update();
           }
           else{
            $this->product->save($data);
           }
        return redirect()->to('/adminDashboard');
    }

    public function saveNewPro(){
        $id = $_POST['productId'];
        $data = [
            'productsId'=> $this->request->getVar('productId'),
            'productsName' => $this->request->getVar('productName'),
            'productsImg' => $this->request->getVar('productImage'),
            'productsPrice' => $this->request->getVar('productPrice'),
            'productsStar' => $this->request->getVar('productStar'),
        ];
        if($id != null){
            $this->newProduct->set($data)->where('productsId',$id)->update();
           }
           else{
            $this->newProduct->save($data);
           }
        return redirect()->to('/adminDashboard');
    }

    public function edit($id) {
        $data = [
            'productsId' => $this->product->findAll(),
            'pro' => $this->product->where('productsId', $id)->first(),
            'newpro' => $this->newProduct->where('productsId', $id)->first(),
        ];
        $data['name'] = $this->product->findall();
        $data['newname'] = $this->newProduct->findall();
        return view('adminProducts', $data);
    }

    public function delete($id){
        $this->product->where('productsId', $id)->delete();
        return redirect()->to('/adminDashboard');
    }

    public function deleteNewPro($id){
        $this->newProduct->where('productsId', $id)->delete();
        return redirect()->to('/adminDashboard');
    }

    public function goToProducts(){
        $data['name'] = $this->product->findall();
        $data['newname'] = $this->newProduct->findall();
        return view('adminProducts',$data);
    }

    public function loginAuth(){
        $session = session();
        $userModel = new AdminModel();
        $username = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $username)->first();

        if($data){
            $pass = $data['password'];
            $authenticate = password_verify($password, $pass);
            if($authenticate){
                $ses_data = [
                    'admin_id' => $data['admin_id'],
                    'email' => $data['email'],
                    'isLoggedin'=> TRUE,
                ];
                    $session->set($ses_data);
                    return redirect()->to('/adminDashboard');
            }
            else{
                $session->setFlashdata('msg','Password is incorrect');
                return redirect()->to('/admin');
            }
        }
        else{
            $session->setFlashdata('msg','Email does not exist');
            return redirect()->to('/admin');
        }
    }
    
    public function admin(){
        return view('loginAdmin');
    }
}