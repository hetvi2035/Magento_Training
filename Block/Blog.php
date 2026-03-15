<?php

namespace Training\Blog\Block;

use Magento\Framework\View\Element\Template;
use Training\Blog\Model\BlogService;

class Blog extends Template
{
    protected $blogService;

    public function __construct(
        Template\Context $context,
        BlogService $blogService,
        array $data = []
    ) {
        $this->blogService = $blogService;
        parent::__construct($context, $data);
    }

    public function getBlogTitles()
    {
        return $this->blogService->getBlogTitles();
    }
}