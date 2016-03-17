<?php

// Etape 1
require_once locate_template ( '/lib/init.php' ); // Initial theme setup and constants
require_once locate_template ( '/lib/scripts.php' ); // Scripts and stylesheets

// Etape 2
require_once locate_template ( '/lib/custom_types.php' ); // Post Types
require_once locate_template ( '/lib/taxonomies.php' ); // Taxonomies

// Etape 3
//require_once locate_template ( '/lib/metaboxes_examples.php' ); // Metaboxes Examples
require_once locate_template ( '/lib/metaboxes.php' ); // Metaboxes
require_once locate_template ( '/lib/utils.php' ); // Utils methods
require_once locate_template ( '/admin/admin-init.php' ); // Options framework Redux