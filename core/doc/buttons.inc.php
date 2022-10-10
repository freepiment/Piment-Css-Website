<section id="buttons" class="scrollspy">
    <h3>Buttons</h3>

    <h4><span class="text-red">#</span> Default buttons</h4>
    <p>Button styles can be applied to anything with the <code class="solo">.btn</code> class applied. However, typically you'll want to apply these to only <code class="solo"><?=htmlentities('<a>');?></code> and <code class="solo"><?=htmlentities('<button>');?></code> elements for the best rendering.</p>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button type="button" class="btn-blue">Blue</button></td>
                <td><code class="solo">btn-blue</code></td>
                <td>First color, you can change it to match our branding.</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-orange">Orange</button></td>
                <td><code class="solo">btn-orange</code></td>
                <td>Second color, you can change it to match our branding.</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-blue-light">Blue Light</button></td>
                <td><code class="solo">btn-blue-light</code></td>
                <td>Blue light button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-black">Black</button></td>
                <td><code class="solo">btn-black</code></td>
                <td>Black button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-white">White</button></td>
                <td><code class="solo">btn-white</code></td>
                <td>White button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-info">Info</button></td>
                <td><code class="solo">btn-info</code></td>
                <td>Info button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-error">Error</button></td>
                <td><code class="solo">btn-error</code></td>
                <td>Error button</td>
            </tr>
        </tbody>
    </table>
    <h5>Outlined buttons</h5>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Button</th>
            <th>class=""</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><button type="button" class="btn-outlined-blue">Blue outlined</button></td>
                <td><code class="solo">btn-outlined-blue</code></td>
                <td>Blue outlined button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-outlined-orange">Orange outlined</button></td>
                <td><code class="solo">btn-outlined-orange</code></td>
                <td>Orange outlined button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-outlined-blue-light">Blue light outlined</button></td>
                <td><code class="solo">btn-outlined-blue-light</code></td>
                <td>Blue light outlined button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-outlined-black">Black outlined</button></td>
                <td><code class="solo">btn-outlined-black</code></td>
                <td>Black outlined button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-outlined-info">Info outlined</button></td>
                <td><code class="solo">btn-outlined-info</code></td>
                <td>Info outlined button</td>
            </tr>
            <tr>
                <td><button type="button" class="btn-outlined-error">Error outlined</button></td>
                <td><code class="solo">btn-outlined-error</code></td>
                <td>Error outlined button</td>
            </tr>
        </tbody>
    </table>
    <h5>Options buttons</h5>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Button</th>
                <th>HTML</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a class="option-blue">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Blue</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-blue">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Option blue</span>
</a>');?></code></pre></td>
                <td>Option blue button</td>
            </tr>
            <tr>
                <td>
                    <a class="option-orange">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Orange</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-orange">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Option orange</span>
</a>');?></code></pre></td>
                <td>Option orange button</td>
            </tr>
            <tr>
                <td>
                    <a class="option-blue-light">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Blue light</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-blue-light">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Blue light</span>
</a>');?></code></pre></td>
                <td>Option blue light button</td>
            </tr>
            <tr>
                <td>
                    <a class="option-black">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Black</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-black">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Option black</span>
</a>');?></code></pre></td>
                <td>Option black button</td>
            </tr>
            <tr>
                <td>
                    <a class="option-info">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Info</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-info">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Option info</span>
</a>');?></code></pre></td>
                <td>Option info button</td>
            </tr>
            <tr>
                <td>
                    <a class="option-error">
                        <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
                        <span class="button-text">Error</span>
                    </a>
                </td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<a class="option-error">
    <span class="circle" aria-hidden="true"><span class="icon arrow"></span></span>
    <span class="button-text">Option error</span>
</a>');?></code></pre></td>
                <td>Option error button</td>
            </tr>
        </tbody>
    </table>
    <h5>Action buttons</h5>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Button</th>
            <th>HTML</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="action-blue"><span>Action blue</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-blue"><span>Action blue</span></button>');?></code></pre></td>
                <td>Action blue button</td>
            </tr>
            <tr>
                <td><button class="action-orange"><span>Action orange</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-orange"><span>Action orange</span></button>');?></code></pre></td>
                <td>Action orange button</td>
            </tr>
            <tr>
                <td><button class="action-blue-light"><span>Action blue light</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-blue-light"><span>Action blue light</span></button>');?></code></pre></td>
                <td>Action blue light button</td>
            </tr>
            <tr>
                <td><button class="action-info"><span>Action info</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-info"><span>Action info</span></button>');?></code></pre></td>
                <td>Action info button</td>
            </tr>
            <tr>
                <td><button class="action-black"><span>Action black</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-black"><span>Action black</span></button>');?></code></pre></td>
                <td>Action black button</td>
            </tr>
            <tr>
                <td><button class="action-white"><span>Action white</span></button></td>
                <td><pre class="line-numbers"><code class="language-html"><?=htmlentities('<button class="action-white"><span>Action white</span></button>');?></code></pre></td>
                <td>Action white button</td>
            </tr>
        </tbody>
    </table>

</section>

