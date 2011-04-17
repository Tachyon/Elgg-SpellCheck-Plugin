<?php
/**
 * Elgg SpellChecker plugin based on captcha plugin by Curverider Ltd
 * 
 * @package SpellChecker
 * @author Saket Saurabh
 *
 */
function spellcheck_init() {
	global $CONFIG;
	
	// Register page handler for captcha functionality
	register_page_handler('spellcheck','spellcheck_page_handler');
	
	// Extend CSS
	elgg_extend_view('css/elgg','spellcheck/css');
	
	// Extend js
	elgg_extend_view('js/initialise_elgg','spellcheck/js');
	elgg_register_js('spellcheck', 'mod/spellcheck/vendor/jqueryspellchecker/jquery.spellchecker.js');
	elgg_extend_view('input/longtext', 'spellcheck/init');
	
	elgg_register_plugin_hook_handler('register', 'menu:longtext', 'spellcheck_longtext_menu');
}

function spellcheck_longtext_menu($hook, $type, $items, $vars) {
	
	$items[] = ElggMenuItem::factory(array(
		'name' => 'spellcheck_button',
		'class' => 'spellcheck-button elgg-longtext-control',
		'href' => "#{$vars['id']}",
		'text' => elgg_echo('spellcheck:check'),
	));
	
	return $items;
}

function spellcheck_page_handler($page) {
	global $CONFIG;
	
	include($CONFIG->pluginspath . "spellcheck/checkspelling.php");
}

elgg_register_event_handler('init', 'system', 'spellcheck_init');
