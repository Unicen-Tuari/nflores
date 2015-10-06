{include file="headerforo.tpl" title=foo}

	<a href="index.php?action=foro">Index</a>
	<br><br>
	<form action="index.php?action=crear&tipo=tema&tema={$nombretema}" method="post">
		{if $nuevo eq 'tema'}
		<p>Nuevo tema: <input type="text" name="nombretema"></p>
		<input type="hidden" value="{$idt}" name="idtema" />
		{else}
		<input type="hidden" value="{$idt}" name="idtema" />
		{/if}
		
		<p>Mensaje:</p>
		<p><textarea rows="10" cols="100" name="mensajetema"></textarea></p>
		
		<p><input type="submit" value="Post"/></p>
	</form>
</div>
</div>
</body>

{include file="footer.tpl"}
