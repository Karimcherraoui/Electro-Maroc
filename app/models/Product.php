<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query("SELECT * FROM products");


        $results = $this->db->resultSet();

        return $results;
    }
    public function getCommandsDetails($idCommande)
    {
        $this->db->query("SELECT SUM(products.price*ligne_commande.quantite) as prix_total, ligne_commande.quantite, products.*
        FROM commande
        JOIN ligne_commande ON ligne_commande.id_commande = commande.commande_id
        JOIN products ON products.id = ligne_commande.id_produit
        WHERE ligne_commande.id_commande = $idCommande
        GROUP BY ligne_commande.quantite, products.id");

        $this->db->execute();
        $results = $this->db->resultSet();

        return $results;
    }
    public function getTotalPrix($idCommande)
    {
        $this->db->query("SELECT  sum(p.price*lc.quantite) as prix_total FROM `ligne_commande` lc 
        JOIN products p
        ON lc.id_produit = p.id
        WHERE lc.id_commande = $idCommande; ");
        $this->db->execute();
        $results = $this->db->resultSet();

        return $results;
    }

    public function getClientByCommande($idCommande)
    {
        $this->db->query("SELECT client.* FROM `commande`
JOIN client ON commande.id_client = client.id
WHERE commande.commande_id = $idCommande");
        $this->db->execute();
        $results = $this->db->resultSet();

        return $results;
    }


    public function addToCart($data)
    {
        $this->db->query("INSERT INTO orders (product_id,id_client) VALUES (:id_prd,:id_cl)");
        $this->db->bind(':id_cl', $data['id_cl']);
        $this->db->bind(':id_prd', $data['id_prd']);
        //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // total price
    // SELECT SUM(price) FROM `ligne_commande` lc JOIN products p ON p.id = lc.id_produit WHERE `id_commande`=16;

    public function getComandes($id)
    {
        $this->db->query(
            'SELECT * from commande where id_client = :id'
        );
        $this->db->bind('id', $id);
        $this->db->execute();
        $results = $this->db->resultSet();
        return $results;
    }

    public function getClients()
    {
        $this->db->query(
            'SELECT * from client'
        );
        $this->db->execute();
        $results = $this->db->resultSet();
        return $results;
    }

    public function finishCommande($id_user)
    {
        $this->db->commit();
        $this->db->query('DELETE FROM `orders` WHERE id_client = :id ');
        $this->db->bind('id', $id_user);
        $this->db->execute();
    }

    public function commandesDetails($id_user = null)
    {
        if ($id_user == null) {

            $this->db->query('SELECT c.* ,
        SUM(p.price *lc.quantite) as price ,
        cl.fullName
        FROM `ligne_commande` lc 
        JOIN products p 
        ON p.id = lc.id_produit 
        JOIN commande c 
        ON c.commande_id = lc.id_commande
        JOIN client cl
        ON cl.id = c.id_client
        GROUP BY`id_commande`
        ');

            $results = $this->db->resultSet();
            return $results;
        }
        //  sort by date creation Query -> 'order By date_creation' after goup by

        $this->db->query('SELECT c.* ,
        SUM(p.price *lc.quantite) as price ,
        cl.fullName
        FROM `ligne_commande` lc 
        JOIN products p 
        ON p.id = lc.id_produit 
        JOIN commande c 
        ON c.commande_id = lc.id_commande
        JOIN client cl
        ON cl.id = c.id_client
        WHERE id_client = :id_user
        GROUP BY`id_commande`
        ');
        $this->db->bind('id_user', $id_user);
        $results = $this->db->resultSet();
        return $results;
    }

    public function addCommande($data)
    {
        $this->db->transaction();
        $this->db->query('INSERT INTO `commande`(`id_client`) VALUES (:idc)');
        $this->db->bind('idc', $data['user_id']);
        $this->db->execute();
        return $this->db->lastid();
    }

    public function addOrderToCommande($data)
    {

        $this->db->query("INSERT INTO ligne_commande (id_produit,id_commande,quantite) VALUES (:id_produit,:id_commande,:quantite)");
        $this->db->bind(':id_produit', $data['id_produit']);
        $this->db->bind(':id_commande', $data['id_commande']);
        $this->db->bind(':quantite', $data['quantite']);

        //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getIdProductByIdClient($id)
    {
        $this->db->query("SELECT product_id FROM orders WHERE id_client = :id");
        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();

        return $results;
    }

    public function annuler($id_commande)
    {

        $this->db->query("UPDATE commande SET etat = 4 WHERE commande_id = :id_commande ");
        $this->db->bind(':id_commande', $id_commande);
        $this->db->execute();
    }
    public function envoiCommande($id_commande)
    {

        $this->db->query("UPDATE commande SET date_envoi = CURRENT_TIMESTAMP(),etat = 2 WHERE commande_id = :id_commande ");
        $this->db->bind(':id_commande', $id_commande);
        $this->db->execute();
    }
    public function livraisonCommande($id_commande)
    {

        $this->db->query("UPDATE commande SET date_livraison = CURRENT_TIMESTAMP(),etat = 3 WHERE commande_id = :id_commande ");
        $this->db->bind(':id_commande', $id_commande);
        $this->db->execute();
    }

    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM products WHERE id = :id");
        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();

        return $results;
    }
    public function getProductsByCategorie($cat)
    {
        $this->db->query("SELECT * FROM products WHERE categorie = :cat");
        $this->db->bind(':cat', $cat);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getProductsLaptop()
    {
        $this->db->query("SELECT * FROM products WHERE categorie = 'laptop'");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getProductsSmartphone()
    {
        $this->db->query("SELECT * FROM products WHERE categorie = 'smartphone'");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getProductsTv()
    {
        $this->db->query("SELECT * FROM products WHERE categorie = 'tv'");

        $results = $this->db->resultSet();

        return $results;
    }

    public function addProduct($data)
    {
        $this->db->query('INSERT INTO products(name, price, stock,categorie,marque, description, image) VALUES (:name,:price,:stock,:categorie,:marque,:description,:image)');
        //bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':marque', $data['marque']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':categorie', $data['categorie']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);

        //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addCategorie($data){
        $this->db->query("INSERT INTO categorie (name, image) VALUES (:name, :image)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':image', $data['image']);
        //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getCategorie(){
        $this->db->query("SELECT * FROM categorie");
        $this->db->execute();
        $results = $this->db->resultSet();
        return $results;
    }

    public function editCategorie($data){

        $this->db->query("UPDATE `categorie` SET name = :name, image = :image WHERE id = :id");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
        //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletCategorie($id)
    {
        $this->db->query("DELETE FROM categorie WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function findCategorieById($id){
        $this->db->query('SELECT * FROM categorie WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }




    public function findproductById($id)
    {
        $this->db->query('SELECT * FROM products WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function edit($data)
    {


        $this->db->query("UPDATE products SET name = :name, description = :description, price = :price, marque = :marque , categorie = :categorie , stock = :stock, image = :image WHERE id = :id");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':marque', $data['marque']);
        $this->db->bind(':categorie', $data['categorie']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delet($id)
    {
        $this->db->query("DELETE FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletProductCart($id)
    {
        $this->db->query("DELETE FROM orders WHERE product_id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function stats()
    {
        return $this->db->rowCount();
    }
}
