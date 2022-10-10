<section id="spacing" class="scrollspy mt-2">
    <h3>Spacing</h3>


    <h5>Padding</h5>
    <p>Utilities for controlling an element's padding.</p>

    <div style="max-height: 24rem;overflow: auto" class="scroll">
        <table class="table table-condensed" style="padding: 1em">
            <thead>
            <tr>
                <th>Class</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>p-0</td>
                <td>padding: 0px;</td>
            </tr>
            <tr>
                <td>px-0</td>
                <td>padding-left: 0px; padding-right: 0px;</td>
            </tr>
            <tr>
                <td>py-0</td>
                <td>padding-top: 0px; padding-bottom: 0px;</td>
            </tr>
            <tr>
                <td>pt-0</td>
                <td>padding-top: 0px;</td>
            </tr>
            <tr>
                <td>pr-0</td>
                <td>padding-right: 0px;</td>
            </tr>
            <tr>
                <td>pb-0</td>
                <td>padding-bottom: 0px;</td>
            </tr>
            <tr>
                <td>pl-0</td>
                <td>padding-left: 0px;</td>
            </tr>
            <tr>
                <td>p-1</td>
                <td>padding: 1em;</td>
            </tr>
            <tr>
                <td>px-1</td>
                <td>padding-left: 1em; padding-right: 1em;</td>
            </tr>
            <tr>
                <td>py-1</td>
                <td>padding-top: 1em; padding-bottom: 1em;</td>
            </tr>
            <tr>
                <td>pt-1</td>
                <td>padding-top: 1em;</td>
            </tr>
            <tr>
                <td>pr-1</td>
                <td>padding-right: 1rem;</td>
            </tr>
            <tr>
                <td>pb-1</td>
                <td>padding-bottom: 1em;</td>
            </tr>
            <tr>
                <td>pl-1</td>
                <td>padding-left: 1em;</td>
            </tr>
            <tr>
                <td>p-2</td>
                <td>padding: 2em;</td>
            </tr>
            <tr>
                <td>px-2</td>
                <td>padding-left: 2em; padding-right: 2em;</td>
            </tr>
            <tr>
                <td>py-2</td>
                <td>padding-top: 2em; padding-bottom: 2em;</td>
            </tr>
            <tr>
                <td>pt-2</td>
                <td>padding-top: 2em;</td>
            </tr>
            <tr>
                <td>pr-2</td>
                <td>padding-right: 2em;</td>
            </tr>
            <tr>
                <td>pb-2</td>
                <td>padding-bottom: 2em;</td>
            </tr>
            <tr>
                <td>pl-2</td>
                <td>padding-left: 2em;</td>
            </tr>
            <tr>
                <td>p-3</td>
                <td>padding: 4em;</td>
            </tr>
            <tr>
                <td>px-3</td>
                <td>padding-left: 4em; padding-right: 4rem;</td>
            </tr>
            <tr>
                <td>py-3</td>
                <td>padding-top: 4em; padding-bottom: 4em;</td>
            </tr>
            <tr>
                <td>pt-3</td>
                <td>padding-top: 4em;</td>
            </tr>
            <tr>
                <td>pr-3</td>
                <td>padding-right: 4em;</td>
            </tr>
            <tr>
                <td>pb-3</td>
                <td>padding-bottom: 4em;</td>
            </tr>
            <tr>
                <td>pl-3</td>
                <td>padding-left: 4em;</td>
            </tr>
            <tr>
                <td>p-4</td>
                <td>padding: 6rem;</td>
            </tr>
            <tr>
                <td>px-4</td>
                <td>padding-left: 6em; padding-right: 6em;</td>
            </tr>
            <tr>
                <td>py-4</td>
                <td>padding-top: 6em; padding-bottom: 6em;</td>
            </tr>
            <tr>
                <td>pt-4</td>
                <td>padding-top: 6em;</td>
            </tr>
            <tr>
                <td>pr-4</td>
                <td>padding-right: 6em;</td>
            </tr>
            <tr>
                <td>pb-4</td>
                <td>padding-bottom: 6em;</td>
            </tr>
            <tr>
                <td>pl-4</td>
                <td>padding-left: 6em;</td>
            </tr>
            <tr>
                <td>p-5</td>
                <td>padding: 8em;</td>
            </tr>
            <tr>
                <td>px-5</td>
                <td>padding-left: 8em; padding-right: 8em;</td>
            </tr>
            <tr>
                <td>py-5</td>
                <td>padding-top: 8em; padding-bottom: 8em;</td>
            </tr>
            <tr>
                <td>pt-5</td>
                <td>padding-top: 8em;</td>
            </tr>
            <tr>
                <td>pr-5</td>
                <td>padding-right: 8em;</td>
            </tr>
            <tr>
                <td>pb-5</td>
                <td>padding-bottom: 8em;</td>
            </tr>
            <tr>
                <td>pl-5</td>
                <td>padding-left: 8em;</td>
            </tr>
            </tbody>
        </table>
    </div>


    <h5>Add padding to a single side</h5>
    <p>Control the padding on one side of an element using the <code class="solo">p{t|r|b|l}-{size}</code> utilities.</p>

    <p>For example, <code class="solo">pt-3</code> would add 4em of padding to the top of an element, <code class="solo">pr-2</code> would add 2em of padding to the right of an element, <code class="solo">pb-1</code> would add 1em of padding to the bottom of an element.</p>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<div class="pt-3 ...">pt-3</div>
