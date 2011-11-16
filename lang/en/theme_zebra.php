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
                <h2>Don\'t forget to customize your settings!</h2>
                <a href="../admin/settings.php?section=themesettingzebra">Zebra Theme Settings</a>
	</div>
</div>
';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['notes'] = 'Theme notes';
$string['notesdesc'] = '<p>To apply any settings simply press "Save Changes" at the bottom of this page.</p><p>If you do not have Theme Designer Mode enabled you may need to visit the <a href="purgecaches.php">Purge All Caches</a> admin page to force the refresh.</p>';

$string['headerinfo'] = 'Header settings';
$string['headerinfodesc'] = '<p>Change the settings for the header region.</p>';

$string['logourl'] = 'Logo URL';
$string['logourldesc'] = '<p>Input the URL to your logo.</p><p>This can be used in one of three protocol types:<ul><li><p>Moodle Output (relative to theme):</p><p><code>logo/companylogo</code></p></li><li><p>Full path:</p><p><code>http://domain.com/theme/image.php?theme=zebra&image=logo&rev=1&component=theme</code><br /><code>http://domain.com/path/to/image.jpg</code></p></li><li><p>Relative Path:</p><p><code>/path/to/file/companylogo.png</code></p></li></ul></p>';
$string['logourlheight'] = 'Logo image height';
$string['logourlheightdesc'] = '<p>Minimum height for header to provide space for logo image.</p><p>If you do not have a logo you should still leave this at the default to provide space for the profile block.</p>';
$string['backgroundurl'] = 'Background URL';
$string['backgroundurldesc'] = '<p>Input the URL to your body background image.</p><p>This can be used in Moodle Output format (relative to theme), full path, or relative path.</p>';

$string['headeralt'] = 'Alternate text';
$string['headeraltdesc'] = '<p>Text to use instead of the Site Name.</p><p>Hint: Use a space (<code>&amp;nbsp;</code>) to display nothing.</p>';

$string['colorsinfo'] = 'Colors settings';
$string['colorsinfodesc'] = '<p>Change the settings for the colors of the page.</p><p>You can use any valid color type like <code>red</code>, <code>#FF0000</code>, <code>rgb(0, 255, 255)</code>, or <code>rgba(0, 255, 255, 1.0)</code>.</p>';

$string['bodybgcolor'] = 'Body background color';
$string['bodybgcolordesc'] = '<p>Main background color of the page.</p><p>This is applied to the <code>&lt;body&gt;</code> tag.</p>';
$string['linkcolor'] = 'Links color';
$string['linkcolordesc'] = '<p>Links and menu color.</p><p>This is applied to all links (in and out of page content) except the custommenu and the custommenu background with the exception of the "date".</p>';
$string['hovercolor'] = 'Hover color';
$string['hovercolordesc'] = '<p>Hovering color.</p><p>This is applied to all links (in and out of the page content) and the custommenu.</p>';
$string['fontcolor'] = 'Font color';
$string['fontcolordesc'] = '<p>Primary font and label color.</p><p>This is applied to all labels and fonts that do not have a specific class that overrides the color like <code>.warning</code> or <code>.notifysuccess</code>.  This is also applied to the background color of the "date" on the custommenu.</p>';
$string['contentbgcolor'] = 'Page background color';
$string['contentbgcolordesc'] = '<p>Content background color.</p><p>This is applied to different elements depending on the current view (please see pagelayout.css for more details) but generally this is the content of the page.  This is also applied to the custommenu links color.</p>';
$string['columnbgcolor'] = 'Columns background color';
$string['columnbgcolordesc'] = '<p>Column(s) background color.</p><p>This is applied to different elements depending on the current view (please see pagelayout.css for more details) but generally this is the region-pre and region-post (a.k.a. block areas).</p>';
$string['headerbgcolor'] = 'Header background color';
$string['headerbgcolordesc'] = '<p>Header background color.</p>';
$string['footerbgcolor'] = 'Footer background color';
$string['footerbgcolordesc'] = '<p>Footer background color.</p><p>Using <code>transparent</code> will cause the footer to display the value of <code>contentbgcolor</code> not <code>bodybgcolor</code>.  This should be set to the same value as <code>bodybgcolor</code> for a transparent effect.</p>';

$string['schemeinfo'] = 'Color scheme settings';
$string['schemeinfodesc'] = '<p>Change the settings for the color scheme of the page.</p>';

$string['colorscheme'] = 'Color scheme';
$string['colorschemedesc'] = '<p>Gradients and highlights.</p><p>Note: Safari 4 does not accept a fixed height gradient so it will always display as "none".</p>';
$string['menucolorscheme'] = 'Menu color scheme';
$string['menucolorschemedesc'] = '<p>Gradient of menu.</p>';

$string['columninfo'] = 'Layout Settings';
$string['columninfodesc'] = '<p>Change the settings for the layout of the page.  To test your settings simply resize your browser window or rotate the orientation of your phone/tablet.</p><p>Note: you can exclude a layout by overlapping the min and max values of the other layouts.</p>';

$string['onecolmax'] = 'One column max width';
$string['onecolmaxdesc'] = '<p>Max width for one column layout.</p><p>Display order is:</p><img src="../theme/image.php?theme=zebra&image=core/one_column&component=theme" style="float:left; margin-right:25px;" /><ul><li>top: <code>region-main</code></li><li>middle: <code>region-pre</code></li><li>bottom: <code>region-post</code></li></ul>';
$string['twocolmin'] = 'Two column min width';
$string['twocolmindesc'] = '<p>Min width for two column layout.</p>';
$string['twocolmax'] = 'Two column max width';
$string['twocolmaxdesc'] = '<p>Max width for two column layout</p><p>Display order is:</p><img src="../theme/image.php?theme=zebra&image=core/two_columns&component=theme" style="float:left; margin-right:25px;" /><ul><li>left-top: <code>region-pre</code></li><li>left-bottom: <code>region-post</code></li><li>right: <code>region-main</code></li></ul>';
$string['threecolmin'] = 'Three column min width';
$string['threecolmindesc'] = '<p>Min width for three column layout.</p>';
$string['threecolmax'] = 'Three column max width';
$string['threecolmaxdesc'] = '<p>Max width for three column layout</p><p>Display order is:</p><img src="../theme/image.php?theme=zebra&image=core/three_columns&component=theme" style="float:left; margin-right:25px;" /><ul><li>left: <code>region-pre</code></li><li>center: <code>region-main</code></li><li>right: <code>region-post</code></li></ul>';

$string['miscinfo'] = 'Misc. settings';
$string['miscinfodesc'] = '<p>Change the settings for miscellaneous things.</p>';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = '<p>Input any custom CSS here.</p><p>CSS input here is the very last thing called on the page and should not be overwritten by any other rules.  If your rules are not displaying please try the following:<ol><li>check your syntax</li><li>add <code>!important</code> to your rule</li><li>manually append the rule to extra.css</li></ol></p>';

$string['enablezoom'] = 'Enable page zoom';
$string['enablezoomdesc'] = '<p>Enable page zooming for mobile devices.</p>';

$string['branding'] = 'Hide footer logos';
$string['brandingdesc'] = '<p>Hide the branded logos in the footer.</p><p>These links are to sites that either sponsored or contributed directly to development of this theme.  Full credits can be found in the readme when selecting this theme.</p>';

$string['menuhome'] = 'Home';
$string['menumyhome'] = 'My Home';
$string['menutoday'] = 'Today\'s date';