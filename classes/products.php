<?php
include "database.php";

abstract class Product extends Query
{

    protected $table = "products";
    protected $sku = "";
    protected $name = "";
    protected $price = "";
    protected $type = "";
    protected $attribute = "";

    abstract function insert();
}




class Book extends Product
{
    function __construct($post)
    {
        parent::__construct();

        $this->sku = $post['sku'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = $post['type'];
        $this->attribute = $post['weight'] . ' KG';
        // echo $this->attribute;
    }
    function insert()
    {
        // $table = $this->table;

        $myArr = array(
            "sku" =>  $this->sku,
            "name" =>  $this->name,
            "price" =>  $this->price,
            "type" =>  $this->type,
            "attribute" =>  $this->attribute

        );
        // print_r($myArr);
        $this->create($myArr, $this->table);
    }
}




class DVD extends Product
{
    function __construct($post)
    {
        parent::__construct();

        $this->sku = $post['sku'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = $post['type'];
        $this->attribute = $post['size'] . ' MB';
        // echo $this->attribute;
    }
    function insert()
    {
        // $table = $this->table;

        $myArr = array(
            "sku" =>  $this->sku,
            "name" =>  $this->name,
            "price" =>  $this->price,
            "type" =>  $this->type,
            "attribute" =>  $this->attribute

        );
        // print_r($myArr);
        $this->create($myArr, $this->table);
    }
}



class Furniture extends Product
{
    function __construct($post)
    {
        parent::__construct();

        $this->sku = $post['sku'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = $post['type'];


        $this->attribute = $post['height'] . 'x' . $post['width'] . 'x' . $post['length'] . ' CM';
    }
    function insert()
    {
        // $table = $this->table;

        $myArr = array(
            "sku" =>  $this->sku,
            "name" =>  $this->name,
            "price" =>  $this->price,
            "type" =>  $this->type,
            "attribute" =>  $this->attribute

        );
        // print_r($myArr);
        $this->create($myArr, $this->table);
    }
}
