<section id="forms" class="scrollspy mt-2">
    <h3>Forms</h3>


    <h4><span class="text-red">#</span> Default styles</h4>
    <p>Individual form controls receive styling, but without any required base class on the <code class="solo"><?=htmlentities('<form>');?></code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.</p>

    <form class="docs-example form">
        <fieldset>
            <legend>Legend</legend>


            <div class="wrap validate-input" data-validate="Name is required">
                <span class="label">Label Name</span>
                <input class="input" type="text" name="name" tabindex="1" placeholder="Name..." autocomplete="new-name">
                <span class="focus-input"></span>
            </div>

            <span class="text-muted">Example block-level help text here.</span>

            <label class="checkbox">
                <input type="checkbox"> Check me out
            </label>

            <div class="wrap">
                <button type="submit" class="action-black">Submit</button>
            </div>
        </fieldset>
    </form>



</section>
