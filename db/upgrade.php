<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * zebra theme config page
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
 
function xmldb_theme_zebra_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2011111004) { // New Settings in 2.1
        $currentsetting = get_config('theme_zebra');

        // Create linkcolor
        set_config('linkcolor', $currentsetting->firstcolor, 'theme_zebra');
        // Remove firstcolor
        unset_config('firstcolor', 'theme_zebra');

        // Create hovercolor
        set_config('hovercolor', $currentsetting->secondcolor, 'theme_zebra');
        // Remove secondcolor
        unset_config('secondcolor', 'theme_zebra');

        // Create fontcolor
        set_config('fontcolor', $currentsetting->thirdcolor, 'theme_zebra');
        // Remove thirdcolor
        unset_config('third', 'theme_zebra');

        // Create contentbgcolor
        set_config('hovercolor', $currentsetting->fourthcolor, 'theme_zebra');
        // Remove fourthcolor
        unset_config('fourthcolor', 'theme_zebra');

        // Create columnbgcolor
        set_config('columnbgcolor', $currentsetting->fifthcolor, 'theme_zebra');
        // Remove fifthcolor
        unset_config('fifthcolor', 'theme_zebra');

        // Create headerbgcolor
        set_config('headerbgcolor', $currentsetting->sixthcolor, 'theme_zebra');
        // Remove sixthcolor
        unset_config('sixthcolor', 'theme_zebra');

        // Create footerbgcolor
        set_config('footerbgcolor', $currentsetting->seventhcolor, 'theme_zebra');
        // Remove seventhcolor
        unset_config('seventhcolor', 'theme_zebra');
        
        // Upgrade version number
        upgrade_plugin_savepoint(true, 2011111004, 'theme', 'zebra');
    }

    if ($oldversion < 2011120500) { // New Settings in 2.1.1
        $currentsetting = get_config('theme_zebra');

        // Remove onecolmax
        unset_config('onecolmax', 'theme_zebra');

        // Remove twocolmax
        unset_config('twocolmax', 'theme_zebra');

        // Create pagemaxwidth
        set_config('pagemaxwidth', $currentsetting->threecolmax, 'theme_zebra');
        // Remove threecolmax
        unset_config('threecolmax', 'theme_zebra');
    }

	if ($oldversion < 2012011500) { // New Settings in 2.2.0
		$currentsetting = get_config('theme_zebra');

		// Create userespond
		set_config('userespond', 0, 'theme_zebra');

		// Create usecf
		set_config('usecf', 0, 'theme_zebra');

		// Create maxcfversion
		set_config('maxcfversion', 6, 'theme_zebra');

		upgrade_plugin_savepoint(true, 2012011500, 'theme', 'zebra');
	}
 
    return true;
}