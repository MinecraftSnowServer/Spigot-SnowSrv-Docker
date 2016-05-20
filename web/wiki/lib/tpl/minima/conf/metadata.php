<?php
/**
 * Metadata for configuration manager plugin
 * Additions for the minima template
 *
 * @author    Esther Brunner <wikidesign@gmail.com>
 */
$meta['color']                = array(
  'multichoice',
  '_choices' => array('blue', 'brown', 'gray', 'green', 'pink', 'purple')
);
$meta['width']                = array(
  'multichoice',
  '_choices' => array('narrow', 'medium', 'wide')
);
$meta['sidebar_position']     = array(
  'multichoice',
  '_choices' => array('left', 'right')
);
$meta['sidebar_page']         = array('string');
$meta['tabs_page']            = array('string');
$meta['showpageinfo']         = array('onoff');
$meta['showsiteactions']      = array('onoff');
$meta['showuseractions']      = array('onoff');
$meta['minima_main_sidebar']  = array('onoff');

//Setup VIM: ex: et ts=2 enc=utf-8 :
