<!DOCTYPE html>
<html class="no-js gr__start_gmat_com" lang="en">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
   <script language="javascript">
$(document).ready(function()
{    
  alert('dfg');
  $("#form1").submit(function(event)
  { 
  alert('dfg');

          event.preventDefault();
        var email = $("#email").val();
        email = email.trim();
        if(email=="")
        {
            document.getElementById('erroremail').innerHTML='Plese Enter Email';
        }
        else 
        {
             if(document.getElementById('checkme').checked == false) 
            {
                document.getElementById('erroremail').innerHTML='Plese check checkbox to recive emails';
            }
            else
            {
                
                document.getElementById('erroremail').innerHTML=' ';
                $.post("ajax.php", {'submitaccess': 'submitaccess','email':email}, function(result){
             alert(result);
                if(result == 1)
                {
                    window.location.href = "Account.php?id="+email;
                }
                else
                {
                    window.location.href = "result.php";
                }
                });
            }
        }

  });
  });
  </script>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="./accessnow_files/conversations-embed.js.download" type="text/javascript" id="hubspot-messages-loader" ungated-for="" data-loader="hs-scriptloader" data-hsjs-portal="504970" data-hsjs-env="prod"></script>
<script src="./accessnow_files/leadflows.js.download" type="text/javascript" id="LeadFlows-504970" crossorigin="anonymous" data-leadin-portal-id="504970" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="504970" data-hsjs-env="prod"></script>

<script src="./accessnow_files/504970.js.download" type="text/javascript" id="hs-analytics"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Graduate Management Admission Council">
    <meta name="description" content="More business schools use the GMAT exam than any other exam. Access your free GMAT Starter Kit.">
    <meta name="generator" content="HubSpot">
    <title>AI powered test from Institute for Artificial Intelligence</title>
    <link rel="shortcut icon" href="http://theblackbucks.com/img/logo.png">
    <link rel="apple-touch-icon" href="http://theblackbucks.com/img/logo.png">

    

    <script async="" src="./accessnow_files/gtm.js.download"></script><script src="./accessnow_files/jquery-1.7.1.js.download"></script>
<script>hsjQuery = window['jQuery'];</script>
    <link href="./accessnow_files/public_common.css" rel="stylesheet">
    <meta property="og:description" content="More business schools use the GMAT exam than any other exam. Access your free GMAT Starter Kit.">
    <meta property="og:title" content="Your GMAT Prep Starter Kit">
    <meta name="twitter:description" content="More business schools use the GMAT exam than any other exam. Access your free GMAT Starter Kit.">
    <meta name="twitter:title" content="Your GMAT Prep Starter Kit">


    
    

    
    
    <link rel="canonical" href="http://start.gmat.com/gmatprep-global">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aa4RO_lG_dLJF-FWUetACwfYkl3xtL-TnoizEfrMPnA">



<meta property="og:image" content="https://start.gmat.com/hubfs/2018_mbadotcom_OfficialGMAT_STARTER_HiRES%20%28002%29.png#keepProtocol">
<meta name="twitter:image" content="https://start.gmat.com/hubfs/2018_mbadotcom_OfficialGMAT_STARTER_HiRES%20%28002%29.png#keepProtocol">

<meta property="og:url" content="http://start.gmat.com/gmatprep-global">
<meta name="twitter:card" content="summary">
<link href="./accessnow_files/layout.min.css" rel="stylesheet">


<link rel="stylesheet" href="./accessnow_files/GMAT-July2017-interim-style.min.css">
<link rel="stylesheet" href="./accessnow_files/2018_MBAcom_style.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


