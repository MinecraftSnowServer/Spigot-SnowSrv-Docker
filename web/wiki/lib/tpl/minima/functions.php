<?php 
/**
 * Provide navigation sidebar functionality to Dokuwiki Templates
 *
 * @author Christopher Smith <chris@jalakai.co.uk>
 * @author Esther Brunner <wikidesign@gmail.com>
 * @author Don Bowman <don@lynsoft.co.uk>
 */

/**
 * Recursive function to establish best sidebar file to be used
 */
function getSidebarFN($ns, $file) {//func

/******  check for wiki page = $ns:$file (or $file where no namespace)  ******/
  $nsFile = ($ns) ? "$ns:$file" : $file;
  if (file_exists(wikiFN($nsFile)) && auth_quickaclcheck($nsFile)) 
    return $nsFile;
	
/******  no namespace left, exit with no file found  ******/
  if (!$ns) 
    return '';
  
/******  remove deepest namespace level and call function recursively  ******/
  $i = strrpos($ns, ":");
  $ns = ($i) ? substr($ns, 0, $i) : false;  
  return getSidebarFN($ns, $file);

  }//function getSidebarFN($ns, $file) 


/**
 * Display the sidebar
 */
function minima_sidebar() {//func

/******  declare global variables  ******/
	global $ID, $REV, $ACT, $conf;
	
/******  save global variables  ******/
	$saveID = $ID;
	$saveREV = $REV;
//	$saveACT = $ACT;

/******  find file to be displayed in navigation sidebar  ******/
  $sidebar = tpl_getConf('sidebar_page');
  $fileSidebar = getSidebarFN(getNS($ID), $sidebar);

/******  show main sidebar if necessary  ******/
  if (tpl_getConf('minima_main_sidebar') && $fileSidebar != $sidebar) {//do
    $ID = $sidebar;
    $REV = '';
		echo p_wiki_xhtml($ID, $REV, false);
//    $ACT = 'show';
//    tpl_content(false);
    echo "<hr>";
    }//if (tpl_getConf('minima_main_sidebar') && $fileSidebar != $sidebar) 

/******  show current sidebar  ******/
  if ($fileSidebar) {//do
    $ID = $fileSidebar;
    $REV = '';
		echo p_wiki_xhtml($ID, $REV, false);
//    $ACT = 'show';
//    tpl_content(false);
    }//if ($fileSidebar)

/******  show index  ******/
  else {//if (!$fileSidebar)
//    $REV = '';
//    $ACT = 'index';
    global $IDX;
    html_index($IDX);
//    tpl_content(false);
    }//if (!$fileSidebar)
    
/******  restore global variables  ******/
  $ID = $saveID;
  $REV = $saveREV;
//  $ACT = $saveACT;

  }//function minima_sidebar() 


/**
 * Return the correct ID for <div class="dokuwiki">
 */
function minima_classID() {//func
  echo 'minima__'.tpl_getConf('width').'_'.tpl_getConf('sidebar_position');
  }//function minima_classID() 


/**
 * Checks if the color scheme has changed
 */
function minima_checkColor() {//func
    
/******  set local variables  ******/
  $color = tpl_getConf('color');
  $file  = DOKU_TPLINC.'style.ini';
  $file2 = DOKU_TPLINC.'style_'.$color.'.ini';
  $ini   = parse_ini_file($file);
    
/******  change theme as requested  ******/
  if ($ini['__theme__'] != '_'.$color) {//do

    if ((@file_exists($file2)) && (@unlink($file)) && (@copy($file2, $file))) {//do
      global $conf;
      if ($conf['fperm']) chmod($file, $conf['fperm']);
      }//if ((@file_exists($file2)) && (@unlink($file)) && (@copy($file2, $file))) 
      
    else {//if not ((@file_exists($file2)) && (@unlink($file)) && (@copy($file2, $file))) 
      msg('Could not set correct style.ini file for your chosen color scheme.', -1);
      }//else {//if not ... 
  
    }//if ($ini['__theme__'] != '_'.$color) 

  }//function minima_checkColor() 
  

/**
 * Display tabs for easy navigation
 */
function minima_tabs() {//func

/******  declare global variables  ******/
  global $ID;
  
/******  set local variables  ******/
  $out = '';
  
/******  get tabs file name  ******/
  $ns = getNS($ID);
  $tabsFile = wikiFN(($ns).':'.tpl_getConf('tabs_page'));
  
/******  show tabs  ******/
  if ((@file_exists($tabsFile)) && (auth_quickaclcheck($tabs))) {//do
    $ins = p_cached_instructions($tabsFile);
    
  /******  process each tab  ******/
    foreach ($ins as $in) {//do
    
    /******  collect internal links to pages in same namespace  ******/
      if ($in[0] == 'internallink') {//do
        list($id, $hash) = explode('#', $in[1][0], 2);
        resolve_pageid(getNS($ID), $id, $exists);
    
      /******  ignore links to other namespaces  ******/
        if (getNS($id) != $ns) 
          continue; 
    
      /******  ignore links to non-existent pages  ******/
        if (!$exists) 
          continue;          
        
      /******  determine link title  ******/
        $title = hsc($in[1][1]);
        if (!$title) 
          $title = hsc(p_get_first_heading($id));
        if (!$title) 
          $title = hsc(ucwords(noNS($id)));
        
      /******  now construct the output link  ******/
        if ($id == $ID) 
          $out .= '<span class="activetab">'.$title.'</span> ';
        else 
          $out .= '<a href="'.wl($id).'" class="tab">'.$title.'</a> ';
        
        }//if ($in[0] == 'internallink') 
        
    /******  first header of tabs.txt is heading for whole namespace  ******/
      elseif (($in[0] == 'header') && (!$heading)) {//do
        $heading = $in[1][0];
        $level = $in[1][1];
        }//if (($in[0] == 'header') && (!$heading)) 
        
      }//foreach ($ins as $in)
      
  /******  add heading to list  ******/
    if ($heading) 
      $out = '<h'.$level.'>'.$heading.'</h'.$level.'>'.$out;
      
  /******  show list  ******/
    echo '<div class="tabs">'.$out.'</div>';

    }//if ((@file_exists($tabsFile)) && (auth_quickaclcheck($tabs))) 

  }//function minima_tabs() 
  

/**
 * Outputs the namespace title
 */
function minima_nstitle() {//func

/******  declare global variables  ******/
  global $ID;
  
/******  get namespace title  ******/
  $title = p_get_metadata(getNS($ID).':'.tpl_getConf('tabs_page'), 'title');
  
/******  show namespace title  ******/
  if ($title) 
    echo $title.': ';

  }//function minima_nstitle()
