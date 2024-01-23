<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHeader(){
        $this->load->render('layouts/client/header');
    }
    public function renderSilder(){
        $this->load->render('layouts/client/slider');
    }
    public function renderHome(){
        $this->load->render('layouts/client/dashboard');
    }
    public function renderFooter(){
        $this->load->render('layouts/client/footer');
    }
    Public function renderCategories(){
        $this->load->render('layouts/client/createcategories');
    }
    public function renderProduct(){
        $this->load->render('layouts/client/createproduct');
    }
}