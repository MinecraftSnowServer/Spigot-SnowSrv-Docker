<?php
/*
 * Bold text enclosed in underlines: __...__
 */
 
if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');

class syntax_plugin_markdowku_boldunderline extends DokuWiki_Syntax_Plugin {

    function getType()  { return 'formatting'; }
    function getPType() { return 'normal'; }
    function getSort()  { return 69; }
    function getAllowedTypes()  { return array('formatting', 'substition'); }
    
    function connectTo($mode) {
        $this->Lexer->addEntryPattern(
            '(?<![\\\\_])__(?![ ])(?=(?:(?!\n\n).)+?[^\\\\ ]__)',
            $mode,
            'plugin_markdowku_boldunderline');
    }

    function postConnect() {
        $this->Lexer->addExitPattern(
            '(?<![\\\\ ])__',
            'plugin_markdowku_boldunderline');
    }

    function handle($match, $state, $pos, &$handler) {
        return array($state, $match);
    }

    function render($mode, &$renderer, $data) {
        if ($data[0] == DOKU_LEXER_ENTER)
            $renderer->strong_open();
        elseif ($data[0] == DOKU_LEXER_EXIT)
            $renderer->strong_close();
        else
            $renderer->cdata($data[1]);

        return true;
    }
}
//Setup VIM: ex: et ts=4 enc=utf-8 :
