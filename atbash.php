<HTML><HEAD><TITLE>Atbash Cipher</TITLE>
<link REL="SHORTCUT ICON" HREF="/favicon.ico">
<!-- These pages are (C)opyright 2002-2008, Tyler Akins -->
<!-- Fake email for spambots: info@rumkin.com -->
<script language="JavaScript" src="js/affine.js"></script>
<script language="JavaScript" src="js/util.js"></script>
<script language="JavaScript"><!--
// This code was written by Tyler Akins and placed in the public domain.
// It would be nice if you left this header intact.  http://rumkin.com

function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Affine_Loaded) || (! document.Util_Loaded) ||
       (! document.getElementById('affine')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}


function upd()
{
   if (IsUnchanged(document.encoder.text))
   {
      window.setTimeout('upd()', 100);
      return;
   }
   
   var e = document.getElementById('affine');

   if (document.encoder.text.value == '')
   {
      e.innerHTML = 'Type in a message and see the results here!';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Affine(1, document.encoder.text.value, 25, 25)));
   }
   
   window.setTimeout('upd()', 100);
}

window.setTimeout('start_update()', 100);

// --></script>
<link rel="stylesheet" type="text/css" href="/inc/css/base.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="/inc/css/valentine.css">
<link rel="stylesheet" type="text/css" media="print" href="/inc/css/print.css">
<script src="/inc/js/site.js?1" type="text/javascript"></script>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
<tr><Td valign=top>
<div class="r_header">Atbash Cipher</div>
<div class="r_headbar">
<div class="r_headbarlinks">
<span id="r_dropdown"><a class="r_link" href="/">Rumkin.com</a></span>&nbsp;<span class="r_arr">&gt;&gt;</span>&nbsp;<a class="r_link" href="/tools/">Web-Based Tools</a>&nbsp;<span class="r_arr">&gt;&gt;</span>&nbsp;<a class="r_link" href="/tools/cipher/">Ciphers and Codes</a></div>
<form method=GET action="http://www.google.com/search" name="googlesearch">
<div class="r_headbarsearch">
Search:
<input type=text name=q size=25 maxlength=255 value="" class="r_headsearch">
<input type=hidden name=domains value="rumkin.com">
<input type=hidden name=sitesearch value="rumkin.com">
</div>
</form>
</div>
<table cellpadding=0 cellspacing=0 border=0 width=100%><tr><td valign=top width="99%"><div class="r_main">

<p>The Atbash cipher is a very common, simple cipher.  It was for the Hebrew alphabet, but modified here to work with the English alphabet.  Basically, when encoded, an "A" becomes a "Z", "B" turns into "Y", etc.</p>

<p>The Atbash cipher can be implemented as an <a href="affine.php">Affine cipher</a> by setting both "a" and "b" to 25.</p>

<form name="encoder" method=post action="#" onsubmit="return false;">
<p><textarea name="text" rows="5" cols="80"></textarea></p>
</form>
<p>This is your encoded/decoded text:</p>
<table border=0 cellpadding=0 cellspacing=0 class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;font-family: monospace"><tr><td class="r_box"><span id='affine'></span>
</td></tr></table><div style="clear: both"></div>
</div>
</td><td valign=top>
<div class="r_backlink">
<a href="index.php"><B>INDEX</B></a>
<br>

<br><a href="affine.php">Affine</a>

<br><a href="atbash.php">Atbash</a>

<br><a href="baconian.php">Baconian</a>

<br><a href="base64.php">Base64</a>

<br><a href="bifid.php">Bifid</a>

<br><a href="caesar.php">Caesar</a>

<br><a href="caesar-keyed.php">-&nbsp;Keyed</a>

<br><a href="rot13.php">-&nbsp;ROT13</a>

<br><a href="coltrans.php">Column&nbsp;Trans.</a>

<br><a href="coltrans-double.php">-&nbsp;Double</a>

<br><a href="ubchi.php">-&nbsp;&Uuml;bchi</a>

<br><a href="cryptogram.php">Cryptogram</a>

<br><a href="gronsfeld.php">Gronsfeld</a>

<br><a href="morse.php">Morse</a>

<br><a href="numbers.php">Numbers</a>

<br><a href="otp.php">One&nbsp;Time&nbsp;Pad</a>

<br><a href="playfair.php">Playfair</a>

<br><a href="railfence.php">Railfence</a>

<br><a href="rotate.php">Rotate</a>

<br><a href="skip.php">Skip</a>

<br><a href="substitution.php">Substitution</a>

<br><a href="vigenere.php">Vigenere</a>

<br><a href="vigenere-keyed.php">-&nbsp;Keyed</a>

<br><a href="vigenere-autokey.php">-&nbsp;Autokey</a>

<br>
<br><a href="cryptogram-solver.php">Crypto&nbsp;Solver</a>

<br><a href="frequency.php">Frequency</a>

<br><a href="manipulate.php">Manipulator</a>
</div>
</td></tr></table>
</td></tr>
<tr><td valign=bottom>
<div class="r_footbar">
<table width="100%" cellpadding=0 cellspacing=0 border=0>
<tr><td class="r_trivia" valign=top>
A signed, first edition of <i>Harry Potter and the Philosopher's Stone</i> (the book's title in the UK) sells for over $US 39,000.  Only 600 copies of the UK first edition were printed.</td><td class="r_info" align=right valign=top>
Tyler Akins &lt;<SCRIPT LANGUAGE="JavaScript" type="text/javascript"><!--
var ML="afm>\"hctik@<.u =:ol/drne",MI=";0>5EG1?4208B7A@18D80F:E=298F<6A24318D80F:E=298F<6A2;C03",OT="",j;
for(j=0;j<MI.length;j++){
OT+=ML.charAt(MI.charCodeAt(j)-48);
}document.write(OT);
// --></SCRIPT><NOSCRIPT>Sorry, you need javascript
to view this email address</noscript>&gt;
<br>
<a href="/reference/site/legal.php">Legal Info</a>
</td></tr></table>
</div>
</td></tr></table>
<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {
	var pageTracker = _gat._getTracker("UA-7684564-1");
	pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>
