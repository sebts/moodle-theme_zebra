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
 * zebra theme library functions
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * This is the postprocess function for themes
 *
 * @param string $css Incoming CSS to process
 * @param stdClass $theme The theme object
 * @return string The processed CSS
 */
function zebra_process_css($css, $theme) {

    //Get the path to the logo url from settings
    if (!empty($theme->settings->logourl)) {
        $logourl = $theme->settings->logourl;
    } else {
        $logourl = null;
    }
    $css = zebra_set_logourl($css, $logourl);

    //Get the minimum header height from settings
    if (!empty($theme->settings->logourlheight)) {
        $logourlheight = $theme->settings->logourlheight;
    } else {
        $logourlheight = null;
    }
    $css = zebra_set_logourlheight($css, $logourlheight);

    //Get the path to the background url from settings
    if (!empty($theme->settings->backgroundurl)) {
        $backgroundurl = $theme->settings->backgroundurl;
    } else {
        $backgroundurl = null;
    }
    $css = zebra_set_backgroundurl($css, $backgroundurl);

    //Get color scheme type from settings
    if (!empty($theme->settings->colorscheme)) {
        $colorscheme = $theme->settings->colorscheme;
    } else {
        $colorscheme = null;
    }
    $css = zebra_set_colorscheme($css, $colorscheme);

    //Get menu color scheme type from settings
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    } else {
        $menucolorscheme = null;
    }
    $css = zebra_set_menucolorscheme($css, $menucolorscheme);

    //Get the background color from settings
    if (!empty($theme->settings->bodybgcolor)) {
        $bodybgcolor = $theme->settings->bodybgcolor;
    } else {
        $bodybgcolor = null;
    }
    $css = zebra_set_bodybgcolor($css, $bodybgcolor);

    //Get the first color value from settings
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = zebra_set_linkcolor($css, $linkcolor);

    //Get the second color value from settings
    if (!empty($theme->settings->hovercolor)) {
        $hovercolor = $theme->settings->hovercolor;
    } else {
        $hovercolor = null;
    }
    $css = zebra_set_hovercolor($css, $hovercolor);

    //Get the third color value from settings
    if (!empty($theme->settings->fontcolor)) {
        $fontcolor = $theme->settings->fontcolor;
    } else {
        $fontcolor = null;
    }
    $css = zebra_set_fontcolor($css, $fontcolor);

    //Get the fourth color value from settings
    if (!empty($theme->settings->contentbgcolor)) {
        $contentbgcolor = $theme->settings->contentbgcolor;
    } else {
        $contentbgcolor = null;
    }
    $css = zebra_set_contentbgcolor($css, $contentbgcolor);

    //Get the fifth color value from settings
    if (!empty($theme->settings->columnbgcolor)) {
        $columnbgcolor = $theme->settings->columnbgcolor;
    } else {
        $columnbgcolor = null;
    }
    $css = zebra_set_columnbgcolor($css, $columnbgcolor);

    //Get the max width for one column page layout from settings
    if (!empty($theme->settings->onecolmax)) {
        $onecolmax = $theme->settings->onecolmax;
    } else {
        $onecolmax = null;
    }
    $css = zebra_set_onecolmax($css, $onecolmax);

    //Get the sixth color value from settings
    if (!empty($theme->settings->headerbgcolor)) {
        $headerbgcolor = $theme->settings->headerbgcolor;
    } else {
        $headerbgcolor = null;
    }
    $css = zebra_set_headerbgcolor($css, $headerbgcolor);

    //Get the seventh color value from settings
    if (!empty($theme->settings->footerbgcolor)) {
        $footerbgcolor = $theme->settings->footerbgcolor;
    } else {
        $footerbgcolor = null;
    }
    $css = zebra_set_footerbgcolor($css, $footerbgcolor);

    //Get the min width for two column page layout from settings
    if (!empty($theme->settings->twocolmin)) {
        $twocolmin = $theme->settings->twocolmin;
    } else {
        $twocolmin = null;
    }
    $css = zebra_set_twocolmin($css, $twocolmin);

    //Get the max width for two column page layout from settings
    if (!empty($theme->settings->twocolmax)) {
        $twocolmax = $theme->settings->twocolmax;
    } else {
        $twocolmax = null;
    }
    $css = zebra_set_twocolmax($css, $twocolmax);

    //Get the min width for three column page layout from settings
    if (!empty($theme->settings->threecolmin)) {
        $threecolmin = $theme->settings->threecolmin;
    } else {
        $threecolmin = null;
    }
    $css = zebra_set_threecolmin($css, $threecolmin);

    //Get the max width for three column page layout from settings
    if (!empty($theme->settings->threecolmax)) {
        $threecolmax = $theme->settings->threecolmax;
    } else {
        $threecolmax = null;
    }
    $css = zebra_set_threecolmax($css, $threecolmax);

    //Get any extra css the user adds from settings
    if(!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = zebra_set_customcss($css, $customcss);

    return $css;
};

