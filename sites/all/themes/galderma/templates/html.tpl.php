<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
//for temporary solution
$curr_url  =url($_GET['q']);
$customclass = "";
//$strstr = strstr($curr_url, 'patient-support');
if(is_string(strstr($curr_url, 'patient-support'))){
$customclass = "patients_support_bg";
}elseif(is_string(strstr($curr_url, 'technique-guidence')) || is_string(strstr($curr_url, 'resource-centre'))){
$customclass = "technique_guidance_bg";
}
elseif(is_string(strstr($curr_url, 'clinic-support')))
{
 $customclass = "clinic_support_bg"; 
}
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <!--<![endif]-->
<head>
<!--  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7447052/6450952/css/fonts.css" />-->
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <?php if($customclass!=""){ ?>
<style type="text/css">.node{min-height:0 !important;}</style>
<?php  }?>

<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=z0k2flxzisdaup4uvfkoyw';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>


</head>
<body class="<?php print $classes; ?> <?php print  $customclass;?>" <?php print $attributes;?>>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>
<a href="#leaving" class="leaving" style="text-decoration:none;">&nbsp;</a>
  <!--  //start modal  -->
 <div id="leaving" class="modalDialog popup small_popup">
    <div> 
    <!-- popup_header -->                                            
        <div class="popup_header clearfix">
                <div class="f_right"><span class="close" onclick="javascript:window.location='#close';">X</span></div>
         </div>
        <!-- end popup_header --> 
         
        <!-- popup_body -->  
        <div class="popup_body">
           <div class="holder">
              <h3>YOU ARE NOW LEAVING <br /><span class="blue_text">
AESTHETICS.GALDERMA.CO.UK </span></h3>

<div class="holder text-center">
<p>Links to other sites are provided as a convenience to the visitor.
Galderma accepts no responsibility for the content of linked
sites which it does not operate.</p>
</div>
           </div>
             <div class="holder">
              <div class="modal_btnholder" id="continueleave"></div>
            </div>  
        </div>
         <!-- end popup_body -->  
    </div>
</div>

<div id="request" class="modalDialog popup small_popup">
    <div> 
    <!-- popup_header -->                                            
        <div class="popup_header clearfix">
                <div class="f_right"><span class="close" onclick="javascript:window.location='#close';">X</span></div>
         </div>
        <!-- end popup_header --> 
         
        <!-- popup_body -->  
        <div class="popup_body">
            <div class="views-field-title">
                <h3 class="field-content">REQUEST FORM</h3>
            </div>
            <div class="text-center">
            <?php 
            global $base_url; // Will point to http://www.example.com 
            global $base_path; // Will point to at least "/" or the subdirectory where the drupal in installed. 
            $req_form_url = $base_url .  '/request_module/request_form';
            ?> 
              <form action="<?php echo $req_form_url;?>" id="req_form">
                <input type="hidden" id="site_email" name="site_email" value ="<?php echo variable_get('site_mail', '');  //"bhidev2015@gmail.com"; // ?>" />
                    <div class="form_control" id="msgarea"></div>
                    <div class="form_control">
                        <input type="text" class="input_control" id="material_name" placeholder="Material name*"/>
                    </div>
                    <div class="form_control">
                        <input type="text" class="input_control" id="number_required" placeholder="Number required*"/>
                    </div>
                    <div class="form_control">
                        <textarea class="input_control" id="delivery_address" placeholder="Delivery address*" rows="2"></textarea>
                    </div>
                    <div class="form_control">
                        <textarea class="input_control" id="additional_information"  placeholder="Additional information*" rows="3"></textarea>
                    </div>
                    <div class="text-left req_f">* Required field</div>
                    
                    <div class="holder">
                          <div class="modal_btnholder"><a class="modal_btn submit_req_frm" href="#request" >Submit</a> 
                          <a class="modal_btn cancel_req_frm" href="#request" >Cancel</a> </div>
                    </div> 
        </form>
        </div>
        </div>
         <!-- end popup_body -->  
    </div>
</div>

  <!--  //end modal  -->
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
</body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-56MTS9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-56MTS9');</script>
<!-- End Google Tag Manager -->
</html>
