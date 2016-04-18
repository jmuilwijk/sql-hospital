<?php
	require_once "create.logic.php";	
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>	
			<select for="species" id="species" name="species">
				<?php 
					foreach ($species as $specie) {
						?><option value="<?php echo $specie['id'];?>"><?php echo $specie['species'];?></option>
						<?php
					}
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
			<label for="name">Gender:</label><br>
			<label for="name">Male:</label>
			<input type="radio" name="gender" value="male" checked><br>
			<label for="name">Female:</label>
			<input type="radio" name="gender" value="female"><br>
		<div>
		<div>
			<label for="name">Client:</label>	
			<select for="client" id="client" name="client">
				<?php 
					foreach ($clients as $client) {
						?><option value="<?php echo $client['id'];?>"><?php echo $client['name'];?></option>
						<?php
					}
				?>
			</select>
		</div>
			<label></label>
			<input type="submit" value="Save">
		</div>
		<?php var_dump($clients['id'])?>
	</form>
<?php
	include "../common/footer.php";
?>