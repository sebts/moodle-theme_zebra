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
 * zebra theme general page layout
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->libdir.'/moodlelib.php');
require_once(dirname(__FILE__).'/header.php'); ?>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
    <?php echo $OUTPUT->standard_top_of_body_html(); ?>
    <div id="page">
        <div id="page-inner-wrapper">
            <div id="page-header-wrapper">
                <div id="page-header" class="clearfix">
                    <div class="headermain">
                    	<?php if($haslogo) {
                    	    echo $logo;
                    	}
                    	if (!$simplelogin) { ?>
                    		<h1 class="header"><?php echo $headeralt; ?></h1>
                    	<?php } ?>
                    </div>
                    <?php if (!$simplelogin) { ?>
	                    <div id="profileblock">
							<?php if (($haslogininfo) && (isloggedin()) && ($showuserpic)) {
						        echo html_writer::tag('div', $OUTPUT->user_picture($USER, array('size'=>80)), array('id'=>'user-pic'));
							} ?>
							<div id="user-info">
								<?php echo $OUTPUT->login_info();
								if ($haslangmenu) {
									echo $OUTPUT->lang_menu();
								}
								echo $PAGE->headingmenu; ?>
                                <!-- SEBTS - Add login boxes to the top corner of each page before login -->
                                <?php
                                if ((isguestuser() || !isloggedin()) && (string)$this->page->url != get_login_url()) { ?>
                                    <div class="loginbox">
                                        <form class="loginform" id="hlogin" method="post" action="<?php echo get_login_url(); ?>">
											<table>
                                                <tr>
                                                    <td>
                                                        <label for="husername"><?php echo get_string("username"); ?></label><br/>
                                                        <input size="10" name="username" id="husername" />
                                                    </td>
                                                    <td>
                                                        <label for="hpassword"><?php echo get_string("password"); ?></label><br/>
                                                        <input size="10" name="password" id="hpassword" type="password" />
                                                    </td>
                                                    <td style="vertical-align: bottom;">
                                                        <input type="submit" name="Submit" id="hlogin" value="<?php echo get_string("login"); ?>" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                <?php   } ?>
                                <!-- SEBTS Close Block -->
							</div>
	                    </div>
                    <?php } ?>
                </div>
                <div id="page-border-wrapper">
                    <?php if ($hascustommenu) { ?>
                        <div id="custommenu-wrapper">
                            <div id="custommenu">
	                            <?php if ($hashomeicon) {
		                            echo '<a class="home" href="' . $homeurl . '"><div>&nbsp;</div></a>';
		                        }
		                        echo $custommenu;
		                        if ($hascallink) {
			                        echo '<a class="calendar" href="' . $calurl . '">' . date("$dateformat") . '</a>';
			                    } ?>
			    			</div>
                        </div>
                    <?php } ?>
                    <?php if ($hasnavbar) { ?>
                        <div id="navbar-wrapper">
                            <div class="navbar clearfix">
                                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                                <div class="navbutton"><?php echo $PAGE->button; ?></div>
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
                                            	<?php if (!empty($courseheader)) { 
                                            		echo '<div id="course-header">' . $courseheader . '</div>';
                                            	}
                                            	echo $coursecontentheader;
                                                echo $maincontent;
                                                echo $coursecontentfooter; ?>
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
	    <?php require_once(dirname(__FILE__).'/footer.php');