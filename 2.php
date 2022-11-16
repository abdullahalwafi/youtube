
<?php
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['code'];
?>
<title>TOOLS ENCODE & DECODE </title>
<meta name="description" content="Tools Encode & Decode ini dibuat oleh ./WXL582GHOST"> 
<meta name="author" content="./WXL582GHOST"> 
<STYLE>
body,td,th {font-family: Verdana;font-size: 12px;color: #00FF00;font-weight: bold;}
.jaya{ font-family:Vivaldi;font-size:50px;color: #00FF00;}
input {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: 8pt Verdana;}
select {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: 8pt Verdana;}
submit {BORDER-RIGHT:buttonhighlight 2px outset;BORDER-TOP:buttonhighlight 2px outset;BORDER-LEFT:buttonhighlight 2px outset;BORDER-BOTTOM: buttonhighlight 2px outset;BACKGROUND-COLOR: #000099;COLOR: #FFFF00;width: 30%;}
textarea {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: Fixedsys bold;}
BODY {margin-top: 1px;margin-right: 1px;margin-bottom: 1px;margin-left: 1px;SCROLLBAR-FACE-COLOR: #111111; SCROLLBAR-HIGHLIGHT-COLOR: #111111;SCROLLBAR-ARROW-COLOR: #c5c5c5;SCROLLBAR-BASE-COLOR: #253546;BACKGROUND-COLOR: #000000;}
</STYLE>

<center>
<div class="jaya">TOOLS ENCODE & DECODE</div>
<form method="post"><br>
<textarea class='inputz' cols=80 rows=10 name="code"></textarea><br><br>
<select class='inputz' size="1" name="ope">
<option value="urlencode">url</option>
<option value="base64">Base64</option>
<option value="ur">convert_uu</option>
<option value="json">json</option>
<option value="gzinflates">gzinflate - base64</option>
<option value="str2">str_rot13 - base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="gzinflater">gzinflate - str_rot13 - base64</option>
<option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew">str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
</select>&nbsp;<br><br><input class='inputzbut' type='submit' name='submit' value='Encode'>
<input class='inputzbut' type='submit' name='submits' value='Decode'>
</form>

<?php include_once('include.php')?>