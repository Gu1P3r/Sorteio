<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
	
	<body>

		<div id="header-wrapper" 	>
			<div id="header" class="cabecalho">
				<div id="logo" style="margin-top:-100px;">
					<h1 style="margin-top:-10px;">Sorteio Rotary
						<i class="fas fa-cog" style="color: white;"></i>
					</h1>
				</div>
				<div id="menu" style="margin-top:-80px;">
					<ul>
						<li style="background-color:#fff;color:#261349;padding: 20px;">Performed by OnNet Telecom ®</li>
					</ul>
				</div>
			</div>
		</div>
	
		<div class="container" style="background-color:#fff;">
			<br>
			@yield("content")
		</div>
	</body>

	<br />
	<br />
	<br />
	<br />
	<footer style="font-sizeof: 15px; text-align: center; margin-top:100px;">
		Developed by Guilherme Pereira Santos Silva © - LinkedIn: https://www.linkedin.com/in/guilherme-pereira-20b151187/
	</footer>


<style>
	html, body
	{
		height: 100%;
	}
	
	body
	{
		margin: 0px;
		padding: 0px;
		background: #fff;
		font-family: 'Questrial', sans-serif;
		font-size: 12pt;
		color: rgba(0,0,0,.6);
	}
	
	
	h1, h2, h3
	{
		margin: 0;
		padding: 0;
		color: #fff;
	}
	
	p, ol, ul
	{
		margin-top: 0;
	}
	
	ol, ul
	{
		padding: 0;
		list-style: none;
	}
	
	p
	{
		line-height: 180%;
	}
	
	a
	{
		color: #261349;
	}
	
	a:hover
	{
		text-decoration: none;
	}
	
	.container
	{
		margin: 0px auto;
		width: 1200px;
	}

	.footer
	{
		margin-right: auto;	
		margin-left: 270px;
		margin-top: 200px;
    	
	}

/*********************************************************************************/
/* Form Style                                                                    */
/*********************************************************************************/

		
			form label
			{
				display: block;
				text-align: left;
				margin-bottom: 0.5em;
			}
			
			form .submit
			{
				margin-top: 2em;
				line-height: 1.5em;
				font-size: 1.3em;
			}
		
			form input.text,
			form select,
			form textarea
			{
				position: relative;
				-webkit-appearance: none;
				display: block;
				border: 0;
				background: #fff;
				background: rgba(255,255,255,0.75);
				width: 100%;
				border-radius: 0.50em;
				margin: 1em 0em;
				padding: 1.50em 1em;
				box-shadow: inset 0 0.1em 0.1em 0 rgba(0,0,0,0.05);
				border: solid 1px rgba(0,0,0,0.15);
				-moz-transition: all 0.35s ease-in-out;
				-webkit-transition: all 0.35s ease-in-out;
				-o-transition: all 0.35s ease-in-out;
				-ms-transition: all 0.35s ease-in-out;
				transition: all 0.35s ease-in-out;
				font-size: 1em;
				outline: none;
			}

				form input.text:hover,
				form select:hover,
				form textarea:hover
				{
				}

				form input.text:focus,
				form select:focus,
				form textarea:focus
				{
					box-shadow: 0 0 2px 1px #E0E0E0;
					background: #fff;
				}
				
				form textarea
				{
					min-height: 12em;
				}

				form .formerize-placeholder
				{
					color: #555 !important;
				}

				form ::-webkit-input-placeholder
				{
					color: #555 !important;
				}

				form :-moz-placeholder
				{
					color: #555 !important;
				}

				form ::-moz-placeholder
				{
					color: #555 !important;
				}

				form :-ms-input-placeholder
				{
					color: #555 !important;
				}

				form ::-moz-focus-inner
				{
					border: 0;
				}


/*********************************************************************************/
/* Image Style                                                                   */
/*********************************************************************************/

	.image
	{
		display: inline-block;
		border: 1px solid rgba(0,0,0,.1);
	}
	
	.image img
	{
		display: block;
		width: 100%;
	}
	
	.image-full
	{
		display: block;
		width: 100%;
		margin: 0 0 3em 0;
	}
	
	.image-left
	{
		float: left;
		margin: 0 2em 2em 0;
	}
	
	.image-centered
	{
		display: block;
		margin: 0 0 2em 0;
	}
	
	.image-centered img
	{
		margin: 0 auto;
		width: auto;
	}

