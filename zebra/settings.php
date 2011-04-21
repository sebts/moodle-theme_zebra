<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

$name = 'theme_zebra/logourl';
$title = get_string('logourl','theme_zebra');
$description = get_string('logourldesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, 'logo/zebra.png', PARAM_URL);
$settings->add($setting);

$name = 'theme_zebra/logourlheight';
$title=get_string('logourlheight','theme_zebra');
$description = get_string('logourlheightdesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_CLEAN, 5);
$settings->add($setting);

$name = 'theme_zebra/headeralt';
$title = get_string('headeralt','theme_zebra');
$description = get_string('headeraltdesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '0', PARAM_CLEAN, 20);
$settings->add($setting);

$name = 'theme_zebra/backgroundcolor';
$title=get_string('backgroundcolor','theme_zebra');
$description = get_string('backgroundcolordesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '#FFFFFF', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_zebra/firstcolor';
$title=get_string('firstcolor','theme_zebra');
$description = get_string('firstcolordesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '#003333', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_zebra/secondcolor';
$title=get_string('secondcolor','theme_zebra');
$description = get_string('secondcolordesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '#660066', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_zebra/thirdcolor';
$title=get_string('thirdcolor','theme_zebra');
$description = get_string('thirdcolordesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '#333333', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_zebra/fourthcolor';
$title=get_string('fourthcolor','theme_zebra');
$description = get_string('fourthcolordesc', 'theme_zebra');
$setting = new admin_setting_configtext($name, $title, $description, '#CCCCCC', PARAM_CLEAN, 10);
$settings->add($setting);

$name = 'theme_zebra/colorscheme';
$title=get_string('colorscheme','theme_zebra');
$description = get_string('colorschemedesc', 'theme_zebra');
$default = 'dark';
$choices = array('dark', 'light');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

$name = 'theme_zebra/menucolorscheme';
$title=get_string('menucolorscheme','theme_zebra');
$description = get_string('menucolorschemedesc', 'theme_zebra');
$default = 'dark';
$choices = array('dark', 'light');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

}