<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form class="law-search-form" id="search-form" action="<?php home_url( '/' ) ?>">
            <div class="input-group">
                <input type="text" value="<?php get_search_query() ?>" name="s" id="s" class="form-control"
                       placeholder="search" aria-describedby="basic-addon2">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="icon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>