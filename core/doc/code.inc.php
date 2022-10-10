<section id="code" class="scrollspy mt-2">
    <h3>Code</h3>

    <h5>Inline</h5>
    <p>Wrap inline snippets of code with <code class="solo"><?=htmlentities('<code>');?></code>.</p>

    <div class="docs-example">
        For example, <code class="solo">&lt;section&gt;</code> should be wrapped as inline.
    </div>

    <pre><code class="language-html"><?=htmlentities('For example, <code>&lt;section&gt;</code> should be wrapped as inline.');?></code></pre>


    <h5>Basic block</h5>
    <p>Use <code class="solo"><?=htmlentities('<pre>');?></code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>

    <div class="docs-example">
        <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<pre>
  &lt;p&gt;Sample text here...&lt;/p&gt;
</pre>');?></code></pre>

    <p><small><span class="badge">Heads up!</span> Be sure to keep code within <code class="solo"><?=htmlentities('<pre>');?></code> tags as close to the left as possible; it will render all tabs.
    <br>You may optionally add the <code class="solo">.pre-scrollable</code> class which will set a max-height of 350px and provide a y-axis scrollbar.</small></p>


    <h5>Add margin to a single side</h5>
    <p>Control the margin on one side of an element using the m{t|r|b|l}-{size} utilities.</p>

    <p>For example, <code class="solo">mt-1</code> would add <code class="solo">1em</code> of margin to the top of an element, <code class="solo">mr-4</code> would add 8em of margin to the right of an element, <code class="solo">mb-2</code> would add 2rem of margin to the bottom of an element, and ml-2 would add 0.5rem of margin to the left of an element.</p>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<div class="mt-1 ...">mt-1</div>
<div class="mr-4 ...">mr-4</div>
<div class="mb-2 ...">mb-2</div>
<div class="ml-3 ...">ml-3</div>');?></code></pre>

    <h5>Add horizontal margin</h5>
    <p>Control the horizontal margin of an element using the mx-{size} utilities.</p>



</section>

