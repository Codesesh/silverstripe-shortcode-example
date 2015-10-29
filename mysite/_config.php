<?php

global $project;
$project = 'mysite';

ShortcodeParser::get('default')->register('my_button', array('Page', 'MyButton'));

global $database;
$database = 'membertest';

require_once('conf/ConfigureFromEnv.php');



// Set the site locale
i18n::set_locale('en_US');

