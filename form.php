<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'paigegryski.com' // Put you mail domain here
	,
	'Paige Gryski' // Put your site name / form name here
	,
	'paigegryski@gmail.com' // Where will the form notification be sent?
	,
	'noreply@paigegryski.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
