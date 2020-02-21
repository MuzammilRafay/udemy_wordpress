<?php

class Venue extends MvcModel {

    var $display_field = 'name';
   
     var $has_and_belongs_to_many = array(
	    'Recipe' => array(
	      'join_table' => "{prefix}recipe",
	      'fields' => array('id', 'title')
	    )
	  );

}
