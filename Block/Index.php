<?php

namespace Training\Blog\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Training\Blog\Model\Message;

class Index extends Template
{
    protected Message $message;

    public function __construct(
        Context $context,
        Message $message,
        array $data = []
    ) {
        $this->message = $message;
        parent::__construct($context, $data);
    }

    public function getCustomMessage(): string
    {
        return $this->message->getMessage();
    }

    public function getCurrentDate(): string
    {
        return date('Y-m-d');
    }
}