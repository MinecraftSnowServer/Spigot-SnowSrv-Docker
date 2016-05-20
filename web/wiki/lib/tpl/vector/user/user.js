/* en: Place for user defined JavaScript - this file can safely be preserved
   when updating. See README for details.
   ATTENTION: Do not forget to activate the template option
              "vector_loaduserjs" (->"Load 'vector/user/user.js'?") in the
              DokuWiki Config Manager! Otherwise, any changes to this file
              won't have any effect!

   de: Ort für benutzerdefiniertes JavaScript - Diese Datei kann beim
   Durchführen von Updates ohne Risiko beibehalten werden. Konsultieren Sie
   die README für Detailinformationen.

   ACHTUNG: Vergessen Sie nicht die Template-Option "vector_loaduserjs"
            (->"Datei 'vector/user/user.js' laden?") im DokuWiki Config
            Manager zu aktivieren! Andernfalls werden sämtliche Änderungen an
            dieser Datei ohne Auswirkungen bleiben! */
/*GA*/
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33693646-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