/*********************************************************************************/
/* List Styles                                                                   */
/*********************************************************************************/

	ul.style1
	{
	}


/*********************************************************************************/
/* Social Icon Styles                                                            */
/*********************************************************************************/

	ul.contact
	{
		margin: 0;
		padding: 2em 0em 0em 0em;
		list-style: none;
	}
	
	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.10em;
		font-size: 1em;
	}
	
	ul.contact li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.contact li a
	{
		color: #FFF;
	}
	
	ul.contact li a:before
	{
		display: inline-block;
		background: #261349;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		color: rgba(255,255,255,1);
	}
	

/*********************************************************************************/
/* Button Style                                                                  */
/*********************************************************************************/

	.button
	{
		display: inline-block;
		margin-top: 2em;
		padding: 0.8em 2em;
		background: #261349;
		line-height: 1.8em;
		letter-spacing: 1px;
		text-decoration: none;
		font-size: 1em;
		color: #FFF;
	}
	
	.button:before
	{
		display: inline-block;
		background: #8DCB89;
		margin-right: 1em;
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 20px;
		text-align: center;
		color: #272925;
	}
	
	.button-small
	{
	}
		
/*********************************************************************************/
/* Heading Titles                                                                */
/*********************************************************************************/

	.title
	{
		margin-bottom: 3em;
	}
	
	.title h2
	{
		font-size: 2.8em;
	}
	
	.title .byline
	{
		font-size: 1.1em;
		color: #6F6F6F#;
	}

/*********************************************************************************/
/* Header                                                                        */
/*********************************************************************************/

	#header-wrapper
	{
		overflow: hidden;
		background: #261349;

		

	}

	#header
	{
		text-align: center;
	}

/*********************************************************************************/
/* Logo                                                                          */
/*********************************************************************************/

	#logo
	{
		padding: 8em 0em 4em 0em;
	}
	
	#logo h1
	{
		display: block;
		margin-bottom: 0.20em;
		padding: 0.20em 0.9em;
		font-size: 3.5em;
	}
	
	#logo a
	{
		text-decoration: none;
		color: #FFF;
	}
	
	#logo span
	{
		text-transform: uppercase;
		font-size: 2.90em;
		color: rgba(255,255,255,1);
	}

	#logo span a
	{
		color: rgba(255,255,255,0.8);
	}
	
	

/*********************************************************************************/
/* Menu                                                                          */
/*********************************************************************************/

	#menu
	{
		height: 60px;
	}
	
	#menu ul
	{
		display: inline-block;
		padding: 0em 2em;
		text-align: center;
	}
	
	#menu li
	{
		display: inline-block;
	}
	
	#menu li a, #menu li span
	{
		display: inline-block;
		padding: 0em 1.5em;
		text-decoration: none;
		font-size: 0.90em;
		font-weight: 600;
		text-transform: uppercase;
		line-height: 60px;
		outline: 0;
		color: #FFF;
	}
	
	#menu li:hover a, #menu li.active a, #menu li.active span
	{
		background: #FFF;
		border-radius: 7px 7px 0px 0px;
		color: #261349;
	}
	
	#menu .current_page_item a
	{
	}
	

/*********************************************************************************/
/* Banner                                                                        */
/*********************************************************************************/

	#banner
	{
		padding-top: 5em;
	}

/*********************************************************************************/
/* Wrapper                                                                       */
/*********************************************************************************/


	.wrapper
	{
		overflow: hidden;
		padding: 0em 0em 5em 0em;
		background: #FFF;
	}

	#wrapper1
	{
		background: #FFF;
	}

	#wrapper2
	{
		overflow: hidden;
		background: #F3F3F3;
		padding: 5em 0em;
		text-align: center;
	}

	#wrapper3
	{
	}
	
	#wrapper4
	{
	}

/*********************************************************************************/
/* Welcome                                                                       */
/*********************************************************************************/

	#welcome
	{
		overflow: hidden;
		width: 1000px;
		padding: 6em 100px 0em 100px;
		text-align: center;
	}
	
	#welcome .content
	{
		padding: 0em 8em;
	}
	
	#welcome .title h2
	{
	}
	
	#welcome a,
	#welcome strong
	{
	}

