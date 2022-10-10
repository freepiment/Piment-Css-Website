<!DOCTYPE html>
<html lang="fr" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <title>Piment CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Piment is a CSS framework for faster and easier web development.">
    <meta name="author" content="webmonster.tech">

    <link rel="canonical" href="https://pimentcss.webmonster.tech/">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/site.webmanifest">

    <link href="/assets/css/pimentcss.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro&family=Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic%7CLato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic" media="all">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Source Code Pro","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]  }
        });
    </script>

    <link rel="stylesheet" href="/assets/css/prism.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@getpimentcss">
    <meta name="twitter:creator" content="@getpimentcss">
    <meta name="twitter:title" content="PimentCSS">
    <meta name="twitter:description" content="Piment is a CSS framework for faster and easier web development.">
    <meta name="twitter:image" content="https://pimentcss.webmonster.tech/assets/img/pimentcss-sharing.png">

    <meta property="og:url" content="https://pimentcss.webmonster.tech/">
    <meta property="og:title" content="PimentCSS">
    <meta property="og:description" content="Piment is a CSS framework for faster and easier web development.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://pimentcss.webmonster.tech/assets/img/pimentcss-sharing.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="500">

    <script type="application/ld+json">
        {
            "@context" : "https://schema.org",
            "@type" : "Organization",
            "legalName" : "Piment",
            "url" : "https://pimentcss.webmonster.tech/",
            "contactPoint" : [{
                "@type" : "ContactPoint",
                "email" : "hello@webmonster.tech",
                "contactType" : "CEO",
                "url": "https://pimentcss.webmonster.tech"
            }],
            "logo" : "https://pimentcss.webmonster.tech/assets/logo-pimentcss.svg"
        },
        {
            "@context": "https://schema.org/",
            "@type": "AggregateRating",
            "itemReviewed": {
            "@type": "Organization",
            "name": "Markentive"
        },
            "ratingValue": "5.0",
            "bestRating": "5",
            "ratingCount": "10"
        }
    </script>

</head>
<body class="body">

<header class="main-header">
    <div class="main-header__container js-main-header container max-width-xl">
        <div class="flex items-center">
            <a href="/" class="logo flex-shrink-0" aria-label="Go to homepage">
                <svg viewBox="0 0 100 55">
                    <path fill="#E9473E" stroke="#E9473E" stroke-width="4.7131" stroke-linejoin="round" d="M6.34,27.7l1.09,0.32
                        l1.64,1.09l2.04,1.21l2.02,1l1.84,0.78l2.21,0.77l3.15,1l2.74,0.5l2.58,0.48l1.6,0.21l1.79,0.06l2.61,0.15l2.23-0.22l2.57-0.27
                        l2.37-0.33l2.88-0.82l2.93-0.94l2.75-1.17l2.5-1.2l2.57-1.48l3.21-2l2.73-1.76l2.47-1.7l2.95-1.94l3.26-2.12l2.25-1.22l2.2-1.1
                        l1.85-0.85l1.84-0.59l1.73-0.41l1.77-0.16l1.72-0.01l2.03,0.28l1.71,0.51l1.27,0.59l1.04,0.77l1,0.78l0.79,0.8l0.97,1.2l0.59,0.91
                        l0.59,1.19c0,0,0.17,1.05,0.21,1.16c0.04,0.11,0.18,1.13,0.18,1.27c0,0.14-0.02,1.48-0.02,1.48l-0.15,1.39l-0.35,1.56l-0.52,1.55
                        l-0.49,1.07l-0.71,1.25l-0.81,1.34l-0.84,1.16l-0.99,1.26l-1.04,1.16l-1.38,1.4l-1.09,1l-1.59,1.18l-1.4,0.99l-1.79,1.14l-1.53,1.01
                        l-1.37,0.86l-2.05,1.1l-2,0.85l-2.03,0.88l-2.2,0.82l-2.19,0.75l-2.11,0.64l-3.21,0.79l-2.36,0.44l-3.21,0.48l-1.89,0.18l-2.52,0.14
                        l-1.87,0.07l-1.88-0.06l-2.15-0.07l-2.55-0.28l-2.08-0.3l-2.67-0.5l-1.81-0.43l-2.05-0.54l-2.4-0.66l-1.44-0.56l-1.57-0.65
                        l-2.33-1.06l-1.96-0.99l-2.7-1.55l-1.82-1.16l-2.54-2.16l-1.97-1.66l-1.14-1.17l-1.24-1.4l-1.18-1.59l-0.85-1.29l-1.15-1.87
                        l-0.98-1.7l-0.41-1.31l-0.02-1.28L6.34,27.7z"/>
                    <path fill="#53AF32" stroke="#53AF32" stroke-width="2.1423" stroke-linecap="round" stroke-linejoin="round" d="M84.43,19.55l0.46,1.36l0.66,1.47l0.66,1.28l0.77,0.96l0.93,0.68"/>
                    <path fill="#53AF32" d="M85.86,22.02l1-1c0,0,0.88-0.82,1.25-1.2c0.37-0.38,1.28-1.26,1.6-1.71
                        c0.32-0.45,1.08-1.59,1.23-1.83c0.15-0.23,0.99-1.33,1.05-1.45c0.05-0.12,0.69-0.97,0.82-1.23s0.95-1.94,0.95-1.94l0.36-1.09
                        l0.33-1.51l0.06-1.14c0,0-0.03-1.3-0.06-1.38s-0.3-1.16-0.3-1.16l-0.44-1l-0.56-1.2l-0.21-0.63c0,0,0.08-0.78,0.22-0.93
                        c0.14-0.15,0.67-0.47,0.77-0.63s0.85-0.16,0.85-0.16l0.77,0.21l0.42,0.52l0.5,0.95l0.48,1.01l0.44,1.34l0.13,1.14l0.05,1.32
                        L97.54,8.6l-0.27,1.2l-0.47,1.47l-0.5,1.2l-0.56,1.17l-0.51,1.09l-0.64,0.89l-0.81,1l-0.71,1.03l-1.03,1.1l-0.98,1.02l-4.35,3.52
                        l-0.6,0L85.86,22.02z"/>
                </svg>
            </a>
        </div>
        <div class="flex items-center">
            <div class="main-nav js-main-nav">
                <button class="main-nav__trigger js-trigger margin-left-sm"><i>Menu</i><em aria-hidden="true">Close</em></button>
                <nav class="main-nav__list js-nav">
                    <ul>
                        <li class="main-nav__label">#menu</li>
                        <li><a href="/get-started.php" class="current">Get started</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
