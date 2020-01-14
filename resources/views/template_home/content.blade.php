@include('template_home.head')

<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                @yield('isi')
            </div>
            @include('template_home.sidebar')
        </div>
    </div>
</section>

@include('template_home.footer')