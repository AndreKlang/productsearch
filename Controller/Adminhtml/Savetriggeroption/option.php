<?php

namespace Klevu\Search\Controller\Adminhtml\Savetriggeroption;
use Klevu\Search\Helper\Config;
class option extends \Magento\Backend\App\Action {
    /**
     * @var \Klevu\Search\Helper\Config
     */
    protected $_searchHelperConfig;

    public function __construct(\Magento\Backend\App\Action\Context $context,\Klevu\Search\Helper\Config $searchHelperConfig)
    {
        $this->_searchHelperConfig = $searchHelperConfig;

        parent::__construct($context);
    }

    public function execute() {
        $trigger_options = $this->getRequest()->getParam("trigger_options");
        $this->_searchHelperConfig->saveTriggerOptions($trigger_options);
    }
}
