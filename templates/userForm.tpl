{include file="header.tpl"}
<h1>{$Titulo}</h1>
{if $Titulo == "Login"}
	<form method="post" action="verify" class="navbar-form">
{else}
	<form method="post" action="newUser" class="navbar-form">
{/if}
	<div class="form-group">
		<input class="form-control" placeholder="Usuario" type="text" name="Usuario" value="">
		<input class="form-control" placeholder="Contraseña" type="password" name="Password" value="">
	</div>
	<h3>{$Mensaje}</h3>
	<button type="submit" class="btn btn-primary"> {$Accion} </button>
</form>
{include file="footer.tpl"}