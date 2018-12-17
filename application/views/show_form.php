<!DOCTYPE html>
<html>
<head>
<title>Encryption In CodeIgniter</title>

</head>
<body>

<div>
<h1>Encryption</h1>
	<?php

		echo form_open('EncryptionController/encoder');
		echo form_label('Enter your message', 'message');
		echo form_input('message');
		echo form_submit('submit', 'Encode');
		echo form_close();

		if(isset($key))
		{
			echo form_fieldset('Encryption Key');
			echo "$key";
			//echo form_filedset_close();
		}
		

	?>
</div>

<br>
<div>
<h1>Decryption</h1>
	<?php

		echo form_open('EncryptionController/decoder');
		echo form_label('Enter your message', 'message');
		echo form_input('message');

		echo form_submit('submit', 'Decode');
		echo form_close();

		if(isset($key1))
		{
			echo form_fieldset('Decryption Key');
			echo "<strong> $key1 </strong>";
			//echo form_filedset_close();
		}
		

	?>

</div>

	<?php

	$passUser = "12345";
	$hashedPass = password_hash($passUser, PASSWORD_DEFAULT);
	echo $hashedPass;



	?>

</body>
</html>