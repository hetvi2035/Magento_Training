<?php

namespace Training\Blog\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // Create page
        $resultPage = $this->resultPageFactory->create();

        // Set page title
        $resultPage->getConfig()->getTitle()->set(__('Blog Page'));

        // Return page
        return $resultPage;
    }
}