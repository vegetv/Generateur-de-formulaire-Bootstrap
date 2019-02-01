#Bootstrap-Form-Generator

allows to generate a bootstrap form

- usage

<?php

		require('class/Autoloader.php');
		Autoloader::register();

		$form = new BootstrapForm($_POST);
?>

	<div class="container">
		<div class="row">
			<form action="" method="post" class="form-group col-lg-3 ">
				<?php
					echo $form->input('username');
					echo $form->input('password');
					echo $form->submit();
				?>
			</form>
		</div>
	</div>

