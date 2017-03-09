<?php
	//Set the page title
	$title = 'Contact Us | ICF Builders Inc.';
	$customStylesheet = "<link rel='stylesheet' href='styles/contact.css'>";
	//Header portion of the page
	include 'header.php';
	/*PAGE MAIN CONTENT*/
?>
<?php
$result = "";
$isQuoteRequest = 0;
if(isset($_GET['c'])){
    //Quote request, change the drop down to quote request
    if($_GET['c'] == "quote"){
        $isQuoteRequest = 1;
    }
}

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = $_POST['queryType'];

    $to = 'tyelford@gmail.com';

    $body  = "From: $name\n Email: $email Message: $message";

    $errName = "";
    $errEmail = "";
    $errMessage = "";

    //Check if the name has been entered
    if(!$_POST['name']){
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }

    $subject = "";

    if($query == "general"){
        $subject = "[General Query] ";
    }
    if($query == "quote"){
        $subject = "[Quote Request] ";
    }
    if($query == "comp"){
        $subject = "[Compliment] ";
    }
    
    $subject = $subject . "from the Website";

    //If there are no errors then send the message
    if(!$errName && !$errEmail && !$errMessage){
        if(/*mail ($to, $subject, $body, $from)*/true){
            $result = '<div class="alert alert-success">Thank You! We will be in touch</div>';
        }else{
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>

	<div class='container'>
	  
        <h2 class="text-center">Contact Us</h2>

        <form action="contact.php" method="post">
            <div class="form-group">
                <label>Type of Query</label>
                <select class="form-control" name="queryType">
                    <option value="general">General Question</option>
                    <option value="quote" <?php if($isQuoteRequest == 1){echo " selected";}?> >Quote Request</option>
                    <option value="comp">Compliment</option>
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
                <input type="submit" name="submit" value="Send Message" id="submit" class="btn btn-default" />
            </div>

            <div class="form-group">
                <?php echo $result; ?>
            </div>
        </form>

	</div>
	
	
<?php	
	/*END OF PAGE CONTENT*/
	//Foot portion of the page
	include 'footer.php';

?>