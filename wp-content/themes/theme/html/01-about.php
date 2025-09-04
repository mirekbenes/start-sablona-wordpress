<?php
	$isLocalDevelopment = strpos($_SERVER['HTTP_HOST'], '.loc') !== false;
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>About - BIG TIME</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

	<meta name="robots" content="noindex, nofollow">
	<meta name="description" content="About - BIG TIME">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://xxx/images/fb.jpg">
	<meta property="og:title" content="About - BIG TIME">
	<meta property="og:description" content="About - BIG TIME">

	<?php if ($isLocalDevelopment): ?>
		<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.maps.css?2025-09-04-2:28pm">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.min.css?2025-09-04-2:28pm">
	<?php endif; ?>

	<link rel="stylesheet" type="text/css" media="print" href="../assets/css/print.min.css?2025-09-04-2:28pm">

	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon@2x.png">
	<link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/favicon-192.png">
	<link rel="icon" type="image/png" sizes="512x512" href="../assets/images/favicon/favicon-512.png">

	<meta name="theme-color" content="#fff">
	<meta name="msapplication-TileColor" content="#fff">
</head>
<body class="">

	<div class="container">
        <header class="header">
    <div class="header__section">
        <div class="header__burger">
            <button type="button" class="hamburger js-hamburger" aria-expanded="false">
				<span class="hamburger__lines">
					<span></span>
				</span>
                <span class="hamburger__txt">Menu</span>
            </button>
        </div><!-- /header__burger -->

        <div class="header__logo">
            <div class="sitelogo">
                <a href="/">
                    <img src="../assets/images/logo.svg" alt="BIG TIME" width="120" height="19">
                </a>
            </div>
        </div><!-- /header__logo -->

        <div class="header__nav">
            <nav class="nav" aria-label="Primary">
                <ul class="reset">
                    <li class="current-menu-item">
                        <a href="01-about.php">About</a>
                    </li>
                    <li>
                        <a href="02-work.php">Work</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav><!-- /nav -->
        </div><!-- /header__nav -->

        <div class="header__tools">
            <div class="langswitch">
                <a href="/cs/">CS</a>
            </div>
        </div><!-- /header__tools -->
    </div><!-- /header__section -->
