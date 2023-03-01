<?php

class Pages extends Controller
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        $tv= $this->productModel->getProductsTv();
        $smartphone= $this->productModel->getProductsSmartphone();
        $laptop= $this->productModel->getProductslaptop();

        $data = [
        'tv' => $tv,
        'smartphone' => $smartphone,
        'laptop' => $laptop,
        ];
        $this->view('pages/index', $data);
    }

    // public function dashboard()
    // {
    //     $products = $this->productModel->getProducts();
    //     $data = [
    //         'products' => $products
    //     ];

    //     $this->view('pages/dashboard', $data);
    // }

    

  



    public function allproduct()
    {
        $products = $this->productModel->getProducts();
       
        $rows = $this->productModel->stats();

        $data = [
            'products' => $products,
            
            'num' => $rows
        ];

        // show($pagination);
        // die;

        $this->view('pages/allproduct', $data);
    }

    public function allproduct_cat($cat)
    {
        $products = $this->productModel->getProductsByCategorie($cat);
        $rows = $this->productModel->stats();
        $data = [
            'products' => $products,
            'num' => $rows
        ];
        $this->view('pages/allproduct', $data);
    }
    public function productDetails($id)
    {
        $product = $this->productModel->getProductById($id);

        $this->view('pages/productDetails', $product[0]);
    }

    // public function addProduct()
    // {
    //     $this->view('pages/addProduct');
    // }

    public function contactUs()
    {
        $this->view('pages/contactUs');
    }

    public function gesCommande()
    {
        $this->view('pages/gesCommande');
    }
}
