<?php

namespace Training\ProductList\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class Product extends Template
{
    protected $productCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionFactory,
        array $data = []
    ){
        $this->productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getProducts()
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect(['name','price','sku','image']);
        $collection->setPageSize(5);

        return $collection;
    }
}