/*********************************************************************************/
/* Page                                                                          */
/*********************************************************************************/

	#page-wrapper
	{
		overflow: hidden;
		background: #2F1E28;
		padding: 3em 0em 6em 0em;
		text-align: center;
	}

	#page
	{
	}

/*********************************************************************************/
/* Content                                                                       */
/*********************************************************************************/

	#content
	{
		float: left;
		width: 700px;
		padding-right: 100px;
		border-right: 1px solid rgba(0,0,0,.1);
	}

/*********************************************************************************/
/* Sidebar                                                                       */
/*********************************************************************************/

	#sidebar
	{
		float: right;
		width: 350px;
	}

/*********************************************************************************/
/* Footer                                                                        */
/*********************************************************************************/

	#footer
	{
		overflow: hidden;
		padding: 3em 0em;
		background: #E3F0F7;
		text-align: center;
	}


		
	#footer .fbox1,
	#footer .fbox2,
	#footer .fbox3
	{
		float: left;
		width: 320px;
		padding: 0px 40px 0px 40px;
	}
	
	#footer .icon
	{
		margin-bottom: 1em;
		font-size: 3em;
	}

	
	#footer .title span
	{
		color: rgba(255,255,255,0.4);
	}

/*********************************************************************************/
/* Copyright                                                                     */
/*********************************************************************************/

	#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		border-top: 20px solid rgba(255,255,255,0.08);
		text-align: center;
	}
	
	#copyright p
	{
		letter-spacing: 1px;
		font-size: 0.90em;
		color: rgba(255,255,255,0.6);
	}
	
	#copyright a
	{
		text-decoration: none;
		color: rgba(255,255,255,0.8);
	}

/*********************************************************************************/
/* Newsletter                                                                    */
/*********************************************************************************/

	#newsletter
	{
		overflow: hidden;
		padding: 8em 0em;
		background: #EDEDED;
		text-align: center;
	}
	
	#newsletter .title h2
	{
		color: rgba(0,0,0,0.8);
	}
	
	#newsletter .content
	{
		width: 600px;
		margin: 0px auto;
	}
	
/*********************************************************************************/
/* Portfolio                                                                     */
/*********************************************************************************/

	#portfolio
	{
		overflow: hidden;
		padding-top: 5em;
		border-top: 1px solid rgba(0,0,0,0.2);
	}
	
	#portfolio .box
	{
		text-align: center;
		color: rgba(0,0,0,0.5);
	}
	
	#portfolio h3
	{
		display: block;
		padding-bottom: 1em;
		font-size: 1em;
		color: rgba(0,0,0,0.6);
	}

	#portfolio .title
	{
		text-align: center;
	}

	#portfolio .title h2
	{
		color: rgba(0,0,0,0.8);
	}

	.column1,
	.column2,
	.column3,
	.column4
	{
		width: 282px;
	}
	
	.column1,
	.column2,
	.column3
	{
		float: left;
		margin-right: 24px;
	}
	
	.column4
	{
		float: right;
	}

/*********************************************************************************/
/* Three Columns                                                                 */
/*********************************************************************************/

	#three-column
	{
		overflow: hidden;
		margin-top: 5em;
		padding-top: 1em;
		text-align: center;
	}
	
	#three-column h2
	{
		margin: 1em 0em;
		font-size: 1.5em;
		font-weight: 700;
	}
	
	#three-column .icon
	{
		position: relative;
		display: block;
		margin: 0px auto 0.80em auto;
		background: none;
		line-height: 150px;
		font-size: 4em;
		width: 150px;
		height: 150px;
		border-radius: 100px;
		border: 6px solid #67128F;
		text-align: center;
		color: #FFF;
		
	}
		
	#three-column #tbox1,
	#three-column #tbox2,
	#three-column #tbox3
	{
		float: left;
		width: 320px;
		padding: 80px 40px 80px 40px;
	}
	
	#three-column .title
	{
		text-align: center;
	}
	
	#three-column .title h2
	{
		font-size: 1.60em;
	}
	
	#three-column .title .byline
	{
		padding-top: 0.50em;
		font-size: 0.90em;
		color: #858585;
	}

	#three-column .arrow-down
	{
		border-top: 2px solid rgba(0,0,0,0.2);
		border-top-color: #292929;
	}
	
	
	ul.tools
	{
		margin: 0;
		padding: 0em 0em 0em 0em;
		list-style: none;
	}
	
	ul.tools li
	{
		display: inline-block;
		padding: 0em .2em;
		font-size: 4em;
	}
	
	ul.tools li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.tools li a
	{
		color: #FFF;
	}
	
	ul.tools li a:before
	{
		display: inline-block;
		background: #1ABC9C;
		width: 120px;
		height: 120px;
		border-radius: 50%;
		line-height: 120px;
		text-align: center;
		color: #FFFFFF;
	}
	
	@charset 'UTF-8';

