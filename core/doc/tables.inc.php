<section id="tables" class="scrollspy mt-2">
    <h3>Tables</h3>

    <h4><span class="text-red">#</span> Default styles</h4>
    <p>For basic styling—light padding and only horizontal dividers—add the base class <code class="solo">.table</code> to any <code class="solo"><?=htmlentities('<table>');?></code>.</p>

    <div class="docs-example">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<table class="table">
  …
</table>');?></code></pre>

    <h5>Optional classes</h5>
    <p>Add any of the following classes to the <code class="solo">.table</code> base class.</p>
    <p><code class="solo">.table-striped</code></p>
    <p>Adds zebra-striping to any table row within the <code class="solo"><tbody></code> via the :nth-child CSS selector (not available in IE7-8).</p>

    <div class="docs-example">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<table class="table table-striped">
  …
</table>');?></code></pre>

    <p class="mt-2"><code class="solo">.table-bordered</code></p>
    <p>Add borders and rounded corners to the table.</p>

    <div class="docs-example">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td rowspan="2">1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@getbootstrap</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<table class="table table-bordered">
  …
</table>');?></code></pre>


    <p class="mt-2"><code class="solo">.table-hover</code></p>
    <p>Enable a hover state on table rows within a <code class="solo"><tbody></code>.</p>

    <div class="docs-example">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<table class="table table-hover">
  …
</table>');?></code></pre>


    <p class="mt-2"><code class="solo">.table-condensed</code></p>
    <p>Makes tables more compact by cutting cell padding in half.</p>

    <div class="docs-example">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>


    <h5>Supported table markup</h5>
    <p>List of supported table HTML elements and how they should be used.</p>

    <table class="table table-bordered table-striped" style="background-color: white">
        <colgroup>
            <col class="span1">
            <col class="span7">
        </colgroup>
        <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <code class="solo">&lt;table&gt;</code>
            </td>
            <td>
                Wrapping element for displaying data in a tabular format
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;thead&gt;</code>
            </td>
            <td>
                Container element for table header rows (<code class="solo">&lt;tr&gt;</code>) to label table columns
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;tbody&gt;</code>
            </td>
            <td>
                Container element for table rows (<code class="solo">&lt;tr&gt;</code>) in the body of the table
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;tr&gt;</code>
            </td>
            <td>
                Container element for a set of table cells (<code class="solo">&lt;td&gt;</code> or <code class="solo">&lt;th&gt;</code>) that appears on a single row
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;td&gt;</code>
            </td>
            <td>
                Default table cell
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;th&gt;</code>
            </td>
            <td>
                Special table cell for column (or row, depending on scope and placement) labels
            </td>
        </tr>
        <tr>
            <td>
                <code class="solo">&lt;caption&gt;</code>
            </td>
            <td>
                Description or summary of what the table holds, especially useful for screen readers
            </td>
        </tr>
        </tbody>
    </table>

    <pre class="line-numbers"><code class="language-html"><?=htmlentities('<table>
    <caption>...</caption>
    <thead>
        <tr>
            <th>...</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
  </tbody>
</table>');?></code></pre>

</section>