</header><!-- /header -->


		<main class="main">
			<h1>Rozcestník HTML šablon</h1>

			<ul>
				<li><a href="./index/">Index</a></li>
			</ul>

			<hr>

			<h2>Vývojové prostředí kodéra</h2>
			<p>Návod na instalaci stejného vývojového prostředí je možný prohlédnout <a href="https://github.com/mirekbenes/vyvojove-prostredi-gulp4">zde</a>.</p>

			<hr>

			<h2>Informace k HTML/CSS/JS</h2>
			<p>HTML a CSS je tvořeno pomocí metodiky <a href="http://getbem.com/">BEM</a>.</p>
			<p>Na elementu <code>&lt;body&gt;</code> je pro homepage CLASS <code>homepage</code> pro ostatní strany dle potřeby.</p>

			<p>Na homepage je logo v elementu <code>&lt;h1 class="sitelogo"&gt;logo&lt;/h1&gt;</code> na ostatních stranách již v odstavci <code>&lt;p class="sitelogo"&gt;logo&lt;/p&gt;</code>.</p>

			<hr>

			<h3>Písmo</h3>
			<p>Použitá písma: Bebas Neue (Adobe Fonts) Roboto (Google fonts <code>dist/js/fonts.js</code>) (Google fonts - písmo je importováno styly <code>@import</code>) (Inicializace přes Web Font Loader v <code>source/scripts/custom/fonts.js</code>).</p>
			<ul>
				<li>Bebas Neue: Regular</li>
				<li>Roboto: Normal, Bold</li>
			</ul>

			<hr>

			<h2>HTML</h2>
			<p>je vygenerované z twigu zdrojové soubory jsou ve složce <code>source/twig</code>.</p>

			<hr>

			<h2>CSS</h2>
			<p>je vygenerované z SCSS, zdrojové soubory pro SCSS jsou ve složce <code>source/styles/*.scss</code>.<br>Z SCSS jsou vygenerována 2 CSS ( <code>dist/css/style.min.css</code>a verze <code>dist/css/style.maps.css</code>, která má source maps).</p>

			<hr>

			<h2>Obrázky</h2>
			<p>Obrázky pro CSS jsou datově komprimované.</p>

			<hr>

			<h2>JavaScripty</h2>
			<p>Všechny prvky, které jsou propojeny s JavaScriptem mají class popřípadě ID <code>js-nazev-propojeni</code>.</p>
			<p>Scripty jsou sloučené do jednoho souboru <code>dist/js/compiled.js</code> a komprimované podoby <code>dist/js/compiled.min.js</code>. Nezkomprimovaná podoba všech scriptů  je ve složce <code>source/js</code>.</p>
			<p>Spouštení jmenných prostorů a inicializace pluginů je v <code>source/js/init/site.js</code></p>

			<hr>

			<h3>JS pluginy a jmenné prostory</h3>
			<p>
				<strong>Lightbox</strong> <code>source/js/_vendor-plugin/glightbox.js</code><br>
				<small class="lic">Licence MIT</small><br>
				Použit plugin GLightbox. Dokumentace dostupná <a href="https://github.com/biati-digital/glightbox">zde</a>.<br>
				Popis obrázků pro lightbox se vytváří přes HTML5 datové atributy.<br>
				Class "js-lightbox" je primární inicializace. Asociace fotografií do galerie se provede automaticky.<br>
				<code>&lt;a href="#" class="js-lightbox" data-description="Popis obrázku"&gt;</code>
			</p>

			<hr>

			<p>
				<strong>Jednoduché komponenty</strong><br>
				<small class="lic">Licence WTFPL</small><br>
				Primární navigace <code>source/js/custom/jquery.nav.js</code>
			</p>

			<hr>

			<h2>Nadpis H2</h2>
			<a href="https://fastly.picsum.photos/id/866/1200/800.jpg?hmac=cMZ0zQRwnCFQskIqM7bmp90xVm9-k6lHUAFEJZp3mw4" class="js-lightbox" data-description="Popis obrázku"><img src="https://picsum.photos/seed/picsum/300/200" alt="Popisek" width="200" class="left"></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Donec vel massa leo</strong>. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat <a href="#">odkaz</a> ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<hr>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Donec vel massa leo</strong>. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat <a href="#">odkaz</a> ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<h3>Nadpis H3</h3>
			<a href="https://fastly.picsum.photos/id/866/1200/800.jpg?hmac=cMZ0zQRwnCFQskIqM7bmp90xVm9-k6lHUAFEJZp3mw4" class="js-lightbox"><img src="https://picsum.photos/seed/picsum/300/200" alt="Popisek" width="200" class="right"></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat lectus augue ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat lectus augue ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<h4>Nadpis H4</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat lectus augue ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<h5>Nadpis H5</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat lectus augue ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<h6>Nadpis H6</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo. Duis et facilisis nisl. Cras vehicula, lectus id dictum viverra, mauris lorem rhoncus elit, non consequat lectus augue ut enim. Integer ultrices placerat orci nec rhoncus. Cras viverra, dolor quis ullamcorper sollicitudin, urna ipsum cursus ipsum, in porta diam ligula et sem. Maecenas nibh arcu, condimentum eu hendrerit vitae, vehicula id arcu. Pellentesque quis feugiat nisi.</p>

			<h2>Seznamy</h2>
			<ul>
				<li>lorem <a href="#">ipsum dolor</a></li>
				<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
				<li>enim est mollis erat, sed fringilla leo
					<ul>
						<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
						<li>enim rhoncus eu cursus diam </li>
					</ul>
				</li>
				<li>cursus condimentum tortor, eget egestas </li>
			</ul>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</p>

			<ol>
				<li>lorem <a href="#">ipsum dolor</a></li>
				<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
				<li>enim est mollis erat, sed fringilla leo
					<ol>
						<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
						<li>enim rhoncus eu cursus diam </li>
					</ol>
				</li>
				<li>cursus condimentum tortor, eget egestas </li>
			</ol>

			<ol>
				<li>lorem <a href="#">ipsum dolor</a></li>
				<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
				<li>enim est mollis erat, sed fringilla leo
					<ul>
						<li>habitant morbi tristique senectus habitant morbi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</li>
						<li>enim rhoncus eu cursus diam </li>
					</ul>
				</li>
				<li>cursus condimentum tortor, eget egestas </li>
			</ol>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</p>

			<dl>
				<dt>Lorem</dt>
				<dd>Quisque vitae lacinia nisi. Cras eu arcu et dui tincidunt dictum vitae sit amet erat. Pellentesque habitant morbi tristique senectus et netus et malesuada</dd>
				<dt>Lorem</dt>
				<dd>Quisque vitae lacinia nisi. Cras eu arcu et dui tincidunt dictum vitae sit amet erat. Pellentesque habitant morbi tristique senectus et netus et malesuada</dd>
			</dl>
			<dl>
				<dt>Lorem</dt>
				<dd>Quisque vitae lacinia nisi. Cras eu arcu et dui tincidunt dictum vitae sit amet erat. Pellentesque habitant morbi tristique senectus et netus et malesuada</dd>
			</dl>

			<h2>Tabulka</h2>
			<table>
				<tbody>
				<tr>
					<th>praesent lorem</th>
					<th><a href="#">viverra nulla</a></th>
					<th>pulvinar ligula</th>
				</tr>
				<tr>
					<td><a href="#">eget eu diam</a></td>
					<td>quis varius</td>
					<td>interdum nibh</td>
				</tr>
				<tr>
					<td>posuere cubilia</td>
					<td>habitant morbi</td>
					<td>id blandit</td>
				</tr>
				<tr>
					<td>eget congue</td>
					<td>ornare non felis</td>
					<td>amet augue</td>
				</tr>
				</tbody>
			</table>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</p>

			<table class="width-100 no-border">
				<thead>
				<tr>
					<td>praesent lorem</td>
					<td><a href="#">viverra nulla</a></td>
					<td>pulvinar ligula</td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><a href="#">eget eu diam</a></td>
					<td>quis varius</td>
					<td>interdum nibh</td>
				</tr>
				<tr>
					<td>posuere cubilia</td>
					<td>habitant morbi</td>
					<td>id blandit</td>
				</tr>
				<tr>
					<td>eget congue</td>
					<td>ornare non felis</td>
					<td>amet augue</td>
				</tr>
				</tbody>
			</table>

			<h2>Citace</h2>
			<p>
				<cite>
					<strong>Citace</strong>
					Nam sem velit, condimentum in posuere eu, elementum in augue. Vestibulum pulvinar ligula eget ante placerat eget euismod velit laoreet. Donec quis quam lectus, quis viverra nulla. Donec aliquet, purus eget pharetra egestas, massa orci egestas arcu, ac dignissim felis nunc vitae est.
				</cite>
			</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</p>

			<blockquote>
				<p>
					<strong>Bloková citace</strong>
					Vivamus urna diam, placerat et ultricies interdum, tempus sed diam. Nam magna mi, pulvinar nec pellentesque eu, consequat it amet quam. Etiam posuere purus eu augue fermentum laoreet. Ut at risus sapien. Duis commodo dapibus arcu.
				</p>
			</blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa leo. Praesent tristique eros libero, quis vestibulum lorem. Aenean sapien enim, aliquam id ullamcorper et, malesuada vitae leo.</p>
		</main><!-- /main -->
	</div><!-- /container -->

	<footer class="footer">
    <div class="footer__top">
        <div class="footer__aside">
            <div class="footer__logo">
                <img src="../assets/images/logo.svg" alt="BIG TIME" width="156" height="25">
            </div>
        </div><!-- /footer__aside -->

        <div class="footer__info">
            <div class="footer__cta">
                <a href="tel:+420724687619" class="btn">
                    +420 724 687 619
                    <span class="btn__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3287 8.54988L6.55033 15.3282L7.96454 16.7424L14.7429 9.96409L14.7429 16.0353L16.7426 16.0353L16.7426 6.55018L7.25743 6.55018L7.25743 8.54988L13.3287 8.54988Z" fill="currentColor"/>
</svg>

                    </span>
                </a>

                <a href="mailto:info@rvlt.digital" class="btn">
                    info@rvlt.digital
                    <span class="btn__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3287 8.54988L6.55033 15.3282L7.96454 16.7424L14.7429 9.96409L14.7429 16.0353L16.7426 16.0353L16.7426 6.55018L7.25743 6.55018L7.25743 8.54988L13.3287 8.54988Z" fill="currentColor"/>
</svg>

                    </span>
                </a>
            </div><!-- /footer__cta -->

            <div class="footer__social">
                <ul class="reset">
                    <li>
                        <a href="https://www.linkedin.com/company/rvlt-digital/" target="_blank">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 0C1.00735 0 0 1.00735 0 2.25V24.75C0 25.9926 1.00735 27 2.25 27H24.75C25.9926 27 27 25.9926 27 24.75V2.25C27 1.00735 25.9926 0 24.75 0H2.25ZM8.28113 6.00408C8.28957 7.43845 7.21593 8.32229 5.94186 8.31596C4.74162 8.30963 3.69533 7.35408 3.70166 6.00619C3.70799 4.73845 4.70995 3.71962 6.01144 3.74916C7.33191 3.77869 8.28957 4.7469 8.28113 6.00408ZM13.9196 10.1426H10.1396H10.1375V22.9824H14.1325V22.6828C14.1325 22.113 14.1321 21.543 14.1316 20.9728C14.1304 19.4521 14.1291 17.9298 14.1369 16.4095C14.139 16.0404 14.1558 15.6565 14.2507 15.3042C14.6071 13.9879 15.7907 13.1379 17.1111 13.3468C17.9591 13.4796 18.5201 13.9712 18.7563 14.7707C18.902 15.2705 18.9674 15.8084 18.9737 16.3295C18.9908 17.9009 18.9883 19.4723 18.9859 21.0438C18.985 21.5985 18.9842 22.1535 18.9842 22.7082V22.9803H22.992V22.6724C22.992 21.9944 22.9917 21.3165 22.9913 20.6386C22.9905 18.9444 22.9896 17.2501 22.9941 15.5553C22.9962 14.7895 22.914 14.0345 22.7262 13.2941C22.4457 12.1929 21.8656 11.2817 20.9227 10.6236C20.254 10.1553 19.52 9.85365 18.6995 9.8199C18.606 9.81602 18.5118 9.81093 18.4171 9.80582C17.9976 9.78314 17.5712 9.7601 17.1701 9.84099C16.0226 10.0709 15.0144 10.5962 14.2528 11.5221C14.1643 11.6283 14.0778 11.7362 13.9486 11.8971L13.9196 11.9335V10.1426ZM4.02246 22.9866H7.9986V10.151H4.02246V22.9866Z" fill="currentColor"/>
</svg>

                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/rvlt_digital/" target="_blank">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 0H7.5C3.35787 0 0 3.35787 0 7.5V19.5C0 23.6421 3.35787 27 7.5 27H19.5C23.6421 27 27 23.6421 27 19.5V7.5C27 3.35787 23.6421 0 19.5 0ZM24.375 19.5C24.3668 22.1889 22.1889 24.3668 19.5 24.375H7.5C4.81103 24.3668 2.63323 22.1889 2.625 19.5V7.5C2.63323 4.81103 4.81103 2.63323 7.5 2.625H19.5C22.1889 2.63323 24.3668 4.81103 24.375 7.5V19.5ZM20.625 7.875C21.4534 7.875 22.125 7.20342 22.125 6.375C22.125 5.54658 21.4534 4.875 20.625 4.875C19.7966 4.875 19.125 5.54658 19.125 6.375C19.125 7.20342 19.7966 7.875 20.625 7.875ZM13.5 6.75C9.77208 6.75 6.75 9.77208 6.75 13.5C6.75 17.228 9.77208 20.25 13.5 20.25C17.228 20.25 20.25 17.228 20.25 13.5C20.2541 11.7085 19.5441 9.98935 18.2774 8.72262C17.0106 7.45588 15.2915 6.74601 13.5 6.75ZM9.375 13.5C9.375 15.7782 11.2218 17.625 13.5 17.625C15.7782 17.625 17.625 15.7782 17.625 13.5C17.625 11.2218 15.7782 9.375 13.5 9.375C11.2218 9.375 9.375 11.2218 9.375 13.5Z" fill="currentColor"/>
</svg>

                        </a>
                    </li>
                </ul>
            </div><!-- /footer__social -->
        </div><!-- /footer__info -->
    </div><!-- /footer__top -->

    <div class="footer__bottom">
        <div class="footer__aside"></div>

        <div class="footer__data">
            <div class="footer__text">
                <p>RVLT Digital s.r.o.<br>Dům Radost<br>nám. Winstona Churchilla 1800/2,<br>Praha 3, 130 00<br>IČ 07412649<br>DIČ CZ07412649</p>
            </div><!-- /footer__text -->

            <div class="footer__certs">
                <div class="footer__cert">
                    <img src="/assets/images/iso.svg" alt="ISO/IEC 27001" width="53" height="42" loading="lazy">
                    <p>RVLT Digital is an accredited <a href="https://www.iso.org/isoiec-27001-information-security.html" target="_blank">company ISO/IEC 27001</a> </p>
                </div>

                <div class="footer__cert">
                    <img src="/assets/images/sap.svg" alt="Certified by SAP" width="68" height="40" loading="lazy">
                    <p>RVLT Digital is an accredited <a href="https://partnerfinder.sap.com/" target="_blank">SAP Business Network supplier</a></p>
                </div>

            </div><!-- /footer__certs -->
        </div><!-- /footer__data -->
    </div><!-- /footer__bottom -->
</footer><!-- /footer -->

	<?php if ($isLocalDevelopment): ?>
    <script src="../assets/js/compiled.js?2025-09-04-2:28pm"></script>
<?php else: ?>
    <script src="../assets/js/compiled.min.js?2025-09-04-2:28pm"></script>
<?php endif; ?>


</body>
</html>
