<?php
namespace Lukas\MyModule\Plugin;

class Product
{

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result . ' ~.~';
    }
}
