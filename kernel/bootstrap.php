<?php

require('lib/Emergence.class.php');
require('lib/Debug.class.php');
require('lib/DB.class.php');
require('lib/File.class.php');
require('lib/Site.class.php');
require('lib/SiteCollection.class.php');
require('lib/SiteFile.class.php');

include('Site.config.php');

// load MICS-compatibility layer
require('lib/MICS.class.php');
MICS::initialize();


Site::initialize();
