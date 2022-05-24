<?php
include "products.php";

class Action extends Query
{
    protected $table = "products";

    function add($post)
    {
        // new Book or 
        $class = new ReflectionClass($post['type']);
        $obj = $class->newInstance($post);


        if ($this->checkPK($post['sku'], "sku", $this->table)) {
            header("location:add_product.php?error=SKU exists");
            // return $post;
        } else {
            $obj->insert();
        }


    }
    function show()
    {
        return $this->read($this->table);
    }
    function remove($post)
    {
        $this->delete($this->table, "sku", $post);
    }
}
$obj = new Action;
