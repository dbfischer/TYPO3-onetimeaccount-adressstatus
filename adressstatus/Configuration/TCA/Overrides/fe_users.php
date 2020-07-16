<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'adressstatus' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:adressstatus/locallang_db.xml:fe_users.adressstatus',
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:adressstatus/locallang_db.xml:fe_users.adressstatus.I.0', '0'),
				array('LLL:EXT:adressstatus/locallang_db.xml:fe_users.adressstatus.I.1', '1'),
			),
			'size' => 1,
			'maxitems' => 1,
		)
	),
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tempColumns,1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users','adressstatus;;;;1-1-1');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'adressstatus');
?>