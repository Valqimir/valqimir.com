<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Valqimir"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : "here, learn more about my friends and me (well, mostly what I plan to do with my life)"); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : "friends,vladimir"); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Valqimir"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : "here, learn more about my friends and me (well, mostly what I plan to do with my life)"); ?>" />
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
	<link href="css/2.css?ts=1612814929" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
                <div class="addthis_inline_share_toolbox"></div><div class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="header" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2153_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2154_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2155_0" class="wb_element wb_element_picture" data-plugin="Picture" title=""><a name="logo" class="wb_anchor"></a><div class="wb_picture_wrap"><a href="#logo"><img alt="" src="https://cdn.vlq.be/logo.png"></a></div></div><div id="wb_element_instance2156_0" class="wb_element wb-menu wb-menu-mobile" data-plugin="Menu"><a name="menu" class="wb_anchor"></a><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="" target="_self">home</a></li><li class="active"><a href="me-and-my-friends/" target="_self">me and my friends</a></li><li><a href="contact/" target="_self">contact</a></li><li><a href="https://cdn.vlq.be/tg.mp3" target="_blank">tg</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="main" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="wb_element_instance1_2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2_2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance3_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><u>my friends</u></h1>
</div><div id="wb_element_instance4_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="gaetan" class="wb_anchor"></a><p><span class="wb-stl-highlight">Gaëtan: We became friends during the first year of high school. We bicker all the time he says no but everybody knows that he likes me (except Thibault who sucks him 24/24), we can discuss everything together (even during the 2020 lockdown), he made me discover one of my favourite TV series : The Big Bang Theory According to the dictionary, he's my best friend and I think we both know that. We have our ups and downs, especially since we've been spending a lot of time with <a href="me-and-my-friends/#sasha">Sasha</a>. With her, he's different (and <a href="me-and-my-friends/#thibault">Thibault </a>agrees 😑), he plays hard with me in front of her like he is with <a href="me-and-my-friends/#thibault">Thibault </a>for himself. It's a shame because he's great and he doesn't need to change (after all we've become friends with who we are). He told me he had a crush on a girl after I told him about (which was fake btw). I was ± in the same case as him in the crush category. During a call with <a href="me-and-my-friends/#sasha">Sasha</a>, we were supposed to say our names at the same time, I was ready to say it but I knew he wouldn't do it so for safety I didn't do it. During the month of September 2020, he was quite weird with me and was rude and followed Thibault a lot so I didn't really like being with them so I went with <a href="me-and-my-friends/#sasha">Sasha </a>and his friends. Since she didn't want to talk to him, he didn't like me to go with her but I didn't care. He tried to pull me out but I stayed with Sasha's group. From October we (<a href="me-and-my-friends/#thibault">Thibault</a>, <a href="me-and-my-friends/#gaetan">Gaëtan </a>and <a href="me-and-my-friends/#me">me</a>) started to hang out more and more with <a href="me-and-my-friends/#maya">Maya </a>and <a href="me-and-my-friends/#anouk">Anouk </a>and less and less with <a href="me-and-my-friends/#sasha">Sasha</a>. As soon as he started to feel something for <a href="me-and-my-friends/#anouk">Anouk </a>(he didn't admit it but I felt it) he started to have less and less to do with others and more and more with Anouk. He quickly became a duck although they liked each other but never really dated. With that he started to annoy <a href="me-and-my-friends/#thibault">Thibault</a>, <a href="me-and-my-friends/#maya">Maya </a>and me and didn't really care about us anymore and would just come and cry when <a href="me-and-my-friends/#anouk">Anouk </a>wasn't nice to her or when she told him that she didn't want anything with him; not very sociable and proud of it, intelligent, tall, muscular, serious.</span></p>

