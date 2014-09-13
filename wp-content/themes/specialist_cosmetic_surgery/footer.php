<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage SCS
 * @since SCS 0.1
 */
?>
</div>
<!-- #main -->

<footer id="colophon" role="contentinfo">
 <div class="footer-top-wrapper"> <?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
  ?></div>
	
	<div class="footer-bottom-wrapper">
  	<div class="footer-content"><?php if ( is_active_sidebar( 'copyright-widget' ) ) : ?>
  
  <div id="copyright">
    <?php dynamic_sidebar( 'copyright-widget' ); ?>
  </div>
  <!-- #copyright .widget-area -->
  <?php endif; ?>
  <div id="site-generator">
    <div class="site-by">Site by <a href="http://squeezecreative.com.au" rel="external nofollow">Squeeze Creative</a></div>
  </div>  </div> </div>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->


<script src="<?php bloginfo( 'template_url' );?>/plugins/uniform/js/jquery.uniform.min.js" type="text/javascript"></script>
<!--<script src="<?php bloginfo( 'template_url' );?>/plugins/uniform/js/jquery.multiselect.min.js" type="text/javascript"></script>-->

<script src="<?php bloginfo( 'template_url' );?>/plugins/responsive/js/modernizr.custom.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' );?>/plugins/responsive/js/jquery.dlmenu.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' );?>/js/init.js" type="text/javascript"></script>
<!-- jet phone-analytics -->
<script type=3D"text/javascript">
       _paq =3D window._paq || [];
      =20
       _paq.push({
              'name':'register tracker',
              'method': function() { =
_pa.getTracker('WT1794').trackPageView(); },
              'when':'now'});
      =20
       _paq.push({
       'name':'replace number',
       'method': function() { =
_pa.getTracker('WT1794').replaceByClass('dynamic-phone', 'Main.Number', =
'#### ### ###'); },
       'when':'poll'});

       (function() {
              var pa =3D document.createElement('script'); pa.type =3D =
'text/javascript'; pa.async =3D true;
              pa.src =3D ('https:' =3D=3D document.location.protocol ? =
'https://' : 'http://') + =
'cdn.phone-analytics.com/WebTracker/WT1794/pa.js?async=3Dtrue';
              var s =3D document.getElementsByTagName('script')[0]; =
s.parentNode.insertBefore(pa, s);
       })();
</script>
<!-- end jet phone-analytics -->
<script src="<?php echo includes_url('/js/stickUp.min.js'); ?>"></script>
<!--STICKY MENU-->
<script type="text/javascript">
jQuery(function($) {
    $(document).ready( function() {
        $('.navigation').stickUp({ topMargin: -120 });
    });
});
</script>

<?php wp_footer(); ?>
<!--delacon tracking code start-->
<script type="text/javascript">
var cids = "13522";
var refStr = escape(document.referrer);
var dd = document, ll = dd.createElement("script"), ss = dd.getElementsByTagName("script")[0];
ll.type = "text/javascript"; ll.async = true; ll.src = ("https:" == document.location.protocol ? "https://" : "http://") + "vxml4.delacon.com.au/sited/ref/phonenum.jsp?m_id=201&cids=" + cids + "&ref=" + refStr;
ss.parentNode.insertBefore(ll,ss);

function makePhoneCall(cid, defNum) {
	<!-- If only mobile browser is allowed to click, put the mobile browser detection code here. -->
	var numDivVar = document.getElementById("numdiv_" + cid + "_0");
	if (numDivVar) {
		var telno = numDivVar.innerHTML;
		var tsArray = telno.split(" ");
		telno = tsArray.join("");
		location.href = "tel:" + telno;
	}
	else {
		location.href = "tel:" + defNum;

	}
}

</script>
<!--delacon tracking code end-->
<?php if(is_page(3197)){ ?>
<!-- Google Code for Email Enquiry Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1009327486;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "ztWGCLLarAQQ_rqk4QM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1009327486/?value=0&amp;label=ztWGCLLarAQQ_rqk4QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!--delacon tracking code end-->
<?php } ?>
<?php if(is_page(2136)){ ?>
<!-- Google Code for Email Enquiry Conversion Page -->
 <script  type="text/javascript">
 /* <![CDATA[ */
 var google_conversion_id = 1009327486; var google_conversion_language 
 = "en"; var google_conversion_format = "2"; var 
 google_conversion_color = "ffffff"; var google_conversion_label = 
 "ztWGCLLarAQQ_rqk4QM"; var google_conversion_value = 0;
 /* ]]> */
 </script>
 <script type="text/javascript" 
 src="//www.googleadservices.com/pagead/conversion.js">
 </script>
 <noscript>
 <div style="display:inline;">
 <img height="1" width="1" style="border-style:none;" alt="" 
 src="//www.googleadservices.com/pagead/conversion/1009327486/?value=0&
 amp;label=ztWGCLLarAQQ_rqk4QM&amp;guid=ON&amp;script=0"/>
 </div>
 </noscript>
 <?php } ?>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1009327486;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1009327486/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript> 


</body>
</html>
