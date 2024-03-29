<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tt_address_extbase"
 *
 * Auto generated by Extension Builder 2013-05-10
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tt_address for extbase',
	'description' => 'Provides models and repositories to use the tt_address extension in extbase and fluid.',
	'category' => 'plugin',
	'author' => 'Daniel Hürtgen',
	'author_email' => 'huertgen@rheinschafe.de',
	'author_company' => 'Rheinschafe GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.0',
			'tt_address' => '2.3',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>