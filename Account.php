<?php ob_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0042)https://accounts.gmac.com/Account/Register -->
<html class="js no-flexbox flexbox-legacy canvas canvastext postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache gr__accounts_gmac_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Your Account | mba.com</title>
    <link rel="shortcut icon" href="http://theblackbucks.com/img/logo.png">
    <link rel="apple-touch-icon" href="http://theblackbucks.com/img/logo.png">
    <meta name="WT.cg_sv" content="ASH-PWEB02">
    <script type="text/javascript" async="" src="./Account_files/_Incapsula_Resource"></script><script id="hs-analytics" src="./Account_files/504970.js.download"></script><script async="" src="./Account_files/analytics.js.download"></script><script async="" src="./Account_files/gtm.js.download"></script><script type="text/javascript" src="./Account_files/ruxitagentjs_ICA2SVfqr_10139180201161915.js.download" data-dtconfig="rid=RID_-1715026035|rpid=-1847581261|domain=gmac.com|reportUrl=/rb_bf16975rns|app=639228fbf966f756|srms=1,1,,,|uxrgcm=100,25,300,3;100,25,300,3|featureHash=ICA2SVfqr|srad=1|lastModification=1548370174919|dtVersion=10139180201161915|tp=500,50,0,1|rdnt=1|uxrgce=1|agentUri=/ruxitagentjs_ICA2SVfqr_10139180201161915.js"></script><script src="./Account_files/modernizr.min.js.download" type="text/javascript"></script>
    <link href="./Account_files/reset.css" rel="stylesheet" type="text/css">
    <link href="./Account_files/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css">
    <link href="./Account_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./Account_files/im-mba.css" rel="stylesheet" type="text/css">
    <script src="./Account_files/jquery.min.js.download" type="text/javascript"></script>
    <script src="./Account_files/jquery-ui-1.8.18.custom.min.js.download" type="text/javascript"></script>
    <script src="./Account_files/jquery.watermark.min.js.download" type="text/javascript"></script>
    <script src="./Account_files/common.js.download" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="./Account_files/30777cb7-2220-4e20-b913-530ea7e2ac32.css">
    <link rel="manifest" href="https://accounts.gmac.com/site.webmanifest?ver=3">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="./Account_files/global.css" rel="stylesheet" type="text/css">
    
	
	<style type="text/css">
		.required2 {
			display: inline-block;
			position: absolute;
			color: red;
			top: 7px;
			left: -10px;
		}

		.fixAlignment {
			width: 100% !important;
			display: inline-block !important;
			margin-right: 5px !important;
			margin-left: 0px !important;
			font-weight: 700 !important;
		}
	.hea{
    box-sizing: border-box;

color: #fff;

font-family: "Basis Grotesque", Helvetica, Arial, sans-serif;

font-size: 16px;

font-stretch: 100%;

font-style: normal;

font-weight: 500;

line-height: 22.85px;

margin: 0px;
}
.bod{
    box-sizing: border-box;

color: #fff;

font-family: "Basis Grotesque", Helvetica, Arial, sans-serif;

font-size: 13px;

font-stretch: 100%;

font-style: normal;

font-weight: 500;

line-height: 22.85px;

margin: 0px;
}

