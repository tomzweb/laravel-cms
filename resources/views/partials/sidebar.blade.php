@yield('sidebar')

<h2>Blog</h2>

@include('partials.list', ['posts' => $news])

<h2>Pages</h2>

@include('partials.list', ['posts' => $pages])


