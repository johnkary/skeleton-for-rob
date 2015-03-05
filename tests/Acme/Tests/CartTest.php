<?php

namespace Acme\Tests;

use Acme\Entity\Cart;
use Acme\Entity\Product;
use Acme\Entity\User;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function testCanAddProduct()
    {
        $user = new User();
        $cart = new Cart($user);

        $product = new Product();
        $cart->addProduct($product);

        $this->assertCount(1, $cart->getProducts());
    }

    public function testCanGetTotal()
    {
        $user = new User();
        $cart = new Cart($user);

        $product = new Product();
        $product->setPrice(20.00);
        $cart->addProduct($product);

        $product = new Product();
        $product->setPrice(15.00);
        $cart->addProduct($product);

        $this->assertSame(35.00, $cart->getTotalPrice());
    }
}
