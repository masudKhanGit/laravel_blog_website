<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')
</head>

<body>
    <!-- header -->
    @include('frontend.includes.nav')
    <!-- header -->

    <!-- Banner Starts Here -->
    @yield('banner')
    <!-- Banner Ends Here -->

    <!-- Main Body -->
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('frontend.includes.sidebar')
            </div>
        </div>
    </section>
    <!-- Main Body -->

    <!-- Footer -->
    @include('frontend.includes.footer')
    <!-- Footer -->
    
    <!-- Scripts -->
    @include('frontend.includes.scripts')
    <!-- Scripts -->
    
</body>

</html>
