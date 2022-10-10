<?php
include_once 'core/inc/head.inc.php';
?>

<main>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Getting started</h1>
                <p>Overview of the project, its contents, and how to get started with a simple template.</p>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-xs-12">
                <article id="articles" class="article-main">
                    <section id="download" class="scrollspy">
                        <h3>1. Download</h3>
                        <p>Before downloading, be sure to have a code editor (we recommend <a target="_blank" href="https://code.visualstudio.com/" rel="nofollow">Visual Studio Code</a>) and some working knowledge of HTML and CSS. We won't walk through the source files here, but they are available for download. We'll focus on getting started with the compiled Piment files.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Download compiled</h4>
                                        <p>Fastest way to get started: get the compiled and minified versions of our CSS, JS, and images. No docs or original source files.</p>
                                        <a href="https://www.npmjs.com/package/pimentcss" class="btn btn--md btn--accent mt-2">Download Piment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Download source</h4>
                                        <p>Get the original files for all CSS and JavaScript, along with a local copy of the docs by downloading the latest version.</p>
                                        <a href="https://github.com/WebmonsterA/Piment-Css" class="btn btn--md btn--accent mt-2"><i class="fa fa-github"></i> Download Piment source</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <hr>

                    <section class="mt-2 scrollspy" id="structure">
                        <h3>2. File structure</h3>
                        <p>Within the download you'll find the following file structure and contents, logically grouping common assets and providing both compiled and minified variations.</p>
                        <small>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Piment. You'll see something like this:</small>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
<pre class="hightlight"><code class="language-html" style="overflow: auto;"><span class="pln">  piment</span><span class="pun">/</span><span class="pln"></span>
<span class="pun">├──</span><span class="pln"> public</span><span class="pun">/</span><span class="pln"></span>
<span class="pun">├────</span><span class="pln"> assets</span><span class="pun">/</span><span class="pln"></span>
<span class="pun">├──────</span><span class="pln"> css</span><span class="pun">/</span><span class="pln"></span>
<span class="pun">│────────</span><span class="pln"></span><span class="pln"> piment</span><span class="pun">.</span><span class="pln">css
<span class="pun">│────────</span><span class="pln"></span><span class="pln"> piment</span><span class="pun">.min.</span><span class="pln">css
<span class="pun">├──────</span><span class="pln"> img</span><span class="pun">/</span><span class="pln"></span>
<span class="pun">│────────</span><span class="pln"></span><span class="pln"> logo</span><span class="pun">-pimentcss.</span><span class="pln">svg
</code>
</pre>
                            </div>
                        </div>

                        <p><small>This is the most basic form of Piment: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (piment.*), as well as compiled and minified CSS and JS (piment.min.*).</small></p>
                        <p><small>Please note that all JavaScript plugins require <a href="https://jquery.com/" target="_blank" rel="nofollow">jQuery</a> to be included.</small></p>

                    </section>

                    <hr>

                    <section class="mt-2 scrollspy" id="included">
                        <h3>3. What's included</h3>
                        <p>Piment comes equipped with HTML, CSS, and JS for all sorts of things, but they can be summarized with a handful of categories visible at the top of the <a href="/documentation.php">Piment documentation</a>.</p>

                        <h4>Docs sections</h4>

                        <h5>Scaffolding</h5>
                        <p>Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.</p>

                        <h5>Base CSS</h5>
                        <p>Styles for common HTML elements like typography, code, tables, forms, and buttons.</p>

                        <h5>Components</h5>
                        <p>Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.</p>


                        <h5>List of components</h5>
                        <p>Together, the Components provide the following interface elements:</p>

                        <ul>
                            <li>Typography</li>
                            <li>Responsive Grid </li>
                            <li>Form</li>
                            <li>Buttons</li>
                            <li>Media</li>
                            <li>Card</li>
                            <li>Utilities</li>
                        </ul>

                        <h5 class="mt-2">For the next releases</h5>
                        <ul>
                            <li>Navigational tabs, pills, and lists</li>
                            <li>Navbar</li>
                            <li>Labels</li>
                            <li>Badges</li>
                            <li>Page headers and hero unit</li>
                            <li>Alerts</li>
                            <li>Dropdowns</li>
                            <li>Accordion</li>
                            <li>Carousel</li>
                        </ul>

                        <p>In future guides, we may walk through these components individually in more detail. Until then, look for each of these in the documentation for information on how to utilize and customize them.</p>
                    </section>

                    <hr>

                    <section id="html" class="scrollspy">

                        <h3>4. Basic HTML template</h3>
                        <p>With a brief intro into the contents out of the way, we can focus on putting Piment to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="#structure">File structure</a>.</p>

                        <small>Now, here's a look at a typical HTML file:</small>
                        <pre class="line-numbers"><code class="language-html" style="overflow: auto;"><?php echo trim(htmlentities('<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piment Template</title>
        <meta name="description" content="Piment is a CSS framework for faster and easier web development.">
    </head>
    <body>
        <h1>Hello, world!</h1>
    </body>
</html>')); ?>
</code></pre>
                        <small>To make this a Pimented template, just include the appropriate CSS and JS files:</small>
                        <pre class="line-numbers" style="overflow: auto;"><code class="language-html"><?php echo trim(htmlentities('<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Piment Template</title>
<meta name="description" content="Piment is a CSS framework for faster and easier web development.">
<!-- Piment -->
<link href="assets/css/piment.min.css" rel="stylesheet" media="screen"> 
</head>
<body>
<h1>Hello, world!</h1>
</body>
</html>')); ?></code></pre>
                        <small>And you're set! With those two files added, you can begin to develop any site or application with Piment.</small>
                    </section>
                </article>
            </div>
        </div>
    </div>

</main>
<?php include_once 'core/inc/foot.inc.php'; ?>


