<?php

class Products extends Controller
{

    private $productModel;
    private $userModel;

    public function __construct()
    {
        if (!isLogged()) {

            redirect('/users/login');
        }
        $this->productModel = $this->model('Product');
        $this->userModel = $this->model('User');
    }

    public function addProduct()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //var_dump($_POST);
            //echo json_encode($_FILES);
            //die();
            echo __DIR__;

            $count = count($_POST['name']);

            for ($i = 0; $i < $count; $i++) {


                // sanitize post array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                //var_dump($_FILES);

                move_uploaded_file($_FILES['image']['tmp_name'][$i], './images/upload/'  . $_FILES['image']['name'][$i]);
                //show($_FILES['image']['tmp_name'][$i]);


                $data = [
                    'name' => $_POST['name'][$i],
                    'marque' => $_POST['marque'][$i],
                    'stock' => $_POST['stock'][$i],
                    'price' => $_POST['price'][$i],
                    'categorie' => $_POST['categorie'][$i],
                    'description' => $_POST['description'][$i],
                    'image' => $_FILES['image']['name'][$i],
                ];

                //$this->productModel->addProduct($data);
                // make sure no errors
                if ($this->productModel->addProduct($data)) {
                    redirect('Products/product');
                } else {
                    //load view with errors
                    $this->view('pages/addProduct', $data);
                }
            }
        } else {
            $data = [
                'name' => '',
                'marque' => '',
                'stock' => '',
                'categorie' => '',
                'price' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('pages/addProduct', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            move_uploaded_file($_FILES['image']['tmp_name'], './images/upload/' . $_FILES['image']['name']);

            $product = $this->productModel->findproductById($id);

            if (empty($_FILES['image']['name'])) {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'marque' => trim($_POST['marque']),
                    'categorie' => trim($_POST['categorie']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $product->image,
                    'name_err' => '',
                    'categorie_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            } else {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'marque' => trim($_POST['marque']),
                    'categorie' => trim($_POST['categorie']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $_FILES['image']['name'],
                    'name_err' => '',
                    'categorie_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            }

            //validate form
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['marque'])) {
                $data['marque_err'] = 'Please enter marque';
            }
            if (empty($data['categorie'])) {
                $data['categorie_err'] = 'Please enter categorie';
            }
            if (empty($data['stock'])) {
                $data['stock_err'] = 'Please enter stock';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description ';
            }

            //make sure no errors
            if (empty($data['name_err'])  && empty($data['stock_err']) && empty($data['price_err']) && empty($data['marque_err']) && empty($data['description_err']) && empty($data['categorie_err'])) {
                if ($this->productModel->edit($data)) {
                    redirect('Products/product');
                } else {
                    die('something went wrong');
                }
            } else {
                //load view with errors
                $this->view('pages/edit', $data);
            }
        } else {
            $product = $this->productModel->findproductById($id);
        }
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'marque' => $product->marque,
            'categorie' => $product->categorie,
            'stock' => $product->stock,
            'price' => $product->price,
            'description' => $product->description,
            'image' => $product->image,
            'name_err' => '',
            'marque_err' => '',
            'categorie_err' => '',
            'stock_err' => '',
            'price_err' => '',
            'description_err' => '',
            'image_err' => ''

        ];
        $this->view('pages/edit', $data);
    }
    public function product()
    {
        $products = $this->productModel->getProducts();
        $rows = $this->productModel->stats();
        $data = [
            'products' => $products,
            'num' => $rows
        ];

        
        $this->view('pages/dashboard', $data);
    }

    public function commande()
    {

        $products = [];
        $product = $this->productModel->getIdProductByIdClient($_SESSION['user_id']);
        $client = $this->userModel->getClientById($_SESSION['user_id']);
        $rows = $this->productModel->stats();

        
        foreach ($product as $key => $value) {
            
            $products[$key] = $this->productModel->getProductById($value->product_id);
            
        }
        
        $data = [
            'products' => $products,
            'users' => $client,
            'num' => $rows
        ];
        $this->view('pages/commande', $data);
    }


    public function addToOrder($id_prd)
    {

        show($_SESSION['user_id']);
        echo ($id_prd);

        $data = [
            'id_cl' => $_SESSION['user_id'],
            'id_prd' => $id_prd,
        ];
        $this->productModel->addToCart($data);
        redirect('Products/commande');
    }

    public function addOrderToCommande(){

    
        $products = $_POST['products'];
        $qtes = $_POST['qte'];

        $detail =[
            'user_id'=>$_SESSION['user_id']
        ];
        $idCommande =  $this->productModel->addCommande($detail);
        // $commandes = $this->productModel->getComandes($_SESSION['user_id']);

        // echo '<pre>';
        // var_dump($_POST,$_SESSION);
        // exit;
        // $total=$this->productModel->totalPrice($idCommande);
       
        
        for ($i=0; $i < count($products); $i++) {
            
            $data = [
                'quantite'=>$qtes[$i],
                'id_produit'=>$products[$i],
                'id_commande'=>$idCommande,
                
            ];
             $this->productModel->addOrderToCommande($data);
            
        }
        
        $this->productModel->finishCommande($_SESSION['user_id']);
        redirect('Products/dashboardCmd');
         
    }
    public function dashboardCmd(){

        $commandes = $this->productModel->commandesDetails($_SESSION['user_id']);

        $this->view('pages/dashboardCmd', $commandes);

    }

    public function dashboardCmdUser(){

        $commandes = $this->productModel->commandesDetails();

        $this->view('pages/dashboardCmdUser', $commandes);

    }
    // create anuller envoie liver methods
    public function envoiCommande($idCommande)
    {
        $this->productModel->envoiCommande($idCommande);
        redirect('Products/dashboardCmdUser');
    }
    public function annuler($idCommande)
    {
        $this->productModel->annuler($idCommande);
        redirect('Products/dashboardCmdUser');
    }
    public function livraisonCommande($idCommande)
    {
        $this->productModel->livraisonCommande($idCommande);
        redirect('Products/dashboardCmdUser');
    }


    public function product_cat($cat)
    {
        $products = $this->productModel->getProductsByCategorie($cat);
        $rows = $this->productModel->stats();
        $data = [
            'products' => $products,
            'num' => $rows
        ];
        $this->view('pages/dashboard', $data);
    }

    // public function dashboardCmdUser()
    // {
    //     $products = $this->productModel->getProducts();
    //     $rows = $this->productModel->stats();
    //     $data = [
    //         'products' => $products,
    //         'num' => $rows
    //     ];
    //     $this->view('pages/dashboardCmdUser', $data);
    // }

    // public function dashboardCmd()
    // {
    //     $products = $this->productModel->getProducts();
    //     $rows = $this->productModel->stats();
    //     $data = [
    //         'products' => $products,
    //         'num' => $rows
    //     ];
    //     $this->view('pages/dashboardCmd', $data);
    // }



    public function productWithCategorie()
    {
        $tv = $this->productModel->getProductsTv();
        $smartphone = $this->productModel->getProductsSmartphone();
        $laptop = $this->productModel->getProductslaptop();

        $rows = $this->productModel->stats();
        $data = [
            'tv' => $tv,
            'smartphone' => $smartphone,
            'laptop' => $laptop,
            'num' => $rows
        ];
        $this->view('pages/dashboard', $data);
    }


    public function deleteProductFromCart($id)
    {
        // get response from data if deleted or not return true or false
        if ($this->productModel->deletProductCart($id)) {
            redirect('Products/commande');
        } else {
            die('ops');
        }
    }


    public function delete($id)
    {
        // get response from data if deleted or not return true or false
        if ($this->productModel->delet($id)) {
            redirect('Products/product');
        } else {
            die('ops');
        }
    }
}
