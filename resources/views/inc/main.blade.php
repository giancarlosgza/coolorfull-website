<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col-md-12 text-md-center">
            <h3 class="cd-headline slide text-poppins text-primary font-weight-bold display-5">
                <span>The spectrum of</span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">gradients</b>
                    <b>palettes</b>
                </span>
            </h3>
        </div>
        <div class="offset-md-2 col-md-8 justify-content-center text-center d-none d-sm-block">
            <h5 class="text-spacing">Search a color, a word, or hexadecimal, find resources and tools for
                ui designers and developers.</h5>
        </div>
    </div>
    <div class="row  mb-3 justify-content-center">
        <div class="offset-md-1 col-md-8">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="q" id="query" value="{{ $searchQuery }}"
                        class="form-control search-input" placeholder="🔍 Search something...."
                        aria-label="Search something..." aria-describedby="button-addon2">
                    <div class="input-group-append ml-2">
                        <button class="btn btn-primary btn-sm btn-round my-0" type="submit" id="button-addon2"><i class="material-icons">search</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
