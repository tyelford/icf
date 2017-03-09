<?php
	//Set the page title
	$title = 'Contact Us | ICF Builders Inc.';
	$customStylesheet = "<link rel='stylesheet' href='styles/contact.css'>";
	//Header portion of the page
	include 'header.php';
	/*PAGE MAIN CONTENT*/
?>
<?php
$action = $_REQUEST['action'];
if($action == "new"){
    //Display the form
    ?>

	<div class='container'>
	  
        <h2 class="text-center">Contact Us</h2>

        <form action="new" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Type of Query</label>
                <select class="form-control">
                    <option>General Question</option>
                    <option>Quote Request</option>
                    <option>Compliment</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" name="name"/>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" />
            </div>

            <div class="form-group">
                <label>Message To Us</label>
                <textarea class="form-control" name="message"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Send Message</button>
            </div>
        </form>

	</div>
	
	<?php
}
else{
    //Send the submitted data
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];


    $from = "From: $name<$email>\r\n";
    $subject = "Message from the website";
    $to = "tyelford@gmail.com";
    $headers = $from . 
                'Reply-To: ' . $email . '\r\n' .
                'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Email Sent";
}
	
	?>
	
	
<?php	
	/*END OF PAGE CONTENT*/
	//Foot portion of the page
	include 'footer.php';

?>