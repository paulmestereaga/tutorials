<?php
namespace Mesteru\FirstModule\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Item extends AbstractModel
{
    protected $_eventPrefix = 'mesteru_sample_item';
 
    protected function _construct()
    {
        $this->_init(\Mesteru\FirstModule\Model\ResourceModel\Item::class);
    }
}