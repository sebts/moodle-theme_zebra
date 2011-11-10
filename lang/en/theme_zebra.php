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
 * zebra theme English language strings
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Zebra';
$string['choosereadme'] = '<div class="clearfix">
	<h1><span style="color:red;">Z</span><span style="color:blue;">e</span><span style="color:green;">b</span><span style="color:teal;">r</span><span style="color:orange;">a</span></h1>
        <hr>
	<div class="theme_screenshot" style="float:right;margin-left:4px;">
		<img src="zebra/pix/screenshot.jpg" />
	</div>
	<div class="theme_description">
	    <p><span class="warning" style="color:orange;">Warning:</span> Zebra relies heavily on CSS3 and is <u>NOT recommended</u> for IE6 or below, but then, neither is Moodle 2.0+.</p>
	    <br />
		<h2>About</h2>
		<p>Zebra uses CSS3 @media queries to dynamically reflow the page layout based on screen width.  This custom 2-1-3 (middle, left, right) page layout can display 1, 2, or 3 columns depending on screen width.  It is also compatible with .side-pre-only, .side-post-only, and .content-only body classes in all 3 layouts.</p>
        <br />
        <p>Zebra also provides extensive customization via its settings page, including colors, logos, reflow settings, mobile settings, and a custom CSS field.</p>
		<h2>Parents</h2>
		<p>This theme is built upon both Base and integrates the pagelayout and dock from Rebase.</p>
		<h2>Credits</h2>
		<p>Zebra 2.0 is based off of the original Aardvark 1.2 (1.9) by Shaun Daubney @ Newbury-College, Zebra 1.4 (1.9) by me (Danny Wahl) @ LDi, Aardvark_makeover (2.0) by Mary Evans @ Visible-Expressions, and whatever themes those themes are based off of.</p>
		<h2>License</h2>
		<p>This, and all other themes included in the Moodle core, are licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p>
		<br />
		<p>The underlying page layout, designed independently of Moodle 2.0, and capable of being used standalone, is also licensed under the GNU General Public License.</p>
		<h2>Theme Discussion Forum:</h2>
		<p><a href="http://moodle.org/mod/forum/discuss.php?d=174951">http://moodle.org/mod/forum/discuss.php?d=174951</a></p>
		<h2>Theme Credits</h2>
		<p><a href="http://iyware.com">Danny Wahl</a></p>
	</div>
</div>
';

$string['instructions'] = 'Instructions';
$string['instructionsdesc'] = 'Put instructions here';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['headerinfo'] = 'Header settings';
$string['headerinfodesc'] = 'Change the settings for the header region';

$string['logourl'] = 'Logo URL';
$string['logourldesc'] = 'Input the URL to your logo';
$string['logourlheight'] = 'Logo image height';
$string['logourlheightdesc'] = 'Minimum height for header to provide for logo image';
$string['backgroundurl'] = 'Background URL';
$string['backgroundurldesc'] = 'Input the URL to your body background image';

$string['headeralt'] = 'Alternate text';
$string['headeraltdesc'] = 'Text to use instead of a Header main. Hint: Use a space (&amp;nbsp;) to display nothing';

$string['colorsinfo'] = 'Colors settings';
$string['colorsinfodesc'] = 'Change the settings for the colors of the page';

$string['bodybgcolor'] = 'Body background color';
$string['bodybgcolordesc'] = 'Main background color';
$string['linkcolor'] = 'Links color';
$string['linkcolordesc'] = 'Links and menu color';
$string['hovercolor'] = 'Hover color';
$string['hovercolordesc'] = 'Hovering color';
$string['fontcolor'] = 'Font color';
$string['fontcolordesc'] = 'Labels and fonts color';
$string['contentbgcolor'] = 'Page background color';
$string['contentbgcolordesc'] = 'Content background color';
$string['columnbgcolor'] = 'Columns background color';
$string['columnbgcolordesc'] = 'Column(s) background color';
$string['headerbgcolor'] = 'Header background color';
$string['headerbgcolordesc'] = 'Header background color';
$string['footerbgcolor'] = 'Footer background color';
$string['footerbgcolordesc'] = 'Footer background color.';

$string['schemeinfo'] = 'Color scheme settings';
$string['schemeinfodesc'] = 'Change the settings for the color scheme of the page';

$string['colorscheme'] = 'Color scheme';
$string['colorschemedesc'] = 'Gradients and highlights';
$string['menucolorscheme'] = 'Menu color scheme';
$string['menucolorschemedesc'] = 'Gradient of menu';

$string['columninfo'] = 'Layout Settings';
$string['columninfodesc'] = 'Change the settings for the layout of the page';

$string['onecolmax'] = 'One column max width';
$string['onecolmaxdesc'] = 'Max width for one column layout';
$string['twocolmin'] = 'Two column min width';
$string['twocolmindesc'] = 'Min width for two column layout';
$string['twocolmax'] = 'Two column max width';
$string['twocolmaxdesc'] = 'Max width for two column layout';
$string['threecolmin'] = 'Three column min width';
$string['threecolmindesc'] = 'Min width for three column layout';
$string['threecolmax'] = 'Three column max width';
$string['threecolmaxdesc'] = 'Max width for three column layout';

$string['miscinfo'] = 'Misc. settings';
$string['miscinfodesc'] = 'Change the settings for miscellaneous things';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Input any custom CSS here';

$string['enablezoom'] = 'Enable page zoom';
$string['enablezoomdesc'] = 'Enable page zooming for mobile devices';

$string['branding'] = 'Hide footer logos';
$string['brandingdesc'] = 'Hide the branded logos in the footer';

$string['menuhome'] = 'Home';
$string['menumyhome'] = 'My Home';
$string['menutoday'] = 'Today\'s date';