.error{
    
        font-weight: 100;
    font-size: 11px;
    font-family: "BasisGrotesque-Regular", Helvetica, Arial, sans-serif;
    color: #f00;
    
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <script language="javascript">
$(document).ready(function()
{    
    $("#form1").submit(function(event)
     {

      event.preventDefault();
      var firstName = $("#firstName").val();
      var lastName = $("#lastName").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var confirmPassword = $("#confirmPassword").val();
      var optingmass = $("#optingmass").val();
      var optincareer = $("#optincareer").val();
      var optingmat = $("#optingmat").val();
  
        if(firstName=="" || lastName=="" || email=="" || password==""|| confirmPassword=="")
        {
            document.getElementById('error').innerHTML=' ';
            if(firstName==""){  document.getElementById('errorfirstname').innerHTML='Plese Enter First Name';   } else {  document.getElementById('errorfirstname').innerHTML=' '; } 
            if(lastName==""){  document.getElementById('errorlastName').innerHTML='Plese Enter Last Name';   } else {  document.getElementById('errorlastName').innerHTML=' '; } 
            if(email=="") { document.getElementById('erroremail').innerHTML='Plese Enter Email'; } else { document.getElementById('erroremail').innerHTML=' '; }
            if(password=="") { document.getElementById('errorpassword').innerHTML='Plese Enter Password'; } else { document.getElementById('errorpassword').innerHTML=' '; }
            if(confirmPassword=="") { document.getElementById('errorconfirmPassword').innerHTML='Plese Enter Password Again'; } else { document.getElementById('errorconfirmPassword').innerHTML=' '; }
            
             if(confirmPassword != password){ document.getElementById('error').innerHTML='Password doesnot match'; }else { document.getElementById('error').innerHTML=' '; }
  
        }
   else{
        if(confirmPassword != password){ document.getElementById('error').innerHTML='Password doesnot match'; }else { 
        
        
                 document.getElementById('error').innerHTML=' '; 

          $.post("ajax.php", {'submit':'submit','firstName': firstName,'lastName':lastName,'email':email,'password':password,'optingmass':optingmass,'optincareer':optincareer,'optingmat':optingmat}, function(result){
           if(result == 1)
            {
               // window.location.href = "indexbe.php";
                 
            }
            else
            {
                 document.getElementById('error').innerHTML='Email already exist. Plese login ! ';
            }
             
          });
         
        
        }
    }
  
    });
});

</script>


</head>
<body data-gr-c-s-loaded="true">


    <div class="main-container">

   
   
   <?php include '../header.php'; ?>
   
   




<div class="header-sub-text">
	
</div>

        <div class="body-container">
            

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<h1 class="articleheading">Create Your Account</h1>
		</div>
	</div>
	<div class="row">
<form id='form1' method="post">	


	<div class="col-sm-4 col-md-4 app-branding">
			<img src="./Account_files/intense-woman-with-laptop_gs3501743_400x375.jpg" alt="Student Studying">
		</div>
		<div class="col-sm-8 col-md-8 col-xs-12">
			<div class="app-sub-text">
<p>Congratulations on taking your first step toward accomplishing your educational goals! Creating an account on Institute for Artificial Intelligence will give you resources to take control of your AI career journey and guide you through the steps needed to get into the best career for you.</p>
<p>With your account, you can:</p>
<ul>
    <li>Take actual test.</li>
<li>Access some free resources for preparation</li>
    <li>Register, reschedule or cancel your exam appointment, as well as manage your exam scores.</li>
    <li>Generate course completion and score batches for your social media purposes</li>
</ul></div>
		</div>
		<div class="col-sm-12 col-md-12 col-xs-12">
			<div class="register">
				<fieldset>
					<div class="register-text1"></div>

					
					<div class="form col-md-6">
                  
						<div class="form-row">
							<div class="fixAlignment">
								<input type="text" id="firstName" name="firstName" class="form-control watermark" placeholder="First Name">
                                <span id='errorfirstname' class='error'></span>
							</div>
						</div>
						<div class="form-row">
							<div class="fixAlignment">
								<input type="text" id="lastName" name="lastName" class="form-control watermark" placeholder="Last Name">
                                <span id='errorlastName' class='error'></span>
							</div>
						</div>
						<?php if(isset($_GET['id'])){
						$email=$_GET['id'];
							?>
						<div class="form-row">
							<div class="fixAlignment">
								<span id="spanEmail" class="required2">*</span>
								<input type="text" id="email" name="email" value='<?=$email?>' readonly class="form-control watermark" placeholder="Email">
                                <span id='erroremail' class='error'></span>
							</div>
						</div>
						
						<?php
							}
							?>
						<div class="form-row">
							<div class="fixAlignment">
								<span id="spanPassword" class="required2">*</span>
								<span><input id="password" name="password" type="password" maxlength="16" class="form-control watermark" placeholder="Password"></span>
                                <span id='errorpassword' class='error'></span>
                            </div>
						</div>
						<div class="form-row">
							<div class="fixAlignment">
								<span id="spanConfirmPassword" class="required2">*</span>
								<span><input id="confirmPassword" name="confirmPassword" type="password" maxlength="16" class="form-control watermark" placeholder="Confirm Password"></span>
                                
                                <span id='errorconfirmPassword' class='error'></span>
                                <span id='error' class='error'></span>
							</div>
						</div>
							<div class="form-row">
								<span style="color: red">*</span>&nbsp;required fields
							</div>
						</div>
					
				</fieldset>
				<fieldset>
					<legend><strong>Communication Preferences</strong></legend>
					<div class="signupTerms">
					<div class="signupTermsRow">
						<div class="checkbox checkbox-info checkbox-circle sign-check">
							<input name="optingmass" id="optingmass" type="checkbox">
							<label for="optingmass"></label>
						</div>
						I want to connect with organizations, professional institutes, and strategic partners of IAI who participate in the AI programs. I consent to IAI sharing my email address, and other account profile data, with the IAI participants to communicate with me about educational programs, financial aid, career opportunities, test prep, and participation in research studies.
<br><br>

					</div>
							<div class="marketing"><strong>I want to receive additional information about:</strong></div>
					<div class="signupTermsRow">
						<div class="checkbox checkbox-info checkbox-circle sign-check">
							<input name="optincareer" id="optincareer" type="checkbox">
							<label for="optincareer"></label>
						</div>
						Careers, Jobs, and other information about AI events.
					</div>
					<div class="signupTermsRow">
						<div class="checkbox checkbox-info checkbox-circle sign-check">
							<input name="optingmat" id="optingmat" type="checkbox">
							<label for="optingmat"></label>
						</div>
						The exam, AI education, and other offers and promotions from IAI.
<br><br>
I understand that I can unsubscribe through my profile by contacting <a href="https://www.theblackbucks.com/service/contact-us.aspx" target="_blank">IAI Customer Care</a>.
					</div>
					</div>
				</fieldset>
				<fieldset>
					<legend><strong>Terms of Use</strong></legend>

					<p class="terms">I acknowledge that I may receive email communications from IAI related to products or services that I use and invitations to participate in IAI survey research.</p>
					<input type="submit" name='submit' value="Create Account" class="button-primary pull-left"> 
                    <a class="forgotPassword button-link" href="https://accounts.gmac.com/Account/Login">I already have an Account</a>
				</fieldset>
			</div>
		</div>
</form>		<div class="clearfix"></div>
	</div>
	</div>

<div id="popup-tpo-tou" class="tou-popup">
	<div class="tou-content">
		<div class="tou-header"></div>
		<span class="close-button" onclick="$(&#39;#popup-tpo-tou&#39;).dialog(&#39;close&#39;);"></span>
		<div class="clearfix"></div>
		
	</div>
</div>
        </div>
  

<div class="row" style="background-color:#242424;    margin: 0px;">
<div id="clearFooter"></div>
<div class="container" style="background-color:#242424;max-width: 1227px;">
<style>
.col-md-2{
  text-align: center;
    border: 0px solid grey;
    padding: 0px;  
}
p {
    margin: 0px;
}
</style>
<div class="row" style="padding-bottom:5%;    padding-top: 5%;">
					<div class="col-md-2" style="  border:0px solid grey;">
						<div class="box2" style="  background:transparent; padding:5%;text-align:left; ">
							
							<div ><h4 class="hea">Programs for Organizations</h4></div>
							<div style=" text-align:left; ">
                        <p><a class="bod" style="text-decoration:none;color:#fff;" href="../trainingfororgs.php">Digital Transformation</a></p>
                        <p><a class="bod"style="text-decoration:none;color:#fff;" href="../trainingfororgs.php">Leadership Development</a></p>
                        <p><a class="bod" style="text-decoration:none;color:#fff;" href="../trainingfororgs.php">Learning and Development</a></p>
                        <p><a  class="bod" style="text-decoration:none;color:#fff;" href="../trainingfororgs.php">Customized Solutions</a></p>
                        </div>
						</div>
					</div>
					<div class="col-md-2"  style="   border:0px solid grey;">
						<div class="box2" style="  background:transparent;   padding:5%;text-align:left; ">
							
							<div><h4 class="hea">Post Graduate Programs in Emerging Technologies</h4></div>
							
							<div style="font-size:0.8rem!important; color:white; line-height:1.2rem; text-align:left; ">
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../pgp.php">PGP in Digital Technologies</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../AIandMachineLearning.php">PGP in Artificial Intelligence</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../BigDataandDataScience.php">PGP in Data Science</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../IoT-SolutionArchitecture.php">PGP in Internet of Things</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../EcommerceandMobile.php">PGP in Ecommerce</a></p>
</div>							
						</div>
					</div>
					<div class="col-md-3" style="   border:0px solid grey;">
						<div class="box2" style="  background:transparent;   padding:0%;padding-top:1%;text-align:left; ">
							
							<div ><h4 class="hea"> Professional Certificate Courses - Emerging Technologies</h4></div>
							
						<div style="font-size:0.8rem!important; color:white; line-height:1.2rem; text-align:left; ">
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../StatisticsforManagers.php">Statistics for Managers</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../Blockchain.php">Blockchain</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../MachineLearning.php">Machine Learning</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../CloudComputing.php">Cloud Computing</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../BusinessAnalytics.php">Business Analytics</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../EnterpriseArchitecture.php">Enterprise Architecture</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../ManagingLargeDatabases.php">Managing Large Databases</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../Python.php">Python / R</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../RoboticProcessAutomation.php">Robotic Process Automation</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../CyberSecurity.php">Cyber Security</a></p>
<p><a class="bod"  style="text-decoration:none; color:#fff;" href="../UserInterfaceandExperienceDesign.php">User Interface and Experience Design</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../WirelessSensorNetworks.php">Wireless Sensor Networks</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../InternetofThings.php">IoT Solution Architecture</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../Visualization.php">Visualization</a></p>
</div>
						</div>
					</div>
                    
                    
                    
                    
                    	<div class="col-md-2"  style="   border:0px solid grey;">
						<div class="box2" style="  background:transparent;   padding:5%;text-align:left; ">
							
							<div ><h4  class="hea">Post Graduate Programs in Management</h4></div>
                            <div style="font-size:0.8rem!important; color:white; line-height:1.2rem; text-align:left; ">
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../Financefornon-financeManagers.php">Finance for Executives</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../OperationsManagement.php">Operations Management</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../StrategyandLeadership.php">Strategy and Leadership</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../HumanResourceManagement.php">Human Resource Management</a></p>
</div>                      
						</div>
					</div>
                    	<div class="col-md-3"  style="   border:0px solid grey;">
						<div class="box2" style="  background:transparent;   padding:0%;padding-top:1%;text-align:left; ">
							
							<div ><h4 class="hea">Professional Certificate Courses in Management</h4></div>
							
                            <div style="font-size:0.8rem!important; color:white; line-height:1.2rem; text-align:left; ">
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="Statistics.php">Statistics and Business Analytics</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../FinancialAccounting.php">Financial Accounting</a></p>
<p><a  class="bod"style="text-decoration:none; color:#fff;" href="../ManagerialEconomics.php">Managerial Economics</a></p>
<p><a  class="bod"style="text-decoration:none; color:#fff;" href="../MarketingManagement.php">Marketing Management</a></p>
<p><a  class="bod"style="text-decoration:none; color:#fff;" href="../CorporateFinance.php">Corporate Finance</a></p>
<p><a  class="bod"style="text-decoration:none; color:#fff;" href="../OperationsManagement.php">Operations Management</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../StrategicLeadership.php">Strategic Leadership</a></p>
<p><a class="bod" style="text-decoration:none; color:#fff;" href="../HumanResourceManagement.php">Human Resource Mangement</a></p>
<p><a  class="bod" style="text-decoration:none; color:#fff;" href="../DigitalMarketing.php">Digital Marketing</a></p>
<!--<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Consumer Behaviour</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Pricing</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Financial Statement Analysis</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Corporate Control</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Agile Project Management</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Operations Strategy</a></p>
<p><a style="text-decoration:none;text-align:center;color:#fff;" href="">Negotiation Techniques</a></p>-->
<p><a  class="bod" style="text-decoration:none;text-align:center;color:#fff;" href="MarketingStrategy.php">Design Thinking</a></p>
</div>
                            
						</div>
					</div>
</div>
</div>


<div class="container" style="background-color:#242424;    width: 100%;  ">
<hr>
<div class="row" style="color:#fff;padding-bottom: 10%;">
<div class="col-md-8"  style=" border:0px solid grey;text-align: center;">
<p style="padding-top: 10px;padding-bottom: 10px;"><b class='hea'>Blackbuck Engineers Pvt. Ltd. | 5-124/1 Chandanagar, Hyderabad | Tel: 040-49528182  GITAM University | Rudraram, Patancheru, Hyderabad </b></p>
</div>
<div class="col-md-4"  style=" border:0px solid grey;text-align: center;">
<p class="footer__service footer__service--info hea" role="contentinfo" style="margin-top: 10px;">&copy; 2013 Blackbuck Engineers Pvt. Ltd. - All Rights Reserved.</p>
</div>
</div>

</div>
</div>


			
				

    </div>
    
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
	            (i[r].q = i[r].q || []).push(arguments);
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41064294-2', 'auto', {
            'allowLinker': true
        });
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

    </script>

    <script src="./Account_files/bootstrap.min.js.download"></script>
    <script src="./Account_files/respond.js.download"></script>
    
    <!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
        (function (d, s, i, r) {
            if (d.getElementById(i)) { return; }
            var n = d.createElement(s), e = d.getElementsByTagName(s)[0];
            n.id = i; n.src = '//js.hs-analytics.net/analytics/' + (Math.ceil(new Date() / r) * r) + '/504970.js';
            e.parentNode.insertBefore(n, e);
        })(document, "script", "hs-analytics", 300000);        
        
        
    </script>
    <!-- End of Async HubSpot Analytics Code -->


