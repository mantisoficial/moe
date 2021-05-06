<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?= $title; ?></h1>
		<div class="form-group">
		<label for="type">Tipo de Conta</label>
		<select name="type">
			<option value="" selected disabled hidden>Escolha uma opção</option>
			<option value="empregador">Empregador</option>
			<option value="estagiário">Estagiário</option>
		</select>
		</div>
		<div class="form-group">
			<label>Nome:</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Nome de usuário:</label>
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label>Senha:</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Confirmar senha:</label>
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		</div>
		<button type="submit" class="btn btn-primary btn-block">Enviar</button>
	</div>
</div>
<?php echo form_close(); ?>