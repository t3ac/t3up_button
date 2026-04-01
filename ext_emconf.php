<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_button".
 *
 * 15-10-2024 
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
$EM_CONF[$_EXTKEY]  = [
  	'title' 			=> 'T3UP - Buttons',
  	'description' 		=> 'T3UP for EXT:container',
	'category' 			=> 'templates',
	'author' 			=> 'Michael Lang',
  	'author_email' 		=> 'info@t3ac.de',
    	'version'           => '13.2.01',
  	'author_company' 	=> '',
  	'state' 			=> 'stable',
    	'uploadfolder'    	=> false,
    	'createDirs'       	=> '',
    	'clearCacheOnLoad' 	=> true,
    	'constraints'      	=> [
        'depends'   => [
            'typo3'          	=> '13.4.0-',
            'container'		=>	'3.1-',
            't3up'          	=> '13.2-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
