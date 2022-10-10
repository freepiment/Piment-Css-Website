<section id="typography" class="scrollspy">
    <h3>Typography</h3>

    <h4><span class="text-red">#</span> Headings</h4>
    <p>All HTML headings, <code class="solo"><?=htmlentities('<h1>');?></code> through <code class="solo"><?=htmlentities('</h1>');?></code> are available.</p>

    <div class="docs-example">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
    </div>

    <h4><span class="text-red">#</span> Body copy</h4>
    <p>Piment's global default <b>font-size is 16px</b>, with a <b>line-height of 24px</b>.</p>
    <p>This is applied to the <code class="solo"><?=htmlentities('<body>');?></code> and all paragraphs. In addition, <code class="solo"><?=htmlentities('<p>');?></code> (paragraphs) receive a bottom margin of half their line-height (10px by default).</p>

    <div class="docs-example">
        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
    </div>

    <pre><code class="language-html"><?=htmlentities('<p>...</p>');?></code></pre>

    <h4><span class="text-red">#</span> Lead body copy</h4>
    <p>Make a paragraph stand out by adding <code class="solo">.lead</code>.</p>

    <div class="docs-example">
        <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
    </div>

    <pre><code class="language-html"><?=htmlentities('<p class="lead">...</p>');?></code></pre>

    <h4><span class="text-red">#</span> Emphasis</h4>
    <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

    <p><code class="solo"><?=htmlentities('<small>');?></code></p>

    <p>For de-emphasizing inline or blocks of text, use the small tag.</p>

    <div class="docs-example">
        <p><small>This line of text is meant to be treated as fine print.</small></p>
    </div>

    <pre><code class="language-html"><?=htmlentities('<p><small>This line of text is meant to be treated as fine print.</small></p>');?></code></pre>

    <h4><span class="text-red">#</span> Bold</h4>
    <p>For emphasizing a snippet of text with a heavier font-weight.</p>

    <div class="docs-example">
        <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
    </div>
    <pre><code class="language-html"><?=htmlentities('<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>');?></code></pre>


    <h4><span class="text-red">#</span> Italics</h4>
    <p>For emphasizing a snippet of text with italics.</p>

    <div class="docs-example">
        <p>The following snippet of text is rendered as <em>italicized</em> text.</p>
    </div>

    <pre><code class="language-html"><?=htmlentities('<p>The following snippet of text is rendered as <em>italicized</em> text.</p>');?></code></pre>

    <p class="mt-1"><span class="badge">Heads up!</span> Feel free to use <code class="solo"><?=htmlentities('<b>');?></code> and <code class="solo"><?=htmlentities('<i>');?></code> in HTML5. <code class="solo"><?=htmlentities('<b>');?></code> is meant to highlight words or phrases without conveying additional importance while <code class="solo"><?=htmlentities('<i>');?></code> is mostly for voice, technical terms, etc.</p>

    <h4><span class="text-red">#</span> Alignment classes</h4>
    <p>Easily realign text to components with text alignment classes.</p>

    <div class="docs-example">
        <p class="text-left">Left aligned text.</p>
        <p class="text-center">Center aligned text.</p>
        <p class="text-right">Right aligned text.</p>
    </div>
    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<p class="text-left">Left aligned text.</p>
<p class="text-center">Center aligned text.</p>
<p class="text-right">Right aligned text.</p>');?></code></pre>


    <h4><span class="text-red">#</span> Emphasis classes</h4>
    <p>Convey meaning through color with a handful of emphasis utility classes.</p>

    <div class="docs-example">
        <p class="text-blue">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-red">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
        <p class="text-error">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<p class="text-blue">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-red">Donec ullamcorper nulla non metus auctor fringilla.</p>
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
<p class="text-error">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>');?></code></pre>


    <h4><span class="text-red">#</span> Abbreviations</h4>
    <p>Stylized implementation of HTML's <code class="solo"><?=htmlentities('<abbr>');?></code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code class="solo">title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>
    <p><code class="solo"><?=htmlentities('<abbr>');?></code></p>
    <p>For expanded text on long hover of an abbreviation, include the title attribute.</p>

    <div class="docs-example">
        <p>An abbreviation of the word attribute is <abbr title="You're Beautiful" tabindex="0">attr</abbr>.</p>
    </div>

    <pre><code class="language-html"><?=htmlentities('<p>An abbreviation of the word attribute is <abbr title="You\'re Beautiful" tabindex="0">attr</abbr>.</p>');?></code></pre>

    <h4><span class="text-red">#</span> Addresses</h4>
    <p>Present contact information for the nearest ancestor or the entire body of work.</p>
    <p><code class="solo"><?=htmlentities('<address>');?></code></p>
    <p>Preserve formatting by ending all lines with <code class="solo"><?=htmlentities('<br>');?></code>.</p>

    <div class="docs-example">
        <address>
            <strong>Piment CSS</strong><br>
            1 paradise road<br>
            Fort-de-France, MQ 97200<br>
            <abbr title="Phone">P:</abbr> +596 596 00 00 00
        </address>
        <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
        </address>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<address>
    <strong>Piment CSS</strong><br>
    1 paradise road<br>
    Fort-de-France, MQ 97232<br>
    <abbr title="Phone">P:</abbr> +596 596 00 00 00
