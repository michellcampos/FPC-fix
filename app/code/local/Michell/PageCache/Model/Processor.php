<?php

class Michell_PageCache_Model_Processor extends Enterprise_PageCache_Model_Processor
{
    protected function _createRequestIds()
    {
        parent::_createRequestIds();
        $_pageUrl = $this->_getFullPageUrl();
        if ($_pageUrl) {
            $_theme = Mage::getSingleton('core/design_package')->getTheme('frontend');
            $this->_requestId .= $_theme;
            $this->_requestCacheId  = $this->prepareCacheId($this->_requestId);
        }
        return $this;
    }
}
