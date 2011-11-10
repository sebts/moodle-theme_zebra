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
	<h1>Zebra</h1>
        <hr>
	<div style="float:right;margin-left:4px;">
		<img src="zebra/pix/screenshot.jpg" />
	</div>
	<div>
	    <p><span class="warning">Warning:</span> Zebra 2.0+ relies heavily on CSS3 and is <u>NOT recommended</u> for IE6 or below, but then, neither is Moodle 2.0+.</p>
	    <br />
		<h2>About</h2>
		<p>Zebra uses CSS3 <code>@media</code> queries to dynamically reflow the page layout based on screen width.  This custom 2-1-3 (middle, left, right) page layout can display 1, 2, or 3 columns depending on screen width.  It is also compatible with <code>.side-pre-only</code>, <code>.side-post-only</code>, and <code>.content-only</code> body classes in all 3 layouts.</p>
        <br />
        <p>Zebra also provides extensive customization via its settings page, including colors, logos, reflow settings, mobile settings, and a custom CSS field.</p>
		<h2>Parents</h2>
		<p>This theme is built upon Base and integrates the pagelayout and dock from Rebase.</p>
		<h2>Credits</h2>
		<p>Zebra 2.0 is based off of the original Aardvark 1.2 (1.9) by Shaun Daubney @ Newbury-College, Zebra 1.4 (1.9) by me (Danny Wahl) @ iyWare, Aardvark_makeover (2.0) by Mary Evans @ Visible-Expressions, and whatever themes those themes are based off of.</p>
		<h2>License</h2>
		<p>This, and all other themes included in the Moodle core, are licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p>
		<br />
		<p>The underlying page layout, designed independently of Moodle 2.0 by me (Danny Wahl) @ iyWare, and capable of being used standalone, is also licensed under the GNU General Public License.</p>
		<h2>Theme Discussion Forum:</h2>
		<p><a href="http://moodle.org/mod/forum/discuss.php?d=174951">http://moodle.org/mod/forum/discuss.php?d=174951</a></p>
		<h2>Theme Plugin URL:</h2>
                <p><a href="http://moodle.org/plugins/view.php?plugin=theme_zebra">http://moodle.org/plugins/view.php?plugin=theme_zebra</a></p>
                <h2>Theme Credits</h2>
		<p><a href="http://iyware.com">Danny Wahl</a></p>
	</div>
</div>
';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['headerinfo'] = 'Header settings';
$string['headerinfodesc'] = 'Change the settings for the header region.';

$string['logourl'] = 'Logo URL';
$string['logourldesc'] = 'Input the URL to your logo.  This should be used in Moodle pix format (e.g. not a full path).';
$string['logourlheight'] = 'Logo image height';
$string['logourlheightdesc'] = 'Minimum height for header to provide space for logo image.  If you do not have a logo you should still leave this at the default to provide space for the profile block.';
$string['backgroundurl'] = 'Background URL';
$string['backgroundurldesc'] = 'Input the URL to your body background image, this should be used in Moodle pix format (e.g. not a full path).';

$string['headeralt'] = 'Alternate text';
$string['headeraltdesc'] = 'Text to use instead of the Site Name. Hint: Use a space (<code>&amp;nbsp;</code>) to display nothing.';

$string['colorsinfo'] = 'Colors settings';
$string['colorsinfodesc'] = '<p>Change the settings for the colors of the page.</p><p>You can use any valid color type like <code>red</code>, <code>#FF0000</code>, <code>rgb(0, 255, 255)</code>, or <code>rgba(0, 255, 255, 1.0)</code>.</p>';

$string['bodybgcolor'] = 'Body background color';
$string['bodybgcolordesc'] = 'Main background color of the page.  This is applied to the <code>&lt;body&gt;</code> tag.';
$string['linkcolor'] = 'Links color';
$string['linkcolordesc'] = 'Links and menu color.  This is applied to all links (in and out of page content) except the custommenu and the custommenu background with the exception of the "date".';
$string['hovercolor'] = 'Hover color';
$string['hovercolordesc'] = 'Hovering color.  This is applied to all links (in and out of the page content) and the custommenu.';
$string['fontcolor'] = 'Font color';
$string['fontcolordesc'] = 'Primary font and label color.  This is applied to all labels and fonts that do not have a specific class that overrides the color like <code>.warning</code> or <code>.notifysuccess</code>.  This is also applied to the background color of the \"date\" on the custommenu.';
$string['contentbgcolor'] = 'Page background color';
$string['contentbgcolordesc'] = 'Content background color.  This is applied to different elements depending on the current view (please see pagelayout.css for more details) but generally this is the content of the page.  This is also applied to the custommenu links color.';
$string['columnbgcolor'] = 'Columns background color';
$string['columnbgcolordesc'] = 'Column(s) background color.  This is applied to different elements depending on the current view (please see pagelayout.css for more details) but generally this is the region-pre and region-post (a.k.a. block areas)';
$string['headerbgcolor'] = 'Header background color';
$string['headerbgcolordesc'] = 'Header background color.';
$string['footerbgcolor'] = 'Footer background color';
$string['footerbgcolordesc'] = 'Footer background color.  Using <code>transparent</code> will cause the footer to display the value of <code>contentbgcolor</code> not <code>bodybgcolor</code>.  This should be set to the same value as <code>bodybgcolor</code> for a transparent effect.';

$string['schemeinfo'] = 'Color scheme settings';
$string['schemeinfodesc'] = 'Change the settings for the color scheme of the page.';

$string['colorscheme'] = 'Color scheme';
$string['colorschemedesc'] = 'Gradients and highlights.  Note: Safari 4 does not accept a fixed height gradient so it will always display as "none".';
$string['menucolorscheme'] = 'Menu color scheme';
$string['menucolorschemedesc'] = 'Gradient of menu.';

$string['columninfo'] = 'Layout Settings';
$string['columninfodesc'] = 'Change the settings for the layout of the page.  Note: you can exclude a layout by overlapping the min and max values of the other layouts.';

$string['onecolmax'] = 'One column max width';
$string['onecolmaxdesc'] = 'Max width for one column layout.  Display order is top: <code>region-main</code> middle: <code>region-pre</code> bottom: <code>region-post</code>';
$string['twocolmin'] = 'Two column min width';
$string['twocolmindesc'] = 'Min width for two column layout.  Display order is left-top: <code>region-pre</code> left-bottom: <code>region-post</code> right: <code>region-main</code>';
$string['twocolmax'] = 'Two column max width';
$string['twocolmaxdesc'] = 'Max width for two column layout';
$string['threecolmin'] = 'Three column min width';
$string['threecolmindesc'] = 'Min width for three column layout.  Display order is left: <code>region-pre</code> center: <code>region-main</code> right: <code>region-post</code>.';
$string['threecolmax'] = 'Three column max width';
$string['threecolmaxdesc'] = 'Max width for three column layout';

$string['miscinfo'] = 'Misc. settings';
$string['miscinfodesc'] = 'Change the settings for miscellaneous things.';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Input any custom CSS here.';

$string['enablezoom'] = 'Enable page zoom';
$string['enablezoomdesc'] = 'Enable page zooming for mobile devices.';

$string['branding'] = 'Hide footer logos';
$string['brandingdesc'] = 'Hide the branded logos in the footer.  These links are to sites that either sponsored or contributed development of this theme.  Full credits can be found in the readme when selecting this theme.';

$string['menuhome'] = 'Home';
$string['menumyhome'] = 'My Home';
$string['menutoday'] = 'Today\'s date';