<?php

class Marvelic_Sample_Sample_ConfigController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction ()
    {
        $this->_title($this->__('Sample Config'));
        $this->_initAction();
        // $this->_addContent($this->getLayout()
            // ->createBlock('seo/adminhtml_template'));
        $this->renderLayout();
    }

}