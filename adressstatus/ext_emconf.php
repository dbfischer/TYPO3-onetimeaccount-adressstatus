<?php

########################################################################
# Extension Manager/Repository config file for ext "marijo".
#
# Auto generated 14-12-2010 11:45
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Onetimeaccount Adressstatus',
	'description' => 'This extensions adds a field "adressstatus" to the FE users table and toe the onetimeaccount form.',
	'category' => 'misc',
	'author' => 'Oliver Klee',
	'author_email' => 'dbfischer@web.de',
	'shy' => '',
	'dependencies' => 'cms,onetimeaccount',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'fe_users',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'onetimeaccount' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"5858";s:14:"ext_tables.sql";s:4:"68ee";s:16:"locallang_db.xml";s:4:"e7e8";s:34:"Configuration/TypoScript/setup.txt";s:4:"b1cc";s:51:"Resources/Private/Templates/onetimeaccount_adressstatus_pi1.html";s:4:"48ba";}',
	'suggests' => array(
	),
);

?>