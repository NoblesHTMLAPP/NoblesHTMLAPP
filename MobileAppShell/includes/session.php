<?php
/**
 * Secure session handling -Vlad 
 */
 
 # Session Variables
 # COURSENUMBER      This is the course number
 # COURSESECTION  This is the course number and section concatenated
 # TEACHERID   This is the MAC School ID for the teacher
 # CURRENTDATE
 # TEACHER_NAME_SEARCH
 # ALL_PRESENT
 # CURRENTTERM
 # PERIOD
 # TIMESLOT
 # TEACHER_US_MS
 # CURRENTDATE
 # CURRENTDAY
 # USERNAME
 # PASSWORD
 # TEACHER_PEOPLEID
 
 # The session variables below are used    when the logged in user
 # is looking up the attendance roster for another teacher.
# CURRENTTEACHERID
# CURRENTTEACHER_PEOPLEID
# CURRENTTEACHER_US_MS


# Get Headers, and append some salt to it
$http_string = $_SERVER['HTTP_USER_AGENT'];
$http_string .= 'GENERATIONS';

# Add any other data that is consistent
$fingerprint = md5($http_string);

# Start the session
session_start();

/**
 * @function sessionExists - checks whether the session has been initiated
 * 
 * @return boolean true if session exists, and is consistent, false otherwise
 */
function sessionExists() {
	global $fingerprint;
	
	if (isset($_SESSION['HTTPUSERAGENT'])) {
	   # Check if consistent
       if ($_SESSION['HTTPUSERAGENT'] === $fingerprint) {
            return true;
       }
    }
    return false;
}



/**
 * @function setSession - initiates new session based on md5 of 
 * 						  superglobal 'HTTP_USER_AGENT' and salt
 */
function setSession() {
	global $fingerprint; 
	
	if (!sessionExists()) {
		$_SESSION['HTTPUSERAGENT'] = $fingerprint;
	}
}



/*

#
# Resource: http://phpsec.org/projects/guide/4.html
#

$session_exists = false; # boolean

# Get Headers, and append some salt to it
$string = $_SERVER['HTTP_USER_AGENT'];
$string .= 'SHIFTLEFT';

# Add any other data that is consistent
$fingerprint = md5($string);

# Start the session
session_start();

# Check if session exists
if (isset($_SESSION['HTTP_USER_AGENT'])) {
	# Check if consistent
    if ($_SESSION['HTTP_USER_AGENT'] != $fingerprint) {
        $session_exists = false;
    } else {
    	$session_exists = true;
    }
}
else { # set new session
    $_SESSION['HTTP_USER_AGENT'] = $fingerprint;
    $session_exists = true; 
}

*/

?>
