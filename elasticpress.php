<?php

/**
 * Plugin Name: ElasticPress
 * Description: Integrate WordPress search with Elasticsearch
 * Version:     1.7
 * Author:      Aaron Holbrook, Taylor Lovett, Matt Gross, 10up
 * Author URI:  http://10up.com
 * License:     GPLv2 or later
 *
 * This program derives work from Alley Interactive's SearchPress
 * and Automattic's VIP search plugin:
 *
 * Copyright (C) 2012-2013 Automattic
 * Copyright (C) 2013 SearchPress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once( 'classes/class-ep-config.php' );
require_once( 'classes/class-ep-api.php' );
require_once( 'classes/interface-ep-object-index.php' );
require_once( 'classes/class-ep-abstract-object-index.php' );
require_once( 'classes/class-ep-post-index.php' );
require_once( 'classes/class-ep-user-index.php' );
require_once( 'classes/class-ep-object-manager.php' );
require_once( 'classes/class-ep-sync-manager.php' );
require_once( 'classes/class-ep-elasticpress.php' );
require_once( 'classes/class-ep-wp-query-integration.php' );
require_once( 'classes/class-ep-wp-date-query.php' );
require_once( 'classes/class-ep-user-query-integration.php' );

/**
 * WP CLI Commands
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once 'bin/wp-cli.php';
}
