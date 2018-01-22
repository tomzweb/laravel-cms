
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost/laravel-cms/public/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                        @foreach ($post_types as $type)
                                <a class="nav-item nav-link" href="{!! url("/".$type->slug) !!}">{{ $type->name }}</a>
                        @endforeach
                </div>
        </div>
</nav>