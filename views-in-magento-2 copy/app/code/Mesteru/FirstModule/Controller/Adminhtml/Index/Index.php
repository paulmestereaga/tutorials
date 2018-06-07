<?php
namespace Mesteru\FirsModule\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $result =  $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World');
        return $result;
    }
}