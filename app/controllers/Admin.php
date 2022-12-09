<?php
class Admin extends Controller {
    public function __construct(){
        if (!isLoggedIn()) {
            redirect('users/login');
        }
    }
    public function home(){
        $data = [
            'nav'=>'home',
            'title'=>'Dashboard'
        ];
        $this->view('admin/home',$data);
    }
    public function productcategories(){
        $data = [
            'nav'=>'categories',
            'title'=>'Product Categories'
        ];
        $this->view('admin/productcategories',$data);
    }
    public function customers(){
        $data = [
            'nav'=>'customers',
            'title'=>'Customers'
        ];
        $this->view('admin/customers',$data);
    }
    public function sellers(){
        $data = [
            'nav'=>'sellers',
            'title'=>'Product Sellers'
        ];
        $this->view('admin/sellers',$data);
    }
    public function complains(){
        $data = [
            'nav'=>'complain',
            'title'=>'Complains'
        ];
        $this->view('admin/Complains',$data);
    }
    public function advisors(){
        $data = [
            'nav'=>'advisors',
            'title'=>'Agricultural Advisors'
        ];
        $this->view('admin/advisors',$data);
    }
    public function reports(){
    $data = [
        'nav'=>'report',
        'title'=>'Reports'
    ];
    $this->view('admin/reports',$data);
}

}
