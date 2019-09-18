<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col-md-12 text-center">
            <h1 class="text-montserrat text-indigo display-5">A lot of gradients and palettes!</h1>
        </div>
        <div class="offset-md-2 col-md-8 justify-content-center text-center d-none d-sm-block">
            <h3 class="text-body text-spacing">Search for a color, a word, or hexadecimal, find resources and tools for
                ui designers and developers.</h3>
        </div>
    </div>
    <div class="row  mb-3 justify-content-center">
        <div class="offset-md-1 col-md-8">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="q" id="query" value="{{ $searchQuery }}"
                        class="form-control shadow-medium no-border search-input" placeholder="🔍 Search something...."
                        aria-label="Search something..." aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary shadow-medium" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
