<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Section options
$section_options = new FieldsBuilder('options');
$section_options
	->addTab('Options')
	->addRadio('layout',
		['instructions' => 'Determines the width of the content.'])
		->addChoice('','Default')
		->addChoice('normal','Normal')
		->addChoice('wide','Wide')
		->addChoice('full','Full')
		->addChoice('narrow','Narrow')
	->addText('classes',
		['placeholder' => 'hero hero--featured']);

// Title
$title = new FieldsBuilder('title');
$title
	->addText('page_title')
	->addText('subtitle');

// WYSIWYG
$wysiwyg = new FieldsBuilder('wysiwyg');
$wysiwyg
	->addWysiwyg('content');

// Hero
$hero = new FieldsBuilder('hero');
$hero
	->addText('title')
	->addImage('background_image')
	->addFields($wysiwyg)
	->addLink('cta', ['label'=>'Call to Action']);

// Sections
$sections = new FieldsBuilder('sections');
$sections
	->addFlexibleContent('sections')
		->addLayout('title', ['min' => 1])
			->addTab('Content')
			->addFields($title)
			->addFields($section_options)
		->addLayout('wysiwyg', ['label'=>'WYSIWYG'])
			->addTab('Content')
			->addFields($wysiwyg)
			->addFields($section_options)
		->addLayout('hero')
			->addTab('Content')
			->addFields($hero)
			->addFields($section_options);

// Page content
$page_content = new FieldsBuilder('page_content');
$page_content
	->addFields($sections)
	->setLocation('post_type', '==', 'page')
		->or('post_type', '==', 'post');

add_action('acf/init', function() use ($page_content) {
	acf_add_local_field_group($page_content->build());
});
