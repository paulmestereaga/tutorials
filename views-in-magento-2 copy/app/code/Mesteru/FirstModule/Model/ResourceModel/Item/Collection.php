<?php
namespace Mesteru\FirstModule\Model\ResourceModel\Item;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mesteru\FirstModule\Model\Item;
use Mesteru\FirstModule\Model\ResourceModel\Item as ItemResource;
 
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
 
    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}