<script type="text/javascript">
//<![CDATA[
(function() {
var _analytics_scr = document.createElement('script');
_analytics_scr.type = 'text/javascript'; _analytics_scr.async = true; _analytics_scr.src = '/_Incapsula_Resource?SWJIYLWA=719d34d31c8e3a6e6fffd425f7e032f3&ns=1&cb=2032397647';
var _analytics_elem = document.getElementsByTagName('script')[0]; _analytics_elem.parentNode.insertBefore(_analytics_scr, _analytics_elem);
})();
// ]]>
</script>

<span style="border-radius: 3px !important; text-indent: 20px !important; width: auto !important; padding: 0px 4px 0px 0px !important; text-align: center !important; font: bold 11px/20px &quot;Helvetica Neue&quot;, Helvetica, sans-serif !important; color: rgb(255, 255, 255) !important; background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(230, 0, 35) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: none !important; -webkit-font-smoothing: antialiased !important; top: 169px; left: 126px;">Save</span><span style="border-radius: 12px; width: 24px !important; height: 24px !important; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDI0IDI0IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxtYXNrIGlkPSJtIj48cmVjdCBmaWxsPSIjZmZmIiB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHJ4PSI2IiByeT0iNiIvPjxyZWN0IGZpbGw9IiMwMDAiIHg9IjUiIHk9IjUiIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgcng9IjEiIHJ5PSIxIi8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMTAiIHk9IjAiIHdpZHRoPSI0IiBoZWlnaHQ9IjI0Ii8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMCIgeT0iMTAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0Ii8+PC9tYXNrPjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9IiNmZmYiIG1hc2s9InVybCgjbSkiLz48L3N2Zz4=&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: none !important; top: 167px; left: 440px;"></span></body></html>