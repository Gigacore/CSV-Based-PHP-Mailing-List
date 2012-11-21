CSV Based PHP Mailing List
==========================

A simple PHP Mailing List that stores the name and email address in a CSV file and hence requires no additional database. Comes with form validation and AJAX interface.

See it in action: http://design.themebin.com/csv-mailing-list/

##Introduction

This script stores names and email address of subscribers in a simple `.csv` file in the `mail` directory that is secured by an `.htaccess` file. So only you can access it via FTP or SSH. Future verison may include admin page to access the file via web browser.



##Usage

####Begin by adding latest jQuery snippet in header.
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

####Link the `query.plugins.js` file that contains validation libraries.
    <script src="query.plugins.js" type="text/javascript"></script>

####And call the required functions to validate and display message.

     $(document).ready(function() { 
  	    $('.message').hide();
		    $("#subscribe").validate();
    	    $('#subscribe').ajaxForm(function() { 
    		$('#subscribe').hide();	
			$('.message').fadeIn(300);		
        }); 
     }); 

Note that `#subscribe` is the id attribute of your form that you are going to use.

####File Permissions

CHMOD `mail` directory to `755` and `.csv` file to `644`.

642 ensures you are only letting people to write the csv file and deny read.

##License

CSV Based PHP Mailing List is licensed under MIT.