 <!-- This line adds jquery to the page, otherwise the script tags at the bottom will not run -->
   
    <!-- Google Translate Element begin -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
               /* pageLanguage: 'en',*/ includedLanguages: 'en,si,ar,bn,de,te,ta,gu,th,uk',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style type="text/css">
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
        div#google_translate_element div.goog-te-gadget-simple {
            border: none;
            background-color: transparent;
            /*background-color: #17548d;*/ /*#e3e3ff*/
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
            text-decoration: none;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
            color: #aaa;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
            color: white;
        }
        
        .goog-te-gadget-icon {
            display: none !important;
            /*background: url("url for the icon") 0 0 no-repeat !important;*/
        }

        /* Remove the down arrow */
        /* when dropdown open */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
            display: none;
        }
        /* after clicked/touched */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"] {
            display: none;
        }
        /* on page load (not yet touched or clicked) */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"] {
            display: none;
        }

        /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"] {
            display: none;
        }
        /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
            display: none;
        }
        /* HIDE the google translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        
#goog-gt-tt{display: none !important; top: 0px !important; } 
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
    </style>
    <!-- Google Translate Element end -->

<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   
             </nav>
           </div>
           <a class="brand" href="index.php"><img src="images/icon.png" height="60px" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">

		            <li><a href="index.php">Home</a></li>
		            <li><a href="about.php">About</a></li>
		            <li><a href="search.php">Search</a></li>
		            <li><a href="faq.php">Faq</a></li>
		            

		           
		            
		    		<!--
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                
		              </ul>
		            </li>-->
		            <li class="last"><a href="contact.php">Contacts</a></li>

		            <li>
		        		<?php 
						  if(isloggedin()){
						  	$id=$_SESSION['id'];
						  	$nam = $_SESSION['username'];
						  	echo "<li><a href=\"userhome.php?id=$id\">Profile</a></li>";
						  	/*echo "<li><a style='color: limegreen;font-weight: bold;font-size: 15px;'  href=\"userhome.php?id=$id\">".$nam."</a></li>";*/
						  	echo "<li><a style='background-color: red' href=\"logout.php\">Logout</a></li>";
						  }
						  else{
						  	echo "<li><a  style='background-color: green' href=\"login.php\">Login</a></li>";
						  	echo "<li><a style='background-color: orange' href=\"register.php\">Register</a></li>";
						  }
						?>
		        	</li>
		        	
		        	<!-- <li ><p style="color: white;">Language</p>
		        		<div style="width: 50%" id="google_translate_element">
		            	<script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
						}
						</script>

						<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						<script>$(window).load(function(){
						    $(".goog-logo-link").empty();
						    $('.goog-te-gadget').html($('.goog-te-gadget').children());
						})</script></div>
		            </li> -->

		            	<li style="color: white;font-size: 11px;"><p>Language</p>
		            		 <div id="google_translate_element"></div>
		            	</li>

		        		
		            
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->

<script>
        $('document').ready(function () {
            $('#google_translate_element').on("click", function () {

                // Change font family and color
                $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div") //, .goog-te-menu2 *
                .css({
                    'color': '#544F4B',
                    'background-color': '#e3e3ff',
                    'font-family': '"Open Sans",Helvetica,Arial,sans-serif'
                });

                // Change hover effects  #e3e3ff = white
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                    $(this).css('background-color', '#17548d').find('span.text').css('color', '#e3e3ff');
                }, function () {
                    $(this).css('background-color', '#e3e3ff').find('span.text').css('color', '#544F4B');
                });

                // Change Google's default blue border
                $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

                $("iframe").contents().find('.goog-te-menu2').css('background-color', '#e3e3ff');

                // Change the iframe's box shadow
                $(".goog-te-menu-frame").css({
                    '-moz-box-shadow': '0 3px 8px 2px #666666',
                    '-webkit-box-shadow': '0 3px 8px 2px #666',
                    'box-shadow': '0 3px 8px 2px #666'
                });
            });
        });
    </script>