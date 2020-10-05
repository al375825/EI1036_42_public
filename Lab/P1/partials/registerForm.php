<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="50" value="<?php print $userName ?>"
		 placeholder="Introduce tu nombre" />
		<br/>
		<label for="surname">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="50" value="<?php print $surName?>"
		 placeholder="Introduce tus apellidos" />
		<br/>
		<label for="address">Dirección</label>
		<br/>
		<input type="text" name="address" size="20" maxlength="50" value="<?php print $address?>"
		 placeholder="Introduce tu dirección" />
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" size="20" maxlength="50" value="<?php print $city?>"
		 placeholder="Introduce tu ciudad" />
		<br/>
		<label for="zip_code">Dirección</label>
		<br/>
		<input type="text" name="zip_code" size="20" maxlength="5" value="<?php print $zip_code?>"
		 placeholder="Introduce tu código postal" />
		<br/>
		<label for="foto_file">Foto</label>
		<br/>
		<input type="text" name="foto" size="20" maxlength="25" value="<?php print $foto_file?>"
		 placeholder="Introduce tu foto" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>