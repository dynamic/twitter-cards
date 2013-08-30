<?php
 
class TwitterSiteConfig extends DataExtension {
     
    static $db = array(
        'TwitterUsername' => 'Varchar'
    );
 
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Twitter", new TextField("TwitterUsername", "Twitter Username"));
    }
}