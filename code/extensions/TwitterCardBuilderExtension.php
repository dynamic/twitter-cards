<?php

class TwitterCardBuilderExtension extends Extension {

	/**
	 * add twitter:site tag
	**/
    function updateApplicationMetaTags(&$tags, $siteconfig) {
        $this->owner->AppendTag($tags, 'twitter:site', $siteconfig->TwitterUsername);
    }
    
    /**
     * add twitter:card type tag
    **/
    function updateDefaultMetaTags(&$tags, $page) {
    	$this->owner->AppendTag($tags, 'twitter:card', $page->getTCType());
        //$this->owner->AppendTag($tags, 'og:page-menu-name', $page->MenuTitle);
    }

}