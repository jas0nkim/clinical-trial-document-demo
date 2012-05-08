<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/pepper-grinder/jquery-ui-1.8.20.custom.css" />
    <title>Clinical Trial Document Template Generator</title>
</head>
<body>
    <form id="login-form">
		<h1>Welcome to Template Generator</h1>

		<h3>Please enter your personal information</h3>
		<div><lable>Title</lable>
			<select name="title">
				<option value="Dr.">Dr.</option>
				<option value="Mr.">Mr.</option>
				<option value="Ms.">Ms.</option>
			</select>
		</div>
		<div><lable>Firstname</lable><input type="text" name="firstname" /></div>
        <div><lable>Lastname</lable><input type="text" name="lastname" /></div>
		<div><lable>Address</lable><input type="text" name="address" /></div>
		<div><lable>Email</lable><input type="text" name="email" /></div>
		<div><lable>Phone number</lable><input type="text" name="phone" /></div>

		<h3>Create your sections</h3>

		<div><input type="submit" value="Download Template" /></div>
    </form>

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type="text/javascript" src="js/jui-form.js"></script>
    <script type="text/javascript">
        $(function() {
			//$("form").form();

			$("#login-form").submit(function(event) {
				var $form = $(this),
					$inputs = $form.find("input, select, button, textarea"),
					serializedData = $form.serialize();

				// let's disable the inputs for the duration of the ajax request
				$inputs.attr("disabled", "disabled");

				var jqxhr = $.ajax({
						url: "api/docx/generate.php",
						type: "POST",
						data: serializedData
					}).done(function(data) {
						if (data.success) {
							setTimeout("window.open('"+data.filepath+"', 'Download')",1000);
						} else {
							alert("Error - ");

						}
					}).fail(function() {
						alert("error");
					}).always(function() {
						alert("complete");
						$inputs.removeAttr("disabled");
					});

				event.preventDefault();
			});
        });
    </script>
</body>
</html>