
<?php require('logic.php'); ?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Jody Moore</title>
	  <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="/css/styles.css" rel="stylesheet"/>

	  <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script> 
    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
  </head>
  <body>
    <div id="div1"> 
		  <h1>Jody Moore</h1>
		  <img src="img/myPic3.jpg" alt="Jody Moore" />
		  <h2>About Me</h2>
        <p>			
          My name is Jody Moore.  In the past three years I've discovered my interest in programming. I have just completed a programming certificate from Harvard Extension School and have recently received my Amazon Web Services Solutions Architect-Associate Certification.  This course will help improve my PHP, Laravel, and CSS skills. I look forward to working on an E-commerce style site.
        </p>
		  <h2>Random Quote</h2>
		  <blockquote><h4><?php echo $RandomQoute; ?></h4></blockquote>
	  </div>
  </body>
</html>