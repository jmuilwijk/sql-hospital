<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['patient_id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="patient_name" value="<?=$patient['patient_name']?>">
		</div>
		<div>
			<label for="name">Species:</label>	
			<select for="species" id="species" name="species">
				<?php 
					foreach ($species as $specie) {
						?><option value="<?php echo $specie['id'];?>"<?php if($specie['id']==$patient['species_id']){
							echo'selected = "true"';
							}?>><?php echo $specie['species'];?></option>
						<?php
					}
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		</div>
			<label for="name">Gender:</label><br>
			<label for="name">Male:</label>
			<input type="radio" name="gender" value="male" <?php if($patient['gender'] == 'male'){
					echo'checked';
				}?>><br>
			<label for="name">Female:</label>
			<input type="radio" name="gender" value="female" <?php if($patient['gender'] == 'female'){
					echo'checked';
				}?>><br>
		<div>
		<div>
			<label for="name">Client:</label>	
			<select for="client" id="client" name="client">
				<?php 
					foreach ($clients as $client) {
						?><option value="<?php echo $client['id'];?>"<?php if($client['id']==$patient['clients_id']){
							echo'selected = "true"';
							}?>><?php echo $client['name'];?></option>
						<?php
					}
				?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>