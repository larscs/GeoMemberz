<?php 
$GLOBALS['config'] = array(
	'sqlhost' => '127.0.0.1',
    'sqlport' => '3306',
	'sqluser' => '',
	'sqlpw'   => '',
	'sqldb'	  => '',
	'sqlprefix'=> 'gm_',

	'passchangetimeout' => 10800,   // The timeout for password changes, in seconds
	'validationtimeout' => 21600,	// The timeout for validation, in seconds

	'sessionprefix' => 'gm_',
	'cookieprefix' => 'gm_',
	'cookieexpiry' => 31622400,               // The cookie expiry, in seconds

	'assocname' 	=> '',
	'assocbank'		=> '',
	'assocemail'	=> '',		// E-mail for mails like new user notification etc. (including reply-to for autoemail)
	'assocemailname'=> '',			// The name for the above address, when sender
	'autoreplyassoc'=> false,                         // Whether reply-to should be assocemail when sender is autoemail 
    'autoemail'		=> '',		// E-mail address of sender for system mails
	'autoemailname' => '',			// The name for the above address, when sender
	'automailcopy'  => false,				// Whether any system mails should be BCC-ed to an address
	'automailcopyaddr'=> '',		// The address such BCCs should be sent to

	'feeagelimit'	=>	16,            // Minimum age for which fee is required. 0 for all members.
    
    // Settings related to mail sending
    'mailSMTP'      => false,              // If set to true, the specified mailserver and port is used. Otherwise, the builtin PHP mail() function is used.
    'mailserver'    => '',
    'mailport'      => 25,
    'mailauth'      => false,              // If set to true, the two next are used, otherwise not
    'mailuser'      => '',
    'mailpass'      => '',

	'baseaddr' 		=> '',
	'cleanbaseaddr' => '',
	'logo50'		=> '/img/logo.png',          // 50 px high logo, light background
	'logo30'		=> '/img/logo_banner.png',   // 30 px high logo, dark background
	'favicon' 		=> '/img/favicon.png',
);