<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
<table width="405" border="1"cellpadding="1"bordercolor="#FFFFFF" bigcolor="#999999">
<tr bgcolor="#FFCC33">
<td width="103" height="25" align="right">name:</td>
<td width="144" height="25"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
</tr>
<tr bgcolor="#FFCC33">
<td height="25"align="right">gender:</td>
<td height="25"colspan="2" align="left"><input name="sex" type="radio" value="man"checked>man
<input name="sex" type="radio" value="woman">woman</td>
</tr> 
<tr bgcolor="#FFCC33">
<td width="103" height="25" align="right"> password:</td>
<td width="289" height="25" colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
</tr>
<tr bgcolor="#FFCC33">
<td height="25" align="right">degree:</td>
<td height="25" colspan="2" align="left" ><select name="select">
<option value="professional">professional</option>
<option value="bachelor" selected>bachelor</option>
</select></td>
</tr>
<tr brcolor="#FFCC33">
<td height="25" align="right">hobby:</td>
<td height="25" colspan="2" align="left">
<input name="font " type="checkbox"id="fond " value="music">music
<input name="fond " type="checkbox" id="fond" value="other">other
</td>
</tr>
<tr bgcolor="#FFCC33">
<td height="25" align="right">picture:</td>
<td height="25" colspan="2"><input name="photo" type="file" size="20" maxlength="1000"id="photo"></td>
</tr>
<tr bgcolor="#FFCC33">
<td height="25"align="right">individual resume:</td>
<td height="25" colspan="2"><textarea name="intro" cols="28" rows="4" id="intro"></textarea></td>
</tr>
<tr align="center" bgcolor="#FFCC33">
<td height="25" colspan="3"><input type="submit" name="submit" value="submit">
</tr>
</table>
</form>

