<?php
include "products.php";

class Action
{
    protected $table = "products";

    function add($post)
    {
        // new Book or 
        $class = new ReflectionClass($post['type']);
        $obj = $class->newInstance($post);



        $obj->insert();
    }
    function show()
    {
        $obj = new Query;
        return $obj->read($this->table);
    }
    function remove($post)
    {
        $obj = new Query;
        $obj->delete($this->table, "sku", $post);
    }
}
$obj = new Action;
