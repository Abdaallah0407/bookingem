<?php


function registr_my_widgets(){
    register_sidebar([
        'name' => 'Поисковой сайдбар',
        'id' => 'search-sidebar',
        'before_widget' => '<div>',
		'after_widget'  => "</div>"
    ]);
    register_sidebar([
        'name' => 'Языковой сайдбар',
        'id' => 'language-sidebar',
        'before_widget' => '<div>',
		'after_widget'  => "</div>"
    ]);
}