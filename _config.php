<?php

// twitter cards for og
Object::add_extension('SiteConfig', 'TwitterSiteConfig');
Object::add_extension('Page', 'TwitterCardExtension');
Object::add_extension('OpenGraphBuilder', 'TwitterCardBuilderExtension');