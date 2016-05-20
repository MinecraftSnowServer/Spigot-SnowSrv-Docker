<?php

/**
 * Chinese (simplified) language for the "vector" DokuWiki template
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/vector/lang/<your lang>/lang.php"
 * - "/lib/tpl/vector/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones (hint: looking
 * at <http://[your lang].wikipedia.org> might be helpful). And don't forget to
 * mail the translation to me,
 * Andreas Haerter <development@andreas-haerter.com>. Thanks :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author LAINME <lainme993 [ät] gmail.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-vector
 * @link http://www.dokuwiki.org/template:vector
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs, personal tools and special links
$lang["vector_article"] = "文章";
$lang["vector_discussion"] = "討論";
$lang["vector_read"] = "閱讀";
$lang["vector_edit"] = "編輯";
$lang["vector_create"] = "建立";
$lang["vector_userpage"] = "使用者頁面";
$lang["vector_specialpage"] = "特殊頁面";
$lang["vector_mytalk"] = "我的討論";
$lang["vector_exportodt"] = "輸出：ODT";
$lang["vector_exportpdf"] = "輸出：PDF";
$lang["vector_subscribens"] = "訂閱命名空間改變"; //original DW lang $lang["btn_subscribens"] is simply too long for common tab configs
$lang["vector_unsubscribens"] = "退訂命名空間改變";  //original DW lang $lang["btn_unsubscribens"] is simply too long for common tab configs
$lang["vector_translations"] = "語言";

//headlines for the different bars and boxes
$lang["vector_navigation"] = "導航";
$lang["vector_toolbox"] = "工具箱";
$lang["vector_exportbox"] = "列印/輸出";
$lang["vector_inotherlanguages"] = "語言";
$lang["vector_printexport"] = "列印/輸出";
$lang["vector_personnaltools"] = "個人工具箱";

//buttons
$lang["vector_btn_go"] = "開始";
$lang["vector_btn_search"] = "搜尋";
$lang["vector_btn_search_title"] = "搜尋這篇文章";

//exportbox ("print/export")
$lang["vector_exportbxdef_print"] = "可列印版本";
$lang["vector_exportbxdef_downloadodt"] = "以ODT下載";
$lang["vector_exportbxdef_downloadpdf"] = "以PDF下載";

//default toolbox
$lang["vector_toolbxdef_whatlinkshere"] = "反向連接";
$lang["vector_toolbxdef_upload"] = "上傳檔案";
$lang["vector_toolbxdef_siteindex"] = "網站地圖";
$lang["vector_toolboxdef_permanent"] = "永久連結";
$lang["vector_toolboxdef_cite"] = "引用文章";

//cite this article
$lang["vector_cite_bibdetailsfor"] = "文章內容：";
$lang["vector_cite_pagename"] = "頁面文章";
$lang["vector_cite_author"] = "作者";
$lang["vector_cite_publisher"] = "出版者";
$lang["vector_cite_dateofrev"] = "修訂日期";
$lang["vector_cite_dateretrieved"] = "檢索日期";
$lang["vector_cite_permurl"] = "永久連結";
$lang["vector_cite_pageversionid"] = "頁面版本ID";
$lang["vector_cite_citationstyles"] = "引文格式";
$lang["vector_cite_checkstandards"] = "请记得检查您的样式手册，标准指南或者导师的指导，来获取适合您需求的准确样式";
$lang["vector_cite_latexusepackagehint"] = "当使用LaTeX的url包（在开始的某处使用\usepackage{url})可以得到更好的网络地址，下列格式更受欢迎";
$lang["vector_cite_retrieved"] = "檢索";
$lang["vector_cite_from"] = "從";
$lang["vector_cite_in"] = "在";
$lang["vector_cite_accessed"] = "獲得";
$lang["vector_cite_cited"] = "引用";
$lang["vector_cite_lastvisited"] = "最後瀏覽";
$lang["vector_cite_availableat"] = "獲得地址";
$lang["vector_cite_discussionpages"] = "DokuWiki討論頁面";
$lang["vector_cite_markup"] = "標記";
$lang["vector_cite_result"] = "結果";
$lang["vector_cite_thisversion"] = "此版本";

//other
$lang["vector_search"] = "搜尋";
$lang["vector_accessdenied"] = "拒絕存取";
$lang["vector_fillplaceholder"] = "請填寫此位置 ";
$lang["vector_donate"] = "捐贈";
$lang["vector_mdtemplatefordw"] = "用於Dokuwiki的vector主題";
$lang["vector_recentchanges"] = "最近變更";