</address>
<address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">first.last@example.com</a>
</address>');?></code></pre>

    <h4><span class="text-red">#</span> Blockquotes</h4>
    <p>For quoting blocks of content from another source within your document.</p>

    <h5>Default blockquote</h5>
    <p>Wrap <code class="solo"><?=htmlentities('<blockquote>');?></code> around any HTML as the quote. For straight quotes we recommend a <code class="solo"><?=htmlentities('<p>');?></code>.</p>

    <div class="docs-example">
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        </blockquote>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>');?></code></pre>

    <h5>Blockquote options</h5>
    <p>Style and content changes for simple variations on a standard blockquote.</p>

    <h6>Naming a source</h6>
    <p>Add <code class="solo"><?=htmlentities('<small>');?></code> tag for identifying the source. Wrap the name of the source work in <code class="solo"><?=htmlentities('<cite>');?></code>.
    <div class="docs-example">
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
    </div>

    <h6>Alternate displays</h6>
    <p>Use <code class="solo">.alternative</code> for a floated, right-aligned blockquote.</p>
    <div class="docs-example" style="overflow: hidden;">
        <blockquote class="alternative">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>

    <pre><code class="language-html"><?=htmlentities('<blockquote class="alternative">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>');?></code></pre>


    <h4><span class="text-red">#</span> Lists</h4>
    <h5>Unordered</h5>
    <p>A list of items in which the order does not explicitly matter.</p>

    <div class="docs-example">
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<ul>
  <li>...</li>
</ul>');?></code></pre>

    <h5>Ordered</h5>
    <p>A list of items in which the order does explicitly matter.</p>

    <div class="docs-example">
        <ol>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ol>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<ol>
  <li>...</li>
</ol>');?></code></pre>

    <h5>Unstyled</h5>
    <p>Remove the default <code class="solo">list-style</code> and left padding on list items (immediate children only).</p>

    <div class="docs-example">
        <ul class="unstyled">
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
    </div>


    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<ul class="unstyled">
  <li>...</li>
</ul>');?></code></pre>

    <h5>Inline</h5>
    <p>Place all list items on a single line with <code class="solo">inline-block</code> and some light padding.</p>

    <div class="docs-example">
        <ul class="inline">
            <li>Lorem ipsum</li>
            <li>Phasellus iaculis</li>
            <li>Nulla volutpat</li>
        </ul>
    </div>

    <h4><span class="text-red">#</span> Description</h4>
    <p>A list of terms with their associated descriptions.</p>

    <div class="docs-example">
        <dl>
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<dl>
  <dt>...</dt>
  <dd>...</dd>
</dl>');?></code></pre>

    <h5>Horizontal description</h5>
    <p>Make terms and descriptions in <code class="solo"><?=htmlentities('<dl>');?></code> line up side-by-side.</p>


    <div class="docs-example">
        <dl class="dl-horizontal">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            <dt>Felis euismod semper eget lacinia</dt>
            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
        </dl>
    </div>
    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<dl class="dl-horizontal">
  <dt>...</dt>
  <dd>...</dd>
</dl>');?></code></pre>

    <p><small><span class="badge">Heads up!</span> Horizontal description lists will truncate terms that are too long to fit in the left column fix <code class="solo">text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</small></p>

    <h5>Circle Around</h5>
    <p>Adding a circle around a number can be easily done.</p>

    <div class="docs-example">
        <h3><span class="circle">5</span> Work</h3>
        <p><span class="circle">9</span> items in your basket.</p>
    </div>
    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<h3><span class="circle">5</span> Work</h3>
<p><span class="circle">9</span> items in your basket.</p>');?></code></pre>


    <h5>Tooltip</h5>
    <p>You can change the style of the <code class="solo">title</code> attribute with the <code class="solo">.tooltip</code> class.</p>

    <div class="docs-example">
        <h3><a href="#" class="tooltip">Title line <span>Tooltip showing up when your mouse over the link.</span></a></h3>
    </div>
    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<h3><a href="#" class="tooltip">Title line <span>Tooltip showing up when your mouse over the link.</span></a></h3>');?></code></pre>


</section>