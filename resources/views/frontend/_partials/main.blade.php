@include('frontend._partials.header')

@include('frontend._partials.sidemenu')
@include('frontend._partials.mobile-menu')

@include('frontend._partials.menu')


@yield('main-content')



@include('frontend._partials.footer')
