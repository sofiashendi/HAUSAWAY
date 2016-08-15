<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact Us | HAUS/AWAY</title>
    
    <?php include('includes/head.php'); ?>

</head>

<body id="contact">

    <?php include('includes/header.php'); ?>
	
    <section id="content">
	    
	    <section id="detail">
	    
		    <h1>Contact Us</h1>
		    
		    <div id="form_area">
		    
			    <p>Interested in getting started with HAUS/AWAY and figure out what package fits best your needs? Fill out the form below and we will get back to you as soon as possible.</p>
			    
			    <p>Don't forget to check out the <a href="/faq">Frequently Asked Questions</a> until then!</p>
			    
			    <form id="contactForm">
		            <input type="text" class="form-control" placeholder="Your Name *" id="name" required>
		            <input type="email" class="form-control" placeholder="Your Email *" id="email" required>
		            <textarea class="form-control" placeholder="Your Message *" id="message" required></textarea>
		            <button type="submit">Send my message</button>
		        </form>
	        
		    </div><!-- #form_area -->
	        
	        <div id="success_area">
		        <p>Your message was successfully sent!</p>
		        <p>We will get back to you shortly and look forward to meeting you.</p>
	        </div><!-- #success_area -->
        
	    </section><!-- #detail -->
    </section><!-- #content -->
    
    <?php include('includes/footer.php'); ?>

</body>

</html>
