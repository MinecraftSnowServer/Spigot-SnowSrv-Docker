<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * @link   http://wiki.splitbrain.org/wiki:tpl:templates
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Esther Brunner <wikidesign@gmail.com>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

// include functions that provide sidebar and tabs functionality
@require_once(dirname(__FILE__).'/functions.php');
minima_checkColor();

?>
<?php
/**
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
 */
?>
<!DOCTYPE html>
<html lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="x-ua-compatible" content="IE=8">
  <title>
    <?php minima_nstitle(); tpl_pagetitle()?> · <?php echo strip_tags($conf['title'])?>
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki" id="<?php minima_classID()?>">
  <?php html_msgarea()?>

  <div class="header">
    <div class="logo">
      <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[ALT+H]"')?>
    </div>
  </div>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

  <div class="main">
  
    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
    </div>
    <?php }?>
  
    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere()?>
    </div>
    <?php }?>
    
    <?php flush()?>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>
    
    <?php minima_tabs()?>
  
  </div>
  <div class="main">

    <div class="page">
        
      <!-- wikipage start -->
      <?php tpl_content()?>
      <!-- wikipage stop -->
      
      <?php if ($INFO['exists'] && ($ACT == 'show') && $INFO['perm']
        && tpl_getConf('showpageinfo')){?>
      <div class="meta">
        <?php tpl_pageinfo()?>
      </div>
      <?php }?>
      
      <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>
  
      <?php if ($INFO['editable']){?>
      <div class="bar">
      <?php 
        tpl_button('edit').' '.tpl_button('history').' '.
        tpl_button('backlink').' '.tpl_button('subscription').' '.
        tpl_button('revert')
      ?>
      </div>
      <?php }?>
    </div><!-- page -->
    
    <div class="sidebar">
      <?php minima_sidebar()?>
      <hr />
      <?php if (tpl_getConf('showsiteactions')){?>
        <ul>
          <li><div class="li"><?php tpl_actionlink('index')?></div></li>
          <li><div class="li"><?php tpl_actionlink('recent')?></div></li>
        </ul>
      <?php }?>
      <div class="search"><?php tpl_searchform()?></div>
      <?php if (tpl_getConf('showuseractions')){?>
        <hr />
        <ul>
          <li><div class="li"><?php tpl_actionlink('login')?>
          <?php if ($_SERVER['REMOTE_USER']){?>
            <?php echo $INFO['userinfo']['name']?>
            </div></li>
          <?php }?>
          <?php if (tpl_get_action('profile')) { ?>
            <li><div class="li">
            <?php tpl_actionlink('profile')?>
            </div></li>
          <?php }?>
          <?php if ($INFO['perm'] == 255){?>
            <li><div class="li"><?php tpl_actionlink('admin')?></div></li>
          <?php }?>
        </ul>
      <?php }?>
    </div><!-- sidebar -->
  
  </div><!-- main -->

<?php
//  <div class="clearer"></div>
?>

  <?php flush()?>
  
  <div class="footer">
    <div class="edgeleft"><div class="borderbottom">&nbsp;</div></div>
    <div class="edgeright"><div class="borderbottom">&nbsp;</div></div>
  </div><!-- footer -->

</div>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
