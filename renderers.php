<?php
// theme/themename/renderers.php
 
class theme_zebra_core_renderer extends core_renderer {
 
    protected function render_custom_menu(custom_menu $menu) {
//        $branch = $menu->add('WELCOME', new moodle_url('/') , 'WELCOME', 5000);

//        $mycourses = $this->page->navigation->get('mycourses');
// 
//        if (isloggedin() && $mycourses && $mycourses->has_children()) {
//            $branchlabel = get_string('mycourses');
//            $branchurl   = new moodle_url('/course/index.php');
//            $branchtitle = $branchlabel;
//            $branchsort  = 10000;
// 
//            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
// 
//            foreach ($mycourses->children as $coursenode) {
//                $branch->add($coursenode->get_content(), $coursenode->action, $coursenode->get_title());
//            }
//        }
	if (!$menu->has_children()) {
		if (!isloggedin() || isguestuser()) {
	        $branch = $menu->add('MOODLE', new moodle_url('/login/index.php') , 'MOODLE', 10000);
	 		$branch->add("Login", new moodle_url('/login/index.php'), "Login"); 
		}
		if (isloggedin() && !isguestuser()) {
	        $branch = $menu->add('MOODLE', new moodle_url('/my') , 'MOODLE', 10000);
	 		$branch->add("Current Courses", new moodle_url('/my/?semester=current'), "My Moodle");
	 		$branch->add("Previous Courses", new moodle_url('/my/?semester=past'), "Previous Courses");
	 		$branch->add("Future Courses", new moodle_url('/my/?semester=future'), "Future Courses");
	 		$branch->add("MOOC", new moodle_url('/mod/page/view.php?id=87104'), "MOOC");
	 		$branch->add("My Calendar", new moodle_url('/calendar/view.php?view=month'), "My Calendar");
	 		$branch->add("My Profile", new moodle_url('/user/profile.php'), "My Profile");
	 		$branch->add("Check Your Messages", new moodle_url('/message/index.php'), "Check Your Messages");
	 		$branch->add("Course Finder", new moodle_url('/course'), "Course Finder");
		}	

		if (has_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM))) {
        	$branch = $menu->add('ADMIN', new moodle_url('/admin/index.php') , 'ADMIN', 20000);
	 		$branch->add("Users", new moodle_url('/admin/user.php'), "Users");
	 		$branch->add("Courses", new moodle_url('/course/index.php?categoryedit=off'), "Courses");
	 		$branch->add("Moodle Admin", new moodle_url('/admin/index.php'), "Moodle Admin");
	 		$branch->add("CampusNet Admin", new moodle_url('/course/view.php?id=237'), "CampusNet Admin");
	 		$branch->add("MySQL Admin", new moodle_url('/local/adminer/index.php'), "MySQL Admin");
	 		$branch->add("Theme Admin", new moodle_url('/admin/settings.php?section=themesettingzebra'), "Theme Admin");
		}

        $branch = $menu->add('STUDENT LIFE', NULL, 'STUDENT LIFE', 30000);
 		$branch->add("Around Southeastern", new moodle_url('/mod/page/view.php?id=3715'), "Around Southeastern");
 		$branch->add("Southeastern1Card", new moodle_url('/mod/page/view.php?id=3729'), "Southeastern1Card");
		if (isloggedin() && !isguestuser()) {
	 		$branch->add("Student Employment Portal", new moodle_url('/mod/page/view.php?id=47357'), "Student Employment Portal"); }
 		$branch->add("Chapel Information", new moodle_url('/mod/page/view.php?id=3718'), "Chapel Information");
 		$branch->add("General Student Information/Services", new moodle_url('/mod/page/view.php?id=3719'), "General Student Information/Services");
 		$branch->add("Intramurals", new moodle_url('/mod/page/view.php?id=3720'), "Intramurals");        
		if (isloggedin() && !isguestuser()) {
	 		$branch->add("Fitness Initiative", new moodle_url('/mod/page/view.php?id=157410'), "Fitness Initiative"); }
		if (isloggedin() && !isguestuser()) {
	 		$branch->add("D Groups", new moodle_url('/mod/page/view.php?id=4975'), "D Groups"); }


        $branch = $menu->add('FORMS & INFO', NULL , 'Forms & Info', 40000);
 		$branch->add("Registrar's Office", new moodle_url('/mod/page/view.php?id=3721'), "Registrar's Office");
 		$branch->add("Accounting Services", new moodle_url('/mod/page/view.php?id=3722'), "Accounting Services");
 		$branch->add("Housing", new moodle_url('/mod/page/view.php?id=3724'), "Housing");

