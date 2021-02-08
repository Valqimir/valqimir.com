<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Valqimir"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : "the home page of my website"); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Valqimir"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : "the home page of my website"); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : "{{base_url}}gallery_gen/43efcb2928f7f1722e94add425fc865e.png"); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20210126102328" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20201221180906" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1612814929" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1612814929" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="icon" href="/gallery/logo without text-ts1609880449.png" type="image/png" />
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
</script>
	<!-- Hotjar Tracking Code for valqimir.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2223938,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NMGGM4H');</script>
<!-- End Google Tag Manager -->
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function() {
			if (!document.cookie.match(/(?:^|;\ *)__cookie_law__=1/)) {
				var block = $('<div>')
					.addClass('wb_cookie_policy')
					.css({
						backgroundColor: "rgba(255, 255, 255, 0.66)"					});
				$('<div class="policy-message">')
						.html("<p>We use cookies (and collect certain personal information) to provide you with a better online experience. By visiting our site, you agree to our terms and conditions.<\/p>\n")
						.css({
							color: "#ffffff",
							fontFamily: "Arial,Helvetica,sans-serif",
							fontSize: 14						})
						.appendTo(block);
				var btnWrapper = $('<div class="policy-button">').appendTo(block);
				$('<button>')
						.attr({type: 'button'})
						.css({
							backgroundColor: "#5cb85c",
							color: "#ffffff",
							fontFamily: "Arial,Helvetica,sans-serif",
							fontSize: 14						})
						.text("Understood")
						.on('click', function() {
							document.cookie = '__cookie_law__=1; path=/; expires=Thu, 03 Feb 2022 22:08:49 GMT';
							block.remove();
						})
						.appendTo(btnWrapper);
				$(document.body).append(block);
			}
		});
	</script>
	</head>


<body class="site <?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php if (isset($wbLandingPage) && $wbLandingPage) echo ' data-landing-page="'.$wbLandingPage.'"'; ?>><!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div><div class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="header" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2153_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2154_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2155_0" class="wb_element wb_element_picture" data-plugin="Picture" title=""><a name="logo" class="wb_anchor"></a><div class="wb_picture_wrap"><a href="#logo"><img alt="" src="https://cdn.vlq.be/logo.png"></a></div></div><div id="wb_element_instance2156_0" class="wb_element wb-menu wb-menu-mobile" data-plugin="Menu"><a name="menu" class="wb_anchor"></a><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li class="active"><a href="" target="_self">home</a></li><li><a href="me-and-my-friends/" target="_self">me and my friends</a></li><li><a href="contact/" target="_self">contact</a></li><li><a href="https://cdn.vlq.be/tg.mp3" target="_blank">tg</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="main" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="wb_element_instance1_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance3_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;">Welcome !</h4>
</div><div id="wb_element_instance4_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: center;">
<br><span style="color:rgba(255,255,255,1);">Please choose your language.<br>
Veillez choisir votre langue.<br>
Gelieve uw taal te kiezen.</span>
</h3>
</div></div></div></div></div><div id="wb_element_instance5_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance6_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="language" class="wb_anchor"></a><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:rgba(0,0,0,1);">Languages</span></h1>
</div><div id="wb_element_instance7_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance8_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance9_1" class="wb_element wb_element_shape" data-plugin="Shape"><a name="fr" class="wb_anchor"></a><a href="https://fr.valqimir.com/mes-amis-et-moi/" rel="nofollow" class="wb_shp"></a></div><div id="wb_element_instance10_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><span class="wb-stl-special"><font face="Poppins, Arial, sans-serif">Continuer sur mon petit blog en français pour tout comprendre dans votre langue favorite</font></span></p>
</div></div></div><div id="wb_element_instance11_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance12_1" class="wb_element wb_element_shape" data-plugin="Shape"><a name="nl" class="wb_anchor"></a><a href="https://nl.valqimir.com/mijn-vrienden-en-ik/" rel="nofollow" class="wb_shp"></a></div><div id="wb_element_instance13_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><span class="wb-stl-special">Ga verder op mijn kleine blog in het Nederlands om alles te begrijpen in je favoriete taal.</span></p>
</div></div></div><div id="wb_element_instance14_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance15_1" class="wb_element wb_element_shape" data-plugin="Shape"><a name="en" class="wb_anchor"></a><a href="me-and-my-friends/#main" rel="nofollow" class="wb_shp"></a></div><div id="wb_element_instance16_1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><span class="wb-stl-special">Continue on my little blog in English to understand everything in your favourite language.</span></p>
</div></div></div></div></div></div></div></div></div><div id="wb_footer_1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="footer" class="wb_anchor"></a><div class="wb-layout-bg-element"><div id="wb_element_instance2157_0" class="wb_element wb_element_shape" data-plugin="Shape"><a class="wb_shp"></a></div></div><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2158_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2159_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2160_0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2021  <a href="#header" rel="nofollow">valqimir.com</a></p>
</div></div></div></div></div><div id="wb_footer_c_0" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMGGM4H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eea46fb46f80b00"></script><script data-ad-client="ca-pub-8343334035448278" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script></body>
</html>
