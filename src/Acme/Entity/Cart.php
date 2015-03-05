<?php

namespace Acme\Entity;

class Cart
{
    /**
     * @var Product[]
     */
    private $products;
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->products = [];
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotalPrice()
    {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
