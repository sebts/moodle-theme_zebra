<?php
 
function zebra_process_css($css, $theme) {

    if (!empty($theme->settings->logourl)) {
        $logourl = $theme->settings->logourl;
    } else {
        $logourl = null;
    }
    $css = zebra_set_logourl($css, $logourl);

    if (!empty($theme->settings->logourlheight)) {
        $logourlheight = $theme->settings->logourlheight;
    } else {
        $logourlheight = null;
    }
    $css = zebra_set_regionwidth($css, $logourlheight);

    if (!empty($theme->settings->backgroundcolor)) {
        $backgroundcolor = $theme->settings->backgroundcolor;
    } else {
        $backgroundcolor = null;
    }
    $css = zebra_set_backgroundcolor($css, $backgroundcolor);

    if (!empty($theme->settings->firstcolor)) {
        $firstcolor = $theme->settings->firstcolor;
    } else {
        $firstcolor = null;
    }
    $css = zebra_set_firstcolor($css, $firstcolor);

    if (!empty($theme->settings->secondcolor)) {
        $secondcolor = $theme->settings->secondcolor;
    } else {
        $secondcolor = null;
    }
    $css = zebra_set_secondcolor($css, $secondcolor);

    if (!empty($theme->settings->thirdcolor)) {
        $thirdcolor = $theme->settings->thirdcolor;
    } else {
        $thirdcolor = null;
    }
    $css = zebra_set_thirdcolor($css, $thirdcolor);

    if (!empty($theme->settings->fourthcolor)) {
        $fourthcolor = $theme->settings->fourthcolor;
    } else {
        $fourthcolor = null;
    }
    $css = zebra_set_fourthcolor($css, $fourthcolor);


    return $css;

};

function zebra_set_logourl($css, $logourl) {
    global $OUTPUT;
    $tag = '[[setting:logourl]]';
    $replacement = $logourl;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('logo/zebra', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function zebra_set_regionwidth($css, $logourlheight) {
    $tag = '[[setting:logourlheight]]';
    $replacement = $logourlheight;
    if (is_null($replacement)) {
        $replacement = 0;
    }
    $css = str_replace($tag, $replacement.'px', $css);
    return $css;
}

function zebra_set_backgroundcolor($css, $backgroundcolor) {
    $tag = '[[setting:backgroundcolor]]';
    $replacement = $backgroundcolor;
    if (is_null($replacement)) {
        $replacement = '#FFFFFF';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function zebra_set_firstcolor($css, $firstcolor) {
    $tag = '[[setting:firstcolor]]';
    $replacement = $firstcolor;
    if (is_null($replacement)) {
        $replacement = '#003333';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function zebra_set_secondcolor($css, $secondcolor) {
    $tag = '[[setting:secondcolor]]';
    $replacement = $secondcolor;
    if (is_null($replacement)) {
        $replacement = '#660066';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function zebra_set_thirdcolor($css, $thirdcolor) {
    $tag = '[[setting:thirdcolor]]';
    $replacement = $thirdcolor;
    if (is_null($replacement)) {
        $replacement = '#333333';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function zebra_set_fourthcolor($css, $fourthcolor) {
    $tag = '[[setting:fourthcolor]]';
    $replacement = $fourthcolor;
    if (is_null($replacement)) {
        $replacement = '#CCCCCC';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}