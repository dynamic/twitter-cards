<?php

class TwitterCardExtension extends DataExtension {
	
	/**
	 * Determines the twitter card type identifier for this object
	 * Can be overwriter in descendant classes
	 * @return string
	 */
	public function getTCType() {
		return TCTypes::DefaultType;
	}
	
}