<div class="pr-2 ...">pr-2</div>
<div class="pb-1 ...">pb-1</div>');?></code></pre>


    <h5>Add horizontal padding</h5>
    <p>Control the horizontal padding of an element using the px-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="px-4 ...">px-4</div>');?></code></pre>

    <h5>Add vertical padding</h5>
    <p>Control the vertical padding of an element using the py-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="py-2 ...">px-2</div>');?></code></pre>


    <h5>Add padding to all sides</h5>
    <p>Control the padding on all sides of an element using the p-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="p-3 ...">p-3</div>');?></code></pre>


    <h4>Margin</h4>
    <p>Utilities for controlling an element's margin.</p>

    <div style="max-height: 24rem;overflow: auto" class="scroll">
        <table class="table table-condensed" style="padding: 1em">
            <thead>
            <tr>
                <th>Class</th>
                <th>Properties</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>m-0</td>
                <td>margin: 0px;</td>
            </tr>
            <tr>
                <td>mx-0</td>
                <td>margin-left: 0px; margin-right: 0px;</td>
            </tr>
            <tr>
                <td>my-0</td>
                <td>margin-top: 0px; margin-bottom: 0px;</td>
            </tr>
            <tr>
                <td>mt-0</td>
                <td>margin-top: 0px;</td>
            </tr>
            <tr>
                <td>mr-0</td>
                <td>margin-right: 0px;</td>
            </tr>
            <tr>
                <td>mb-0</td>
                <td>margin-bottom: 0px;</td>
            </tr>
            <tr>
                <td>ml-0</td>
                <td>margin-left: 0px;</td>
            </tr>
            <tr>
                <td>m-1</td>
                <td>margin: 1em;</td>
            </tr>
            <tr>
                <td>mx-1</td>
                <td>margin-left: 1em; margin-right: 1em;</td>
            </tr>
            <tr>
                <td>my-1</td>
                <td>margin-top: 1em; margin-bottom: 1em;</td>
            </tr>
            <tr>
                <td>mt-1</td>
                <td>margin-top: 1em;</td>
            </tr>
            <tr>
                <td>mr-1</td>
                <td>margin-right: 1rem;</td>
            </tr>
            <tr>
                <td>mb-1</td>
                <td>margin-bottom: 1em;</td>
            </tr>
            <tr>
                <td>ml-1</td>
                <td>margin-left: 1em;</td>
            </tr>
            <tr>
                <td>m-2</td>
                <td>margin: 2em;</td>
            </tr>
            <tr>
                <td>mx-2</td>
                <td>margin-left: 2em; margin-right: 2em;</td>
            </tr>
            <tr>
                <td>my-2</td>
                <td>margin-top: 2em; margin-bottom: 2em;</td>
            </tr>
            <tr>
                <td>mt-2</td>
                <td>margin-top: 2em;</td>
            </tr>
            <tr>
                <td>mr-2</td>
                <td>margin-right: 2em;</td>
            </tr>
            <tr>
                <td>mb-2</td>
                <td>margin-bottom: 2em;</td>
            </tr>
            <tr>
                <td>ml-2</td>
                <td>margin-left: 2em;</td>
            </tr>
            <tr>
                <td>m-3</td>
                <td>margin: 4em;</td>
            </tr>
            <tr>
                <td>mx-3</td>
                <td>margin-left: 4em; margin-right: 4rem;</td>
            </tr>
            <tr>
                <td>my-3</td>
                <td>margin-top: 4em; margin-bottom: 4em;</td>
            </tr>
            <tr>
                <td>mt-3</td>
                <td>margin-top: 4em;</td>
            </tr>
            <tr>
                <td>mr-3</td>
                <td>margin-right: 4em;</td>
            </tr>
            <tr>
                <td>mb-3</td>
                <td>margin-bottom: 4em;</td>
            </tr>
            <tr>
                <td>ml-3</td>
                <td>margin-left: 4em;</td>
            </tr>
            <tr>
                <td>m-4</td>
                <td>margin: 6rem;</td>
            </tr>
            <tr>
                <td>mx-4</td>
                <td>margin-left: 6em; margin-right: 6em;</td>
            </tr>
            <tr>
                <td>my-4</td>
                <td>margin-top: 6em; margin-bottom: 6em;</td>
            </tr>
            <tr>
                <td>mt-4</td>
                <td>margin-top: 6em;</td>
            </tr>
            <tr>
                <td>mr-4</td>
                <td>margin-right: 6em;</td>
            </tr>
            <tr>
                <td>mb-4</td>
                <td>margin-bottom: 6em;</td>
            </tr>
            <tr>
                <td>ml-4</td>
                <td>margin-left: 6em;</td>
            </tr>
            <tr>
                <td>m-5</td>
                <td>margin: 8em;</td>
            </tr>
            <tr>
                <td>mx-5</td>
                <td>margin-left: 8em; margin-right: 8em;</td>
            </tr>
            <tr>
                <td>my-5</td>
                <td>margin-top: 8em; margin-bottom: 8em;</td>
            </tr>
            <tr>
                <td>mt-5</td>
                <td>margin-top: 8em;</td>
            </tr>
            <tr>
                <td>mr-5</td>
                <td>margin-right: 8em;</td>
            </tr>
            <tr>
                <td>mb-5</td>
                <td>margin-bottom: 8em;</td>
            </tr>
            <tr>
                <td>ml-5</td>
                <td>margin-left: 8em;</td>
            </tr>
            </tbody>
        </table>
    </div>

    <h5>Add margin to a single side</h5>
    <p>Control the margin on one side of an element using the <code class="solo">m{t|r|b|l}-{size}</code> utilities.</p>

    <p>For example, <code class="solo">mt-5</code> would add 8em of margin to the top of an element, <code class="solo">mr-4</code> would add 6eem of margin to the right of an element, <code class="solo">mb-1</code> would add 1rem of margin to the bottom of an element, and <code class="solo">ml-2</code> would add 2em of margin to the left of an element.</p>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<div class="mt-5 ...">mt-5</div>
<div class="mr-4 ...">mr-4</div>
<div class="mb-1 ...">mb-1</div>
<div class="ml-2 ...">ml-2</div>');?></code></pre>


    <h5>Add horizontal margin</h5>
    <p>Control the horizontal margin of an element using the mx-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="mx-1 ...">mx-1</div>');?></code></pre>

    <h5>Add vertical margin</h5>
    <p>Control the vertical margin of an element using the my-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="my-1 ...">my-1</div>');?></code></pre>

    <h5>Add margin to all sides</h5>
    <p>Control the margin on all sides of an element using the m-{size} utilities.</p>
    <pre><code class="language-html"><?=htmlentities('<div class="m-2 ...">m-2</div>');?></code></pre>




</section>