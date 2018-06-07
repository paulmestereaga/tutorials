<?php
namespace Mesteru\FirstModule\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2', '<')) {
            $setup->getConnection()->update(
                $setup->getTable('mesteru_sample_item'),
                [
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim maximus lacus, id aliquet tortor dignissim vitae. Mauris nec aliquam est.'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }

        $setup->endSetup();
    }
}