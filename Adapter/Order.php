<?php
namespace DesignPatterns\Adapter;

class Order
{
    protected $orderNumber;
    protected $price;
    protected $products;

    public function addProduct(string $product)
    {
        $this->products[] = $product;
        return $this;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getProducts()
    {
        return $this->products;
    }

    public function setOrderNumber($time)
    {
        $this->orderNumber = $time;
        return $this;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }
    public function setProduct(string $product)
    {
        $this->product = $product;
        return $this;
    }
}