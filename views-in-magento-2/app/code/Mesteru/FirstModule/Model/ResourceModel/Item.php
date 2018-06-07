<?php
namespace Mesteru\FirstModule\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mesteru_sample_item', 'id');
    }
}