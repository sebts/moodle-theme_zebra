<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}

if (!empty($PAGE->theme->settings->headeralt)) {
    $headeralt = $PAGE->theme->settings->headeralt;
} else {
    $headeralt = $PAGE->heading;
}

echo $OUTPUT->doctype(); ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $PAGE->title; ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo $OUTPUT->pix_url('favicon/favicon', 'theme'); ?>" />
    <link rel="icon" href="<?php echo $OUTPUT->pix_url('favicon/favicon', 'theme'); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $OUTPUT->pix_url('favicon/apple-touch-icon-114x114-precomposed.png', 'theme'); ?>">    <?php echo $OUTPUT->standard_head_html(); ?>
</head>
<body id="<?php echo $PAGE->bodyid; ?>" class="<?php echo $PAGE->bodyclasses.' '.join(' ', $bodyclasses); ?>">
    <?php echo $OUTPUT->standard_top_of_body_html(); ?>
    <div id="page">
        <div id="page-inner-wrapper">
        <div id="page-header-wrapper">
            <div id="page-header" class="clearfix">
                    <h1 class="headermain"><?php echo $headeralt; ?></h1>
                    <div class="headermenu">
                    <?php
                        if ($haslogininfo) {
                            echo $OUTPUT->login_info();
                        }
                        if (!empty($PAGE->layout_options['langmenu'])) {
                            echo $OUTPUT->lang_menu();
                        }
                        echo $PAGE->headingmenu;
                    ?>
                </div>
            </div>
        </div>
        <div id="page-border-wrapper">
        <?php if ($hascustommenu) { ?>
            <div id="custommenu-wrapper">
                <div id="custommenu"><?php echo $custommenu; ?></div>
            </div>
        <?php } ?>
        <?php if ($hasnavbar) { ?>
        <div id="navbar-wrapper">
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
        </div>
        <?php } ?>
        <div id="page-content-wrapper">
            <div id="page-content">
                <div id="region-main-box">
                    <div id="region-post-box">
                        <div id="region-main-wrap">
                            <div id="region-main">
                                <div class="region-content">
                                    <?php echo core_renderer::MAIN_CONTENT_TOKEN; ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($hassidepre) { ?>
                            <div id="region-pre" class="block-region">
                                <div class="region-content">
                                    <?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($hassidepost) { ?>
                            <div id="region-post" class="block-region">
                                <div class="region-content">
                                    <?php echo $OUTPUT->blocks_for_region('side-post'); ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div id="page-footer-wrapper">
            <div id="page-footer">
                <p class="helplink">
                    <?php echo page_doc_link(get_string('moodledocslink')); ?>
                </p>
                <?php
                    echo $OUTPUT->login_info();
                    echo "<br />";
                    echo $OUTPUT->standard_footer_html();
                ?>
            </div>
        </div>
    </div>
    <?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>