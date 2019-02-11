Bootstrap-Form-Generator

allows to generate a bootstrap form

usage

	$form = new BootstrapForm($_POST);


	<div class="container">
		<div class="row">
			<form action="" method="post" class="form-group col-lg-3 ">
				echo $form->input('username');
				echo $form->input('password');
				echo $form->submit();
			</form>
		</div>
	</div>