@font-face
{
	font-family: 'FontAwesome';
	src: url('fonts/fontawesome-webfont.eot?v=3.0.1');
	src: url('fonts/fontawesome-webfont.eot?#iefix&v=3.0.1') format('embedded-opentype'),
	     url('fonts/fontawesome-webfont.woff?v=3.0.1') format('woff'),
	     url('fonts/fontawesome-webfont.ttf?v=3.0.1') format('truetype'),
	     url('fonts/fontawesome-webfont.svg#FontAwesome') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face
{
	font-family: 'Font-Awesome-Social';
	src: url('fonts/fontawesome-social-webfont.eot');
	src: url('fonts/fontawesome-social-webfont.eot?#iefix') format('embedded-opentype'),
	     url('fonts/fontawesome-social-webfont.woff') format('woff'),
		 url('fonts/fontawesome-social-webfont.ttf') format('truetype'),
		 url('fonts/fontawesome-social-webfont.svg#Font-Awesome-More') format('svg');
	font-weight: normal;
	font-style: normal;
}

/*********************************************************************************/
/* Icons                                                                         */
/*********************************************************************************/

	/*
		Powered by:
		
		Font Awesome (http://fortawesome.github.com/Font-Awesome/)
		Font Awesome More (http://gregoryloucas.github.com/Font-Awesome-More/)
	*/

	.icon
	{
		text-decoration: none;
	}

		.icon:before
		{
			font-size: 1.25em;
			text-decoration: none;
			font-family: FontAwesome;
			font-weight: normal;
			font-style: normal;
			-webkit-text-rendering: optimizeLegibility;
			-moz-text-rendering: optimizeLegibility;
			-ms-text-rendering: optimizeLegibility;
			-o-text-rendering: optimizeLegibility;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
			-ms-font-smoothing: antialiased;
			-o-font-smoothing: antialiased;
			font-smoothing: antialiased;
			-webkit-font-feature-settings: "liga" 1, "dlig" 1;
			-moz-font-feature-settings: "liga=1, dlig=1";
			-ms-font-feature-settings: "liga" 1, "dlig" 1;
			-o-font-feature-settings: "liga" 1, "dlig" 1;
			font-feature-settings: "liga" 1, "dlig" 1;
		}

		.icon-glass:before                { content: "\f000"; }
		.icon-music:before                { content: "\f001"; }
		.icon-search:before               { content: "\f002"; }
		.icon-envelope:before             { content: "\f003"; }
		.icon-heart:before                { content: "\f004"; }
		.icon-star:before                 { content: "\f005"; }
		.icon-star-empty:before           { content: "\f006"; }
		.icon-user:before                 { content: "\f007"; }
		.icon-film:before                 { content: "\f008"; }
		.icon-th-large:before             { content: "\f009"; }
		.icon-th:before                   { content: "\f00a"; }
		.icon-th-list:before              { content: "\f00b"; }
		.icon-ok:before                   { content: "\f00c"; }
		.icon-remove:before               { content: "\f00d"; }
		.icon-zoom-in:before              { content: "\f00e"; }

		.icon-zoom-out:before             { content: "\f010"; }
		.icon-off:before                  { content: "\f011"; }
		.icon-signal:before               { content: "\f012"; }
		.icon-cog:before                  { content: "\f013"; }
		.icon-trash:before                { content: "\f014"; }
		.icon-home:before                 { content: "\f015"; }
		.icon-file:before                 { content: "\f016"; }
		.icon-time:before                 { content: "\f017"; }
		.icon-road:before                 { content: "\f018"; }
		.icon-download-alt:before         { content: "\f019"; }
		.icon-download:before             { content: "\f01a"; }
		.icon-upload:before               { content: "\f01b"; }
		.icon-inbox:before                { content: "\f01c"; }
		.icon-play-circle:before          { content: "\f01d"; }
		.icon-repeat:before               { content: "\f01e"; }

		/* \f020 doesn't work in Safari. all shifted one down */
		.icon-refresh:before              { content: "\f021"; }
		.icon-list-alt:before             { content: "\f022"; }
		.icon-lock:before                 { content: "\f023"; }
		.icon-flag:before                 { content: "\f024"; }
		.icon-headphones:before           { content: "\f025"; }
		.icon-volume-off:before           { content: "\f026"; }
		.icon-volume-down:before          { content: "\f027"; }
		.icon-volume-up:before            { content: "\f028"; }
		.icon-qrcode:before               { content: "\f029"; }
		.icon-barcode:before              { content: "\f02a"; }
		.icon-tag:before                  { content: "\f02b"; }
		.icon-tags:before                 { content: "\f02c"; }
		.icon-book:before                 { content: "\f02d"; }
		.icon-bookmark:before             { content: "\f02e"; }
		.icon-print:before                { content: "\f02f"; }

		.icon-camera:before               { content: "\f030"; }
		.icon-font:before                 { content: "\f031"; }
		.icon-bold:before                 { content: "\f032"; }
		.icon-italic:before               { content: "\f033"; }
		.icon-text-height:before          { content: "\f034"; }
		.icon-text-width:before           { content: "\f035"; }
		.icon-align-left:before           { content: "\f036"; }
		.icon-align-center:before         { content: "\f037"; }
		.icon-align-right:before          { content: "\f038"; }
		.icon-align-justify:before        { content: "\f039"; }
		.icon-list:before                 { content: "\f03a"; }
		.icon-indent-left:before          { content: "\f03b"; }
		.icon-indent-right:before         { content: "\f03c"; }
		.icon-facetime-video:before       { content: "\f03d"; }
		.icon-picture:before              { content: "\f03e"; }

		.icon-pencil:before               { content: "\f040"; }
		.icon-map-marker:before           { content: "\f041"; }
		.icon-adjust:before               { content: "\f042"; }
		.icon-tint:before                 { content: "\f043"; }
		.icon-edit:before                 { content: "\f044"; }
		.icon-share:before                { content: "\f045"; }
		.icon-check:before                { content: "\f046"; }
		.icon-move:before                 { content: "\f047"; }
		.icon-step-backward:before        { content: "\f048"; }
		.icon-fast-backward:before        { content: "\f049"; }
		.icon-backward:before             { content: "\f04a"; }
		.icon-play:before                 { content: "\f04b"; }
		.icon-pause:before                { content: "\f04c"; }
		.icon-stop:before                 { content: "\f04d"; }
		.icon-forward:before              { content: "\f04e"; }

		.icon-fast-forward:before         { content: "\f050"; }
		.icon-step-forward:before         { content: "\f051"; }
		.icon-eject:before                { content: "\f052"; }
		.icon-chevron-left:before         { content: "\f053"; }
		.icon-chevron-right:before        { content: "\f054"; }
		.icon-plus-sign:before            { content: "\f055"; }
		.icon-minus-sign:before           { content: "\f056"; }
		.icon-remove-sign:before          { content: "\f057"; }
		.icon-ok-sign:before              { content: "\f058"; }
		.icon-question-sign:before        { content: "\f059"; }
		.icon-info-sign:before            { content: "\f05a"; }
		.icon-screenshot:before           { content: "\f05b"; }
		.icon-remove-circle:before        { content: "\f05c"; }
		.icon-ok-circle:before            { content: "\f05d"; }
		.icon-ban-circle:before           { content: "\f05e"; }

		.icon-arrow-left:before           { content: "\f060"; }
		.icon-arrow-right:before          { content: "\f061"; }
		.icon-arrow-up:before             { content: "\f062"; }
		.icon-arrow-down:before           { content: "\f063"; }
		.icon-share-alt:before            { content: "\f064"; }
		.icon-resize-full:before          { content: "\f065"; }
		.icon-resize-small:before         { content: "\f066"; }
		.icon-plus:before                 { content: "\f067"; }
		.icon-minus:before                { content: "\f068"; }
		.icon-asterisk:before             { content: "\f069"; }
		.icon-exclamation-sign:before     { content: "\f06a"; }
		.icon-gift:before                 { content: "\f06b"; }
		.icon-leaf:before                 { content: "\f06c"; }
		.icon-fire:before                 { content: "\f06d"; }
		.icon-eye-open:before             { content: "\f06e"; }

		.icon-eye-close:before            { content: "\f070"; }
		.icon-warning-sign:before         { content: "\f071"; }
		.icon-plane:before                { content: "\f072"; }
		.icon-calendar:before             { content: "\f073"; }
		.icon-random:before               { content: "\f074"; }
		.icon-comment:before              { content: "\f075"; }
		.icon-magnet:before               { content: "\f076"; }
		.icon-chevron-up:before           { content: "\f077"; }
		.icon-chevron-down:before         { content: "\f078"; }
		.icon-retweet:before              { content: "\f079"; }
		.icon-shopping-cart:before        { content: "\f07a"; }
		.icon-folder-close:before         { content: "\f07b"; }
		.icon-folder-open:before          { content: "\f07c"; }
		.icon-resize-vertical:before      { content: "\f07d"; }
		.icon-resize-horizontal:before    { content: "\f07e"; }

		.icon-bar-chart:before            { content: "\f080"; }
		.icon-twitter-sign:before         { content: "\f081"; }
		.icon-facebook-sign:before        { content: "\f082"; }
		.icon-camera-retro:before         { content: "\f083"; }
		.icon-key:before                  { content: "\f084"; }
		.icon-cogs:before                 { content: "\f085"; }
		.icon-comments:before             { content: "\f086"; }
		.icon-thumbs-up:before            { content: "\f087"; }
		.icon-thumbs-down:before          { content: "\f088"; }
		.icon-star-half:before            { content: "\f089"; }
		.icon-heart-empty:before          { content: "\f08a"; }
		.icon-signout:before              { content: "\f08b"; }
		.icon-linkedin-sign:before        { content: "\f08c"; }
		.icon-pushpin:before              { content: "\f08d"; }
		.icon-external-link:before        { content: "\f08e"; }

		.icon-signin:before               { content: "\f090"; }
		.icon-trophy:before               { content: "\f091"; }
		.icon-github-sign:before          { content: "\f092"; }
		.icon-upload-alt:before           { content: "\f093"; }
		.icon-lemon:before                { content: "\f094"; }
		.icon-phone:before                { content: "\f095"; }
		.icon-check-empty:before          { content: "\f096"; }
		.icon-bookmark-empty:before       { content: "\f097"; }
		.icon-phone-sign:before           { content: "\f098"; }
		.icon-twitter:before              { content: "\f099"; }
		.icon-facebook:before             { content: "\f09a"; }
		.icon-github:before               { content: "\f09b"; }
		.icon-unlock:before               { content: "\f09c"; }
		.icon-credit-card:before          { content: "\f09d"; }
		.icon-rss:before                  { content: "\f09e"; }

		.icon-hdd:before                  { content: "\f0a0"; }
		.icon-bullhorn:before             { content: "\f0a1"; }
		.icon-bell:before                 { content: "\f0a2"; }
		.icon-certificate:before          { content: "\f0a3"; }
		.icon-hand-right:before           { content: "\f0a4"; }
		.icon-hand-left:before            { content: "\f0a5"; }
		.icon-hand-up:before              { content: "\f0a6"; }
		.icon-hand-down:before            { content: "\f0a7"; }
		.icon-circle-arrow-left:before    { content: "\f0a8"; }
		.icon-circle-arrow-right:before   { content: "\f0a9"; }
		.icon-circle-arrow-up:before      { content: "\f0aa"; }
		.icon-circle-arrow-down:before    { content: "\f0ab"; }
		.icon-globe:before                { content: "\f0ac"; }
		.icon-wrench:before               { content: "\f0ad"; }
		.icon-tasks:before                { content: "\f0ae"; }

		.icon-filter:before               { content: "\f0b0"; }
		.icon-briefcase:before            { content: "\f0b1"; }
		.icon-fullscreen:before           { content: "\f0b2"; }

		.icon-group:before                { content: "\f0c0"; }
		.icon-link:before                 { content: "\f0c1"; }
		.icon-cloud:before                { content: "\f0c2"; }
		.icon-beaker:before               { content: "\f0c3"; }
		.icon-cut:before                  { content: "\f0c4"; }
		.icon-copy:before                 { content: "\f0c5"; }
		.icon-paper-clip:before           { content: "\f0c6"; }
		.icon-save:before                 { content: "\f0c7"; }
		.icon-sign-blank:before           { content: "\f0c8"; }
		.icon-reorder:before              { content: "\f0c9"; }
		.icon-list-ul:before              { content: "\f0ca"; }
		.icon-list-ol:before              { content: "\f0cb"; }
		.icon-strikethrough:before        { content: "\f0cc"; }
		.icon-underline:before            { content: "\f0cd"; }
		.icon-table:before                { content: "\f0ce"; }

		.icon-magic:before                { content: "\f0d0"; }
		.icon-truck:before                { content: "\f0d1"; }
		.icon-pinterest:before            { content: "\f0d2"; }
		.icon-pinterest-sign:before       { content: "\f0d3"; }
		.icon-google-plus-sign:before     { content: "\f0d4"; }
		.icon-google-plus:before          { content: "\f0d5"; }
		.icon-money:before                { content: "\f0d6"; }
		.icon-caret-down:before           { content: "\f0d7"; }
		.icon-caret-up:before             { content: "\f0d8"; }
		.icon-caret-left:before           { content: "\f0d9"; }
		.icon-caret-right:before          { content: "\f0da"; }
		.icon-columns:before              { content: "\f0db"; }
		.icon-sort:before                 { content: "\f0dc"; }
		.icon-sort-down:before            { content: "\f0dd"; }
		.icon-sort-up:before              { content: "\f0de"; }

		.icon-envelope-alt:before         { content: "\f0e0"; }
		.icon-linkedin:before             { content: "\f0e1"; }
		.icon-undo:before                 { content: "\f0e2"; }
		.icon-legal:before                { content: "\f0e3"; }
		.icon-dashboard:before            { content: "\f0e4"; }
		.icon-comment-alt:before          { content: "\f0e5"; }
		.icon-comments-alt:before         { content: "\f0e6"; }
		.icon-bolt:before                 { content: "\f0e7"; }
		.icon-sitemap:before              { content: "\f0e8"; }
		.icon-umbrella:before             { content: "\f0e9"; }
		.icon-paste:before                { content: "\f0ea"; }
		.icon-lightbulb:before            { content: "\f0eb"; }
		.icon-exchange:before             { content: "\f0ec"; }
		.icon-cloud-download:before       { content: "\f0ed"; }
		.icon-cloud-upload:before         { content: "\f0ee"; }

		.icon-user-md:before              { content: "\f0f0"; }
		.icon-stethoscope:before          { content: "\f0f1"; }
		.icon-suitcase:before             { content: "\f0f2"; }
		.icon-bell-alt:before             { content: "\f0f3"; }
		.icon-coffee:before               { content: "\f0f4"; }
		.icon-food:before                 { content: "\f0f5"; }
		.icon-file-alt:before             { content: "\f0f6"; }
		.icon-building:before             { content: "\f0f7"; }
		.icon-hospital:before             { content: "\f0f8"; }
		.icon-ambulance:before            { content: "\f0f9"; }
		.icon-medkit:before               { content: "\f0fa"; }
		.icon-fighter-jet:before          { content: "\f0fb"; }
		.icon-beer:before                 { content: "\f0fc"; }
		.icon-h-sign:before               { content: "\f0fd"; }
		.icon-plus-sign-alt:before        { content: "\f0fe"; }

		.icon-double-angle-left:before    { content: "\f100"; }
		.icon-double-angle-right:before   { content: "\f101"; }
		.icon-double-angle-up:before      { content: "\f102"; }
		.icon-double-angle-down:before    { content: "\f103"; }
		.icon-angle-left:before           { content: "\f104"; }
		.icon-angle-right:before          { content: "\f105"; }
		.icon-angle-up:before             { content: "\f106"; }
		.icon-angle-down:before           { content: "\f107"; }
		.icon-desktop:before              { content: "\f108"; }
		.icon-laptop:before               { content: "\f109"; }
		.icon-tablet:before               { content: "\f10a"; }
		.icon-mobile-phone:before         { content: "\f10b"; }
		.icon-circle-blank:before         { content: "\f10c"; }
		.icon-quote-left:before           { content: "\f10d"; }
		.icon-quote-right:before          { content: "\f10e"; }

		.icon-spinner:before              { content: "\f110"; }
		.icon-circle:before               { content: "\f111"; }
		.icon-reply:before                { content: "\f112"; }
		.icon-github-alt:before           { content: "\f113"; }
		.icon-folder-close-alt:before     { content: "\f114"; }
		.icon-folder-open-alt:before      { content: "\f115"; }

		.icon-blogger-sign:before,.icon-blogger:before,.icon-delicious:before,.icon-dribbble-sign:before,.icon-dribbble:before,.icon-dropbox:before,.icon-drupal:before,.icon-evernote-sign:before,.icon-evernote:before,.icon-flickr-sign:before,.icon-flickr:before,.icon-forrst-sign:before,.icon-forrst:before,.icon-foursquare-sign:before,.icon-foursquare:before,.icon-git-fork:before,.icon-hacker-news:before,.icon-instagram:before,.icon-lastfm-sign:before,.icon-lastfm:before,.icon-paypal:before,.icon-picasa-sign:before,.icon-picasa:before,.icon-reddit:before,.icon-share-this-sign:before,.icon-share-this:before,.icon-skype:before,.icon-soundcloud:before,.icon-spotify:before,.icon-stack-overflow:before,.icon-tumblr-sign:before,.icon-tumblr:before,.icon-vimeo-sign:before,.icon-vimeo:before,.icon-wordpress-sign:before,.icon-wordpress:before,.icon-yelp-sign:before,.icon-yelp:before,.icon-youtube-sign:before,.icon-youtube:before              {font-family:'Font-Awesome-Social'; }

		.icon-dropbox:before              { content: "\f300"; }
		.icon-drupal:before               { content: "\f301"; }
		.icon-git-fork:before             { content: "\f302"; }
		.icon-instagram:before            { content: "\f303"; }
		.icon-share-this-sign:before      { content: "\f304"; }
		.icon-share-this:before           { content: "\f305"; }
		.icon-foursquare-sign:before      { content: "\f306"; }
		.icon-foursquare:before           { content: "\f307"; }
		.icon-hacker-news:before          { content: "\f308"; }
		.icon-skype:before                { content: "\f309"; }
		.icon-spotify:before              { content: "\f30a"; }
		.icon-soundcloud:before           { content: "\f30b"; }
		.icon-paypal:before               { content: "\f30c"; }
		.icon-youtube-sign:before         { content: "\f30d"; }
		.icon-youtube:before              { content: "\f30e"; }
		.icon-reddit:before               { content: "\f30f"; }
		.icon-blogger-sign:before         { content: "\f310"; }
		.icon-blogger:before              { content: "\f311"; }
		.icon-dribbble-sign:before        { content: "\f312"; }
		.icon-dribbble:before             { content: "\f313"; }
		.icon-evernote-sign:before        { content: "\f314"; }
		.icon-evernote:before             { content: "\f315"; }
		.icon-flickr-sign:before          { content: "\f316"; }
		.icon-flickr:before               { content: "\f317"; }
		.icon-forrst-sign:before          { content: "\f318"; }
		.icon-forrst:before               { content: "\f319"; }
		.icon-delicious:before            { content: "\f31a"; }
		.icon-lastfm-sign:before          { content: "\f31b"; }
		.icon-lastfm:before               { content: "\f31c"; }
		.icon-picasa-sign:before          { content: "\f31d"; }
		.icon-picasa:before               { content: "\f31e"; }
		.icon-stack-overflow:before       { content: "\f320"; }
		.icon-tumblr-sign:before          { content: "\f321"; }
		.icon-tumblr:before               { content: "\f322"; }
		.icon-vimeo-sign:before           { content: "\f323"; }
		.icon-vimeo:before                { content: "\f324"; }
		.icon-wordpress-sign:before       { content: "\f325"; }
		.icon-wordpress:before            { content: "\f326"; }
		.icon-yelp-sign:before            { content: "\f327"; }
		.icon-yelp:before                 { content: "\f328"; }
		.icon-cloud-upload:before		  { content: "\f0ee"; }
		.icon-cloud-download:before		  { content: "\f0ed"; }

</style>
</html>