<p> </p>
</div><div id="wb_element_instance5_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="thibault" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Thibault: we became friends during the theater class; not always very intelligent, short, blond, not studious, never serious, hyperactive, not very respectable and doesn't respect anything or others.</span></p>
</div><div id="wb_element_instance6_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="maya" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Maya: The first time we spoke was during a morals class in première, we had discussed the life of a teacher with Giorgio. According to her I would have talked to him afterwards but I honestly don't remember it at all. In September 2020 we found ourselves in the same class as her friend Anouk. Our Latin teacher had to decide on the final places due to COVID-19 and Gaëtan found himself next to her. At first he was skeptical of his new neighbor but in the end it was ok. Since the beginning of October they had been bickering and in mid-October Thibault and I joined them with Anouk and now we talk often, if not every day; beautiful with blond hair.</span></p>
</div><div id="wb_element_instance7_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="anouk" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Anouk : she is Maya's friend and I met her thanks to her. We talk every day by message and sometimes by call. I like the fact that we can talk about anything with her and that she is quick to take part in jokes. You can always count on her and she's always there to comfort you and she does it pretty well. At the beginning we didn't really talk to each other but since she had a thing for Gaëtan and he had a thing for her, we started to talk more and more with each other. Since she doesn't like Gaëtan any more than she likes him as a friend, she likes to bother him by saying we're going out or things like that, it doesn't really bother me but she often forces me to do it and that bothers me about Gaëtan and it also bothers me just in relation to me. I still have a lot of things to say but I don't really want to tell it; beautiful with nice dark brown hair and smiling.</span></p>
</div><div id="wb_element_instance8_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="gio" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Giorgio: we met because he was Gaëtan's best friend during the first year of high school, we talked a lot about movies, novels, manga and especially about general culture. He left our high school after only one year for another one without much reason; too tall, thin like a spaghetti, short like an ostrich, nice, very intelligent, always late, was Gaëtan's best friend during their primary school.</span></p>
</div><div id="wb_element_instance9_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="sasha" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Sasha: we became friends thanks to Gaëtan who was climbing with her in 1st grade. We sometimes discuss in the evening during the 2020 confinement with Gaëtan often. At recess I know that if I go with her it will be a good time; nice, caring, smart, tall, brown, has lots of friends, likes painting and food.</span></p>
</div><div id="wb_element_instance10_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="dejana" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Dejana: we still spend a lot of time together even if we don't know each other too well because she's Sasha's best friend; nice blond hair.</span></p>
</div><div id="wb_element_instance11_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="gaspard" class="wb_anchor"></a><p class="wb-stl-custom4"><span class="wb-stl-highlight">Gaspard: he came to my elementary school in eighth grade, we quickly became friends, we had good delusions, we often played Greek gods together (go figure). We saw each other again in 2018 after the beginning of the school year and then less and less, we unfortunately couldn't see each other the last time; tall, talks too much, smiles all the time.</span></p>
</div><div id="wb_element_instance12_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="me" class="wb_anchor"></a><h1 class="wb-stl-heading1" style="text-align: center;"><u>my future</u></h1>
</div><div id="wb_element_instance13_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="teacher" class="wb_anchor"></a><p class="wb-stl-normal"><span class="wb-stl-highlight">Later I would like to become a language teacher. More specifically Dutch; I wanted to do this job because my mother is a French teacher in secondary school. She is also my Dutch teacher, which I had in the first and second secondary school (and maybe in the third). My friends annoy me with her but I don't mind, she is strict and she is a very good teacher because she explains very well and the exercise sheets she creates with other teachers (sometimes) are very pleasant to read and clear (which not all teachers manage to do). Gaëtan, who wants to become a physicist like his parents, thinks this idea is stupid, I don't listen to him because according to him nothing is as good as physics and anyway teaching is for those who are only good at doing research or theory. I think physics is nice, even though I only have an average of 14, but I could never devote my life to physics. Of course physics is useful to mankind (not much but good) but learning languages to other human beings is also useful. Let's imagine that Gaëtan makes a great discovery, it may be useful for centuries (even if I doubt he will make a great discovery 🤨) but teaching a language to people over 30 years (it must be tiring) may have more impact ((6 classes x 25 students)x 30 years = 4500 students).</span></p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance14_2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><a name="sncf" class="wb_anchor"></a><p class="wb-stl-custom5"><span class="wb-stl-highlight">Being a radio host was one of my first great desires but hosting something for people seems too stressful. This job, as one of the SNCF agents present in this video says so well, is similar to that of a radio host, the difference here is that you don't choose what you say and you won't know what people thought about it. Some people have already told me that I should do this job later on and honestly I would be tempted to do it. But I really prefer the trade presented above.</span></p>
</div><div id="wb_element_instance15_2" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" type="text/html" src="//www.youtube-nocookie.com/embed/ZGWpDIbAG9I?controls=1" frameborder="0"></iframe></div><div id="wb_element_instance16_2" class="wb_element" data-plugin="Youtube"><iframe title="YouTube video player" class="youtube-player" allowfullscreen="" type="text/html" src="//www.youtube-nocookie.com/embed/ZGWpDIbAG9I?controls=1" frameborder="0"></iframe></div></div></div></div></div></div></div><div id="wb_footer_2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="footer" class="wb_anchor"></a><div class="wb-layout-bg-element"><div id="wb_element_instance2157_0" class="wb_element wb_element_shape" data-plugin="Shape"><a class="wb_shp"></a></div></div><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2158_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="wb_element_instance2159_0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_element_instance2160_0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2021  <a href="#header" rel="nofollow">valqimir.com</a></p>
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
