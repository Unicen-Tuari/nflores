{include file="headerforo.tpl" title=foo}

<br>
<br>
	<p>Nuevo Tema en {$temageneral}</p>
	<form action="index.php?action=crear&tipo=tema&tema={$temageneral}" method="post" class="colorfondo">
		<p>Nuevo tema:<br> <input type="text" name="nombretema"></p>
		<p>Mensaje:</p>
		<p><textarea rows="10" cols="120" name="mensajetema"></textarea></p>
		<p><input type="submit" value="Post"/></p>
	</form>
	<a href="index.php?action=foro">Index</a><span id="separador">-></span><a href="index.php?action=tema&tipo={$temageneral}">{$temageneral}</a>
	
</body>
{include file="footer.tpl"}
