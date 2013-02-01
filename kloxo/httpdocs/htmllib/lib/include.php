<?php 

$path = __FILE__;
$dir = dirname(dirname(dirname($path)));
include_once "$dir/htmllib/lib/includecore.php";

print_time("include");
include_once "htmllib/phplib/lib/lxclass.php"  ;
include_once "htmllib/lib/commonfslib.php";
include_once "htmllib/lib/objectactionlib.php";
include_once "htmllib/lib/commandlinelib.php";
include_once "lib/sgbl.php";
include_once "lib/gbl.php";
include_once "htmllib/lib/lib.php";
include_once "htmllib/phplib/lxlib.php" ;
include_once "htmllib/phplib/common.inc";
include_once "htmllib/lib/remotelib.php";
include_once "htmllib/phplib/lib/lxdb.php";
include_once "lib/define.php";
include_once "lib/driver_define.php";
include_once "lib/sgbl.php";
include_once "lib/common.inc";
//include_once "htmllib/lib/xmlinclude.php";
// This is the program specific common lib. There is no need dump everything htmllib/lib/lib.php which has become too large.
include_once "lib/programlib.php";

// that mean no Localize before 6.2.x
if (file_exists("$dir/l18n/l18n.php")) {
	// New Localize system (Kloxo 6.2.x) Issue #397
	include_once "$dir/l18n/l18n.php";
}


if (lxfile_exists("../etc/classdefine")) {
	$list = lscandir_without_dot("../etc/classdefine");
	foreach($list as $l) {
		if (cse($l, "phps")) {
			include_once "../etc/classdefine/$l";
		}
	}
}

//print_time("include", "include");