<style type="text/css" id="hs-form-styleb7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044">.fn-date-picker.pika-single{z-index:9999;display:block;position:relative;color:#333;background:#fff;border:1px solid #ccc;border-bottom-color:#bbb;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;*zoom:1}.fn-date-picker.pika-single.is-hidden{display:none}.fn-date-picker.pika-single.is-bound{position:absolute;box-shadow:0 5px 15px -5px rgba(0,0,0,0.5)}.fn-date-picker.pika-single:before,.fn-date-picker.pika-single:after{content:" ";display:table}.fn-date-picker.pika-single:after{clear:both}.fn-date-picker .pika-lendar{float:left;width:240px;margin:8px}.fn-date-picker .pika-title{position:relative;text-align:center}.fn-date-picker .pika-title select{cursor:pointer;position:absolute;z-index:9998;margin:0;left:0;top:5px;filter:alpha(opacity=0);opacity:0}.fn-date-picker .pika-label{display:inline-block;*display:inline;position:relative;z-index:9999;overflow:hidden;margin:0;padding:5px 3px;font-size:14px;line-height:20px;font-weight:bold;background-color:#fff}.fn-date-picker .pika-prev,.fn-date-picker .pika-next{display:block;cursor:pointer;position:relative;outline:none;border:0;padding:0;width:20px;height:30px;text-indent:20px;white-space:nowrap;overflow:hidden;background-color:transparent;background-position:center center;background-repeat:no-repeat;background-size:75% 75%;opacity:0.5;*position:absolute;*top:0}.fn-date-picker .pika-prev:hover,.fn-date-picker .pika-next:hover{opacity:1}.fn-date-picker .pika-prev.is-disabled,.fn-date-picker .pika-next.is-disabled{cursor:default;opacity:0.2}.fn-date-picker .pika-prev,.fn-date-picker .is-rtl .pika-next{float:left;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAeCAYAAAAsEj5rAAAAUklEQVR42u3VMQoAIBADQf8Pgj+OD9hG2CtONJB2ymQkKe0HbwAP0xucDiQWARITIDEBEnMgMQ8S8+AqBIl6kKgHiXqQqAeJepBo/z38J/U0uAHlaBkBl9I4GwAAAABJRU5ErkJggg==");*left:0}.fn-date-picker .pika-next,.fn-date-picker .is-rtl .pika-prev{float:right;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAeCAYAAAAsEj5rAAAAU0lEQVR42u3VOwoAMAgE0dwfAnNjU26bYkBCFGwfiL9VVWoO+BJ4Gf3gtsEKKoFBNTCoCAYVwaAiGNQGMUHMkjGbgjk2mIONuXo0nC8XnCf1JXgArVIZAQh5TKYAAAAASUVORK5CYII=");*right:0}.fn-date-picker .pika-select{display:inline-block;*display:inline}.fn-date-picker .pika-table{width:100%;border-collapse:collapse;border-spacing:0;border:0}.fn-date-picker .pika-table th,.fn-date-picker .pika-table td{width:14.28571%;padding:0}.fn-date-picker .pika-table th{color:#999;font-size:12px;line-height:25px;font-weight:bold;text-align:center}.fn-date-picker .pika-table abbr{border-bottom:none;cursor:help}.fn-date-picker .pika-button{cursor:pointer;display:block;-moz-box-sizing:border-box;box-sizing:border-box;outline:none;border:0;margin:0;width:100%;padding:5px;color:#666;font-size:12px;line-height:15px;text-align:right;background:#f5f5f5}.fn-date-picker .pika-button:hover{color:#fff !important;background:#ff8000 !important;box-shadow:none !important;border-radius:3px !important}.fn-date-picker .is-today .pika-button{color:#3af;font-weight:bold}.fn-date-picker .is-selected .pika-button{color:#fff;font-weight:bold;background:#3af;box-shadow:inset 0 1px 3px #178fe5;border-radius:3px}.fn-date-picker .is-disabled .pika-button{pointer-events:none;cursor:default;color:#999;opacity:0.3}.fn-date-picker .pika-week{font-size:11px;color:#999}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset{border:0;padding:0;margin:0;max-width:500px}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-1 .hs-input{width:95%}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-1 .input{margin-right:8px}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-1 input[type="checkbox"],.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-1 input[type="radio"]{width:auto}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-2 .hs-form-field{width:50%;float:left}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-2 .input{margin-right:8px}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-3 .hs-form-field{width:32.7%;float:left}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.form-columns-3 .input{margin-right:8px}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.phone-w-extension select,.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.phone-w-extension .hs-form-field{display:inline-block}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.phone-w-extension .hs-form-field:first-child{margin-top:1px;width:30%}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 fieldset.phone-w-extension .hs-form-field{margin-bottom:0;width:70%}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 label.hs-hidden{visibility:hidden}.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044 .hs-field-desc{width:100%}.hs-custom-style fieldset,.hs-custom-style .hs-input{max-width:100%}.hs-custom-style fieldset.form-columns-3 .hs-form-field,.hs-custom-style>div.form-columns-3 .hs-form-field{width:33.3%}.hs-custom-style fieldset>div:last-of-type .hs-input:not([type=checkbox]):not([type=radio]),.hs-custom-style>div>div:last-of-type .hs-input:not([type=checkbox]):not([type=radio]){width:100%;max-width:100%}.hs-custom-style fieldset input:not([type="image"]):not([type="submit"]):not([type="button"]):not([type="radio"]):not([type="checkbox"]):not([type="file"]),.hs-custom-style>div input:not([type="image"]):not([type="submit"]):not([type="button"]):not([type="radio"]):not([type="checkbox"]):not([type="file"]){box-sizing:border-box;padding:0 15px;min-height:27px}.hsformerror{margin:0 0 2px;padding:2px 6px;height:auto;background-color:#fdd2d0;font-size:11px;border:1px solid #fcb3af;padding:4px 16px 4px 10px;color:#000;display:none;background-image:-webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #fefefe), color-stop(100%, #fdd2d0));background-image:-webkit-linear-gradient(#fefefe, #fdd2d0);background-image:-moz-linear-gradient(#fefefe, #fdd2d0);background-image:-o-linear-gradient(#fefefe, #fdd2d0);background-image:linear-gradient(#fefefe,#fdd2d0);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 0 6px #ddd;-moz-box-shadow:0 0 6px #ddd;box-shadow:0 0 6px #ddd;z-index:99999}.hsformerror em{border:10px solid;border-color:#fdd2d0 transparent transparent;bottom:-17px;display:block;height:0;left:60px;position:absolute;width:0}.hsformerror p{font-family:Lucida Grande,Lucida Sans Unicode,bitstream vera sans,trebuchet ms,verdana,sans-serif;margin:0;float:left;margin-right:8px}.hsformerror:hover{cursor:default}.hsformerror .close-form-error{float:right;display:inline;top:3px;position:absolute;font-family:Verdana !important;color:#b17c79 !important;cursor:pointer !important;font-size:11px !important;font-weight:normal !important}.hsformerror .close-form-error:hover{color:#cc8884}@media (max-width: 400px), (min-device-width: 320px) and (max-device-width: 480px){form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-2 .hs-form-field,form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-3 .hs-form-field{float:none;width:100%}form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-2 .hs-form-field .hs-input,form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-3 .hs-form-field .hs-input{width:95%}form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-2 .hs-form-field input[type="checkbox"],form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-2 .hs-form-field input[type="radio"],form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-3 .hs-form-field input[type="checkbox"],form.hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044:not(.hs-video-form) .form-columns-3 .hs-form-field input[type="radio"]{width:auto}}.legal-consent-container .field.hs-form-field{margin-bottom:8px}.legal-consent-container .hs-field-desc.checkbox-desc{margin:-12px 0 0 21px}.legal-consent-container .hs-form-booleancheckbox-display p{margin:0;display:inline-block}.legal-consent-container .hs-error-msgs label{color:#f2545b}.legal-consent-container ~ .hs_recaptcha{margin-top:18px}.cookie-reset-container{font-size:14px;margin-bottom:10px;text-align:right}#hs-outer-captcha-target,#hs-outer-captcha-target *{display:none;height:0;width:0}.hubspot-link__container{font-size:14px;padding-bottom:40px;position:relative;color:#9fa0a2;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}.hubspot-link-text{color:#00a4bd;font-weight:400}.hubspot-link__container.sproket{color:#9fa0a2}.hubspot-link{text-decoration:none;color:#9fa0a2}.hubspot-link:hover{text-decoration:none}.hubspot-link:hover .hubspot-link-text{text-decoration:underline}.hubspot-link__icon{margin-bottom:-1px;margin-right:5px}.hubspot-link__container.sproket .hubspot-link__icon{width:30px;margin-right:0px;float:left;margin-top:-9px;margin-left:-5px}</style></head>
<body class="landing-page two-column   hs-content-id-5710981797 hs-landing-page hs-page " style="background-color: #eeeeee" data-gr-c-s-loaded="true"><style type="text/css">html.hs-messages-widget-open.hs-messages-mobile,html.hs-messages-widget-open.hs-messages-mobile body{height:100%!important;overflow:hidden!important;position:relative!important}html.hs-messages-widget-open.hs-messages-mobile body{margin:0!important}#hubspot-messages-iframe-container{display:initial!important;z-index:2147483647;position:fixed!important;bottom:0!important;right:0!important}#hubspot-messages-iframe-container.internal{z-index:1016}#hubspot-messages-iframe-container.internal iframe{min-width:108px}#hubspot-messages-iframe-container .shadow{display:initial!important;z-index:-1;position:absolute;width:0;height:0;bottom:0;right:0;content:""}#hubspot-messages-iframe-container .shadow.internal{display:none!important}#hubspot-messages-iframe-container .shadow.active{width:400px;height:400px;background:radial-gradient(ellipse at bottom right,rgba(29,39,54,.16) 0,rgba(29,39,54,0) 72%)}#hubspot-messages-iframe-container iframe{display:initial!important;width:100%!important;height:100%!important;border:none!important;position:absolute!important;bottom:0!important;right:0!important;background:transparent!important}


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
background-color:#000;
display: grid;
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
</style>
   
 <nav class="navbar navbar-default hea" >
  <div class="container-fluid" >
    <div class="navbar-header">
       <a href="index.php" ><img src="http://theblackbucks.com/C.jpg" alt="logo" style="margin: 0px 72px;width: 240px;"></a>
    </div>
  </div><!-- /.container-fluid -->
</nav>
   
   
   
<div class="body-container-wrapper">
    <div class="body-container container-fluid">

<div class="row-fluid-wrapper row-depth-1 row-number-1">
<div class="row-fluid ">
<div class="span12 widget-span widget-type-cell page-center content-wrapper" style="margin-bottom: 10px" data-widget-type="cell" data-x="0" data-w="12">

<div class="row-fluid-wrapper row-depth-1 row-number-2">
<div class="row-fluid ">
<div class="span12 widget-span widget-type-cell " style="display: table; background-image: url(img/brain-light.jpg); min-height: 430px; color: #4a4b4b;background-position: 0 -130px; background-size: cover; background-repeat: no-repeat; overflow: hidden; width: 100%;" data-widget-type="cell" data-x="0" data-w="12">

<div class="row-fluid-wrapper row-depth-1 row-number-3">
<div class="row-fluid ">
<div class="span12 widget-span widget-type-widget_container main-content content-wrapper" style="max-width:375px; padding: 20px; padding-left:5%" data-widget-type="widget_container" data-x="0" data-w="12">
<span id="hs_cos_wrapper_module_143948039945917983" class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" style="" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container"><div id="hs_cos_wrapper_widget_3316395268" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header" style="" data-hs-cos-general-type="widget" data-hs-cos-type="header"><h1></h1><h1 style="color: rgb(45,204,211);">Start Your AI Journey with AI Powered<sup style="font-size: 20px;">®</sup>&nbsp;<br>Adaptive Test</h1></div>
<div id="hs_cos_wrapper_widget_3316395273" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text"><h3><span style="color: #ffffff;font-size:22px">Serious about a future career in AI? </span><br><span style="color: #ffffff;font-size:22px">Here is a way to foray into the AI world: An AI powered certification that establishes your expertise level*.</span></h3></div>
<div id="hs_cos_wrapper_widget_1524060397426" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span id="hs_cos_wrapper_widget_1524060397426_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text"><h2><span style="font-size: 12px; color: #ffffff;">
</span></h2></span></div></span>
</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

<div class="row-fluid-wrapper row-depth-1 row-number-4" id='sectionOne'>
<div class="row-fluid ">
<div class="span12 widget-span widget-type-cell page-center content-wrapper" style="background-color: #ffffff; margin-bottom: 10px" data-widget-type="cell" data-x="0" data-w="12">

<div class="row-fluid-wrapper row-depth-1 row-number-5">
<div class="row-fluid ">
<div class="span6 widget-span widget-type-cell main-content" style="background-color: #ffffff; padding: 10px" data-widget-type="cell" data-x="0" data-w="6">

<div class="row-fluid-wrapper row-depth-1 row-number-6" style='margin-top: -21px;'>
<div class="row-fluid ">
<div class="span12 widget-span widget-type-header custom_section_header" style="font-color: #dc0d71" data-widget-type="header" data-x="0" data-w="12">
<div class="cell-wrapper layout-widget-wrapper">
<span id="hs_cos_wrapper_module_143464833287618079" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header" style="" data-hs-cos-general-type="widget" data-hs-cos-type="header"><h2><p style='margin: 0px !important;'><span style="color: rgb(45, 204, 211);    padding: 10px;">3 Reasons to take the AI powered test<span></p></h2></span></div><!--end layout-widget-wrapper -->
</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

<div class="row-fluid-wrapper row-depth-1 row-number-7">
<div class="row-fluid ">
<div class="span5 widget-span widget-type-linked_image " style="" data-widget-type="linked_image" data-x="0" data-w="5">
<div class="cell-wrapper layout-widget-wrapper">
<span id="hs_cos_wrapper_module_143948867602951692" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image">

<img src="img/gloab.png" class="hs-image-widget " style="width:640px;border-width:0px;border:0px;" width="640" >

</span></div><!--end layout-widget-wrapper -->
</div><!--end widget-span -->
<div class="span7 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="5" data-w="7">
<div class="cell-wrapper layout-widget-wrapper">
<span id="hs_cos_wrapper_module_143948858492550685" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">
<ul style='font-size:15px'>
<li>
Gain a competitive advantage by developing a skill set that's in demand, worldwide.</li>
<li>AI certified professionals can improve their careers through promotions, salary increase or other career improvements.</li>
<li>Access a secure digital badge you can add to your social media profiles.</li>

</ul></span>
</div><!--end layout-widget-wrapper -->
</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

</div><!--end widget-span -->
<div class="span6 widget-span widget-type-widget_container sidebar right" style="padding: .85em !important; position: relative; background: #2e9da3; margin-top:-10px;z-index: 10;" data-widget-type="widget_container" data-x="6" data-w="6">
<span id="hs_cos_wrapper_module_14019004881245786" class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" style="" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container"><div id="hs_cos_wrapper_widget_3316395253" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header" style="" data-hs-cos-general-type="widget" data-hs-cos-type="header"><h1></h1><h2 style="color: #oooooo;">Get Your Free IAI<sup style="font-size: 14px;">®</sup> Official Introductory Course Bonus: 10-hours Course Videos!</h2></div>
<div id="hs_cos_wrapper_widget_3316395258" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_form" style="" data-hs-cos-general-type="widget" data-hs-cos-type="form"><h3 id="hs_cos_wrapper_widget_3316395258_title" class="hs_cos_wrapper form-title" data-hs-cos-general-type="widget_field" data-hs-cos-type="text"></h3>

<div id="hs_form_target_widget_3316395258">


<form id='form1'  method="POST" class="hs-form stacked hs-custom-form hs-form-private hs-form-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_971360c2-47ff-4896-9953-fc7ac34c9044">





<div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.1:$0">

<label id="label-email-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_3519" class="" placeholder="Enter your Email address" for="email-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_3519" data-reactid=".hbspt-forms-0.1:$0.0"><span data-reactid=".hbspt-forms-0.1:$0.0.0">Email address</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.1:$0.0.1">*</span></label>

<legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$0.1"></legend>

<div class="input" data-reactid=".hbspt-forms-0.1:$0.$email">

<input class="hs-input" type="email" name="email" id="email" required autocomplete="email">

</div></div>


<div class="hs_utm_campaign hs-utm_campaign hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.1:$1"><label id="label-utm_campaign-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_3519" class="" placeholder="Enter your UTM Campaign" for="utm_campaign-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_3519" data-reactid=".hbspt-forms-0.1:$1.0"><span data-reactid=".hbspt-forms-0.1:$1.0.0">UTM Campaign</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$1.1"></legend><div class="input" data-reactid=".hbspt-forms-0.1:$1.$utm_campaign"></div></div>


<div class="hs_gmat_opt_in_hubspot hs-gmat_opt_in_hubspot hs-fieldtype-booleancheckbox field hs-form-field" data-reactid=".hbspt-forms-0.1:$2">

<legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.1:$2.1"></legend>

<div class="input" data-reactid=".hbspt-forms-0.1:$2.$gmat_opt_in_hubspot">

<ul class="inputs-list" data-reactid=".hbspt-forms-0.1:$2.$gmat_opt_in_hubspot.0">

<li class="hs-form-booleancheckbox" data-reactid=".hbspt-forms-0.1:$2.$gmat_opt_in_hubspot.0.0">
<label for="gmat_opt_in_hubspot-b7e819ad-2a25-47a6-ac0f-91e0822cbe6b_3519" class="hs-form-booleancheckbox-display" data-reactid=".hbspt-forms-0.1:$2.$gmat_opt_in_hubspot.0.0.0">
<input class="hs-input" type="checkbox" checked='checked' name="checkme" id="checkme" >
<span data-reactid=".hbspt-forms-0.1:$2.$gmat_opt_in_hubspot.0.0.0.1">I agree to receive information about the IAI exam, education and other offers and promotions from IAI. 


 </span></label></li></ul></div></div>
 
 
<p style='color: red !important;' id='erroremail'></p>
 
 <div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.5">
 <div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.5.0"></div>
 
 <div class="actions" data-reactid=".hbspt-forms-0.5.1">
 <input type="submit" name='submitaccess' value="Access Now" class="hs-button primary large" data-reactid=".hbspt-forms-0.5.1.0">
 
 </div>
 
 
 </div>
 
 

 
 
 </form></div>








</div></span>
</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

</div><!--end widget-span -->
</div><!--end row-->
</div><!--end row-wrapper -->

    </div><!--end body -->
</div><!--end body wrapper -->















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
<hr style="    border: 1px solid #1f1a1a69;">
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














<script type="text/javascript" src="./accessnow_files/public_common.js.download"></script>
<script src="./accessnow_files/project.js.download"></script>
<script src="./accessnow_files/v2.js.download"></script>
<style id="hs_editor_style" type="text/css">
#hs_cos_wrapper_module_143948867602951692  { display: block !important; padding-left: -5px !important; padding-right: -6px !important }
#hs_cos_wrapper_widget_3316395253  { display: block !important; margin-left: 14px !important; margin-right: 10px !important }
#hs_cos_wrapper_widget_3316395258  { background-color: transparent !important; color: #000000 !important; display: block !important; font-family: Tahoma, Geneva, sans-serif !important; font-size: 12px !important; font-weight: normal !important; line-height: 15px !important; margin-left: 26px !important; margin-right: 33px !important; text-align: left !important }
#hs_cos_wrapper_widget_3316395258 p , #hs_cos_wrapper_widget_3316395258 li , #hs_cos_wrapper_widget_3316395258 span , #hs_cos_wrapper_widget_3316395258 label , #hs_cos_wrapper_widget_3316395258 h1 , #hs_cos_wrapper_widget_3316395258 h2 , #hs_cos_wrapper_widget_3316395258 h3 , #hs_cos_wrapper_widget_3316395258 h4 , #hs_cos_wrapper_widget_3316395258 h5 , #hs_cos_wrapper_widget_3316395258 h6  { color: #000000 !important; font-weight: normal !important; font-size: 12px !important; line-height: 15px !important; font-family: Tahoma, Geneva, sans-serif !important }
#hs_cos_wrapper_widget_3316395258 input[type="text"] { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 input[type="email"] { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 textarea { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 input[type="number"] { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 select { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 input[type="file"] { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 input[type="tel"] { background-color: #eeeeee !important; background-image: none !important; border-radius: 2px !important; border-style: inset !important; border-width: 1px !important; color: #666666 !important; font-size: 16px !important; font-weight: normal !important; margin-bottom: 5px !important; margin-top: 3px !important; opacity: 100 !important; padding-bottom: 1px !important; padding-top: 1px !important }
#hs_cos_wrapper_widget_3316395258 input[type="submit"] { color: #000000 !important; font-size: 20px !important; margin-bottom: 14px !important; margin-top: 14px !important; opacity: 1 !important; padding-bottom: 8px !important; padding-left: 30px !important; padding-right: 30px !important; padding-top: 8px !important }
#hs_cos_wrapper_widget_3316395258 .hs-button { color: #000000 !important; font-size: 20px !important; margin-bottom: 14px !important; margin-top: 14px !important; opacity: 1 !important; padding-bottom: 8px !important; padding-left: 30px !important; padding-right: 30px !important; padding-top: 8px !important }
</style>
</body></html>