        if (isloggedin() && !isguestuser()) {
            $branch = $menu->add('SECURITY', NULL , 'Security', 45000);
            $branch->add("Parking Permits and Vehicle Registration", new moodle_url('https://www.permitsales.net/SEBTS" target="_blank'), "Parking Permits and Vehicle Registration");
            $branch->add("Appeal or Pay Citations", new moodle_url('https://www.permitsales.net/SEBTS/violations" target="_blank'), "Appeal or Pay Citations");
            $branch->add("Parking Map", new moodle_url('http://www.sebts.edu/files/parking_map.pdf" target="_blank'), "Parking Map");
            $branch->add("Parking Policies", new moodle_url('/mod/page/view.php?id=154412'), "Parking Policies");
 		    $branch->add("SEBTS Alerts / Announcements", new moodle_url('/mod/page/view.php?id=62373'), "SEBTS Alerts / Announcements"); 
            $branch->add("Email Security", new moodle_url('mailto:campussecurity@sebts.edu'), "Email Security");
        }

		// $branch = $menu->add('Self-Service', new moodle_url('/mod/page/view.php?id=3725') , 'Self-Service', 50000);
		$branch = $menu->add('SELF-SERVICE', NULL, 'Self-Service', 50000);
		$branch->add("Self-Service Home", new moodle_url('https://selfservice.sebts.edu" target="mdltoselfservice'), "Self-Service Home");
		$branch->add("Student/Faculty Directory", new moodle_url('https://selfservice.sebts.edu/selfservice/account/directorysearch.asp" target="mdltoselfservice'), "Student/Faculty Directory");
		$branch->add("Course Search", new moodle_url('https://selfservice.sebts.edu/selfservice/Search/SectionSearch.aspx" target="mdltoselfservice'), "Course Search");
		$branch->add("Transcript Request", new moodle_url('https://selfservice.sebts.edu/selfservice/Records/TranscriptRequest.aspx" target="mdltoselfservice'), "Transcript Request");
		$branch->add("Pay Tuition & Housing Online", new moodle_url('https://selfservice.sebts.edu/selfservice/Finances/Balance.aspx" target="mdltoselfservice'), "Pay Tuition & Housing Online");
//		$branch->add("Course Search", new moodle_url('/mod/page/view.php?id=3727'), "Course Search");
//		$branch->add("Transcript Request", new moodle_url('/mod/page/view.php?id=3728'), "Transcript Request");
//		$branch->add("Pay Tuition & Housing Online", new moodle_url('/mod/page/view.php?id=20545'), "Pay Tuition & Housing Online");

		if (isloggedin() && !isguestuser()) {
			$branch = $menu->add('LIBRARY', new moodle_url('/course/view.php?id=227') , 'Library', 60000);
		}
		if (isloggedin() && !isguestuser()) {
			$branch = $menu->add('WRITING CENTER', new moodle_url('/course/view.php?id=40') , 'Writing Center', 65000);
		}

		if (isloggedin() && !isguestuser()) {
			$branch = $menu->add('STR JOURNAL', NULL, 'STR Journal', 80000);
			$branch->add("STR 1.1 (2010)", new moodle_url('/mod/resource/view.php?inpopup=true&id=66624'), "STR 1.1 (2010)");
			$branch->add("STR 2.1 (2011)", new moodle_url('/mod/resource/view.php?inpopup=true&id=66484'), "STR 2.1 (2011)");
			$branch->add("STR 2.2 (2011)", new moodle_url('/mod/resource/view.php?inpopup=true&id=66483'), "STR 2.2 (2011)");
			$branch->add("STR 3.1 (2012)", new moodle_url('/mod/resource/view.php?inpopup=true&id=62328'), "STR 3.1 (2012)");
			$branch->add("STR 3.2 (2012)", new moodle_url('/mod/page/view.php?id=84134'), "STR 3.2 (2012)");
			$branch->add("STR 4.1 (2013)", new moodle_url('/mod/page/view.php?id=103550'), "STR 4.1 (2013)");
            $branch->add("STR 4.2 (2013)", new moodle_url('/mod/page/view.php?id=126414'), "STR 4.2 (2013)");
		}

		$branch = $menu->add('HELP', NULL, 'Help', 90000);
 		$branch->add("Access Guides", new moodle_url('/mod/page/view.php?id=3730'), "Access Guides");
 		//$branch->add("Moodle Browser Settings", new moodle_url(''), "Moodle Browser Settings");
 		$branch->add("CampusNet", new moodle_url('/mod/page/view.php?id=3731'), "CampusNet");
 		$branch->add("WiFi Wireless Internet", new moodle_url('/mod/page/view.php?id=3732'), "WiFi Wireless Internet");
 		$branch->add("Computer Labs", new moodle_url('/mod/page/view.php?id=3733'), "Computer Labs");
 		$branch->add("Web Content Filter", new moodle_url('/mod/page/view.php?id=3734'), "Web Content Filter");
 		$branch->add("Student Email", new moodle_url('/mod/page/view.php?id=3735'), "Student Email");
 		$branch->add("Copying and Printing", new moodle_url('/mod/page/view.php?id=3736'), "Copying and Printing");
 		$branch->add("Software for Students", new moodle_url('/mod/page/view.php?id=3737'), "Software for Students");
 		$branch->add("Where to Buy Computers", new moodle_url('/mod/page/view.php?id=3738'), "Where to Buy Computers");
 		//$branch->add("Moodle Help for Students", NULL, "Moodle Help for Students");
	}
        return parent::render_custom_menu($menu);
    }
 
}
