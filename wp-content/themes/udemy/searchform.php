<form method="GET" action="<?php echo home_url('/'); ?>" id="searchform" class="searchform">
    <div class="input-group">
        <input type="text" class="input-sm form-control" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search for...">
        <span class="input-group-btn">
            <button class="btn btn-sm btn-primary rippler-default btn-flat with-border">
                <span class="fa fa-search"></span>
            </button>
        </span>
    </div>
</form>