/**
 * Sets the logo url for the header
 *
 * @param string $css
 * @param mixed $logourl
 * @return string
 */
function zebra_set_logourl($css, $logourl) {
    global $OUTPUT;
    $tag = '[[setting:logourl]]';
    $replacement = $logourl;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('logo/logo', 'theme');
    }
    else {
        $replacement = $OUTPUT->pix_url("$logourl", 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the minimum height for the header
 *
 * @param string $css
 * @param mixed $logourlheight
 * @return string
 */
function zebra_set_logourlheight($css, $logourlheight) {
    $tag = '[[setting:logourlheight]]';
    $replacement = $logourlheight;
    if (is_null($replacement)) {
        $replacement = "100px";
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the body background image url
 *
 * @param string $css
 * @param mixed $bodybackgroundurl
 * @return string
 */
function zebra_set_backgroundurl($css, $backgroundurl) {
    global $OUTPUT;
    $tag = '[[setting:backgroundurl]]';
    $replacement = $backgroundurl;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('core/background', 'theme');
    }
    else {
        $replacement = $OUTPUT->pix_url("$backgroundurl", 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the primary background color used for body
 *
 * @param string $css
 * @param mixed $bodybgcolor
 * @return string
 */
function zebra_set_bodybgcolor($css, $bodybgcolor) {
    $tag = '[[setting:bodybgcolor]]';
    $replacement = $bodybgcolor;
    if (is_null($replacement)) {
        $replacement = '#DDDDDD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the first color used for custommenu and links
 *
 * @param string $css
 * @param mixed $linkcolor
 * @return string
 */
function zebra_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#234B6F';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the second color used for hovering
 *
 * @param string $css
 * @param mixed $hovercolor
 * @return string
 */
function zebra_set_hovercolor($css, $hovercolor) {
    $tag = '[[setting:hovercolor]]';
    $replacement = $hovercolor;
    if (is_null($replacement)) {
        $replacement = '#4E7BAE';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the third color used for font color
 *
 * @param string $css
 * @param mixed $fontcolor
 * @return string
 */
function zebra_set_fontcolor($css, $fontcolor) {
    $tag = '[[setting:fontcolor]]';
    $replacement = $fontcolor;
    if (is_null($replacement)) {
        $replacement = '#2F2F2F';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the fourth color used for main content background
 *
 * @param string $css
 * @param mixed $contentbgcolor
 * @return string
 */
function zebra_set_contentbgcolor($css, $contentbgcolor) {
    $tag = '[[setting:contentbgcolor]]';
    $replacement = $contentbgcolor;
    if (is_null($replacement)) {
        $replacement = '#F4F6F8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the fifth color used for columns (region-pre, region-post) background
 *
 * @param string $css
 * @param mixed $columnbgcolor
 * @return string
 */
function zebra_set_columnbgcolor($css, $columnbgcolor) {
    $tag = '[[setting:columnbgcolor]]';
    $replacement = $columnbgcolor;
    if (is_null($replacement)) {
        $replacement = '#F4F6F8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the sixth color used for the page-header background
 *
 * @param string $css
 * @param mixed $headerbgcolor
 * @return string
 */
function zebra_set_headerbgcolor($css, $headerbgcolor) {
    $tag = '[[setting:headerbgcolor]]';
    $replacement = $headerbgcolor;
    if (is_null($replacement)) {
        $replacement = 'transparent';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the seventh color used for the page-footer background
 *
 * @param string $css
 * @param mixed $footerbgcolor
 * @return string
 */
function zebra_set_footerbgcolor($css, $footerbgcolor) {
    $tag = '[[setting:footerbgcolor]]';
    $replacement = $footerbgcolor;
    if (is_null($replacement)) {
        $replacement = '#DDDDDD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


/**
 * Sets the gradient background color for blocks, navbar, etc.
 *
 * @param string $css
 * @param mixed $colorscheme
 * @return string
 */
function zebra_set_colorscheme($css, $colorscheme) {
    $tag = '[[setting:colorscheme]]';
    if (is_null($colorscheme)) {
        $replacement = 'transparent';
    }
    switch($colorscheme) {
        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.08)';
            break;

        case 'light':        
            $replacement = 'rgba(255, 255, 255, 0.2)';
            break;

        default:
            $replacement = 'transparent';
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the gradient background color for custommenu
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_menucolorscheme($css, $menucolorscheme) {
    $tag = '[[setting:menucolorscheme]]';
    if (is_null($menucolorscheme)) {
        $replacement = 'transparent';
    }
    switch($menucolorscheme) {
        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.4)';
            break;

        case 'light':
            $replacement = 'rgba(255, 255, 255, 0.3)';
            break;

        default:
            $replacement = 'transparent';
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the maximum width for one column page layout.
 * Should be the returned value of {@link zebra_set_twocolmin()}
 * minus 1. Default value should fit:
 * Smartphone portrait
 * 
 * @param string $css
 * @param mixed $onecolmax
 * @return string
 */
function zebra_set_onecolmax($css, $onecolmax) {
    $tag = '[[setting:onecolmax]]';
    $replacement = $onecolmax;
    if (is_null($replacement)) {
        $replacement = '599px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the minimum width for two column page layout.
 * Should be the returned value of {@link zebra_set_onecolmax()}
 * plus 1. Default value should fit:
 * Smartphone landscape
 * Tablet portrait
 * SDTV
 *
 * @param string $css
 * @param mixed $twocolmin
 * @return string
 */
function zebra_set_twocolmin($css, $twocolmin) {
    $tag = '[[setting:twocolmin]]';
    $replacement = $twocolmin;
    if (is_null($replacement)) {
        $replacement = '600px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the maximum width for two column page layout.
 * Should be the returned value of {@link zebra_set_threecolmin()}
 * minus 1.  Default value should fit:
 * Smartphone Landscape
 * Tablet portraid
 * SDTV
 *
 * @param string $css
 * @param mixed $twocolmax
 * @return string
 */
function zebra_set_twocolmax($css, $twocolmax) {
    $tag = '[[setting:twocolmax]]';
    $replacement = $twocolmax;
    if (is_null($replacement)) {
        $replacement = '799px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the minimum width for three column page layout.
 * Should be the returned value of {@link zebra_set_twocolmax()}
 * plus 1. Default value should fit:
 * Tablet landscape
 * HDTV
 * Monitor
 *
 * @param string $css
 * @param mixed $threecolmin
 * @return string
 */
function zebra_set_threecolmin($css, $threecolmin) {
    $tag = '[[setting:threecolmin]]';
    $replacement = $threecolmin;
    if (is_null($replacement)) {
        $replacement = '800px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the maximum width for three column page layout.
 * This is the max-width of #page, not body
 *
 * @param string $css
 * @param mixed $threecolmax
 * @return string
 */
function zebra_set_threecolmax($css, $threecolmax) {
    $tag = '[[setting:threecolmax]]';
    $replacement = $threecolmax;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets any extra css the user wants to display.
 * This is the absolutely last piece of CSS loaded
 *
 * @param string $css
 * @param mixed $customcss
 * @return string
 */
function zebra_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}