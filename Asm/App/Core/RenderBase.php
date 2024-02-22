<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * chỗ này là phương thức render của admin 
     * 
     */
    public function renderAdminHeader(){
        $this->load->render('layouts/admin/header');
    }
    public function renderSilder(){
        $this->load->render('layouts/admin/slider');
    }
    public function renderHome(){
        $this->load->render('layouts/admin/dashboard');
    }
    public function renderAdminFooter(){
        $this->load->render('layouts/admin/footer');
    }
    Public function renderCategories(){
        $this->load->render('layouts/admin/createcategories');
    }
    public function renderProduct(){
        $this->load->render('layouts/admin/createproduct');
    }
    public function renderAccount(){
        $this->load->render('layouts/admin/createaccount');
    }
    public function renderListaccount(){
        $this->load->render('layouts/admin/list_account');
    }
    /**
     * từ chổ này là phương thức render của client 
     * 
     */
    public function renderClientHeader(){
        $this->load->render('layouts/client/header');
    }
    public function renderClientFooter(){
        $this->load->render('layouts/client/footer');
    }
    public function renderClientHome(){
        $this->load->render('layouts/client/home');
    }
     /**
     * từ chổ này là phương thức render của form 
     * 
     */
    public function renderLogin(){
        $this->load->render('layouts/account/login');
    }
    public function renderRegrister(){
        $this->load->render('layouts/account/regrister');
    }
}