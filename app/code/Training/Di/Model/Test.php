<?php


namespace Training\Di\Model;


use Magento\Catalog\Api\ProductRepositoryInterface;

class Test
{
    protected $productRepository;
    protected $someStringParameter;
    protected $someArray;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        $someStringParameter,
        $someArray
    )
    {
        $this->productRepository = $productRepository;
        $this->someStringParameter = $someStringParameter;
        $this->someArray = $someArray;
    }
}