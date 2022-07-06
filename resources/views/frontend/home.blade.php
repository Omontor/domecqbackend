@extends('layouts.frontend')

@section('content')



            <!-- Card Overlay Carousel -->
            <div class="carousel-single splide mt-2 mb-4">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                    @forelse($posts as $post)

                        <li class="splide__slide">
                            <a href="blog-post.html" class="card card-overlay text-white">
                                <img src="{{$post->thumb_image->getUrl()}}" class="card-img img-fluid" alt="image">
                                <div class="card-img-overlay">

                                    <div class="content">
                                        <h1>{{$post->title}}</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="/template/assets/img/sample/avatar3.jpg" alt="avatar">
                                                Domecq
                                            </div>
                                            <div class="date">
                                                {{$post->created_at->diffForHumans()}}
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                       @empty
                       @endforelse
                    </ul>
                </div>
            </div>
            <!-- * Card Overlay Carousel -->

            <!-- Post Carousel -->
            <div class="sectionTitle mb-2 mt-4">
                <div class="text-muted">NEWS</div>
                <div class="title">
                    <h1>Today</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <div class="carousel-multiple postCarousel splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="/template/assets/img/sample/photo13.jpg" alt="image" class="image">
                                <h2 class="title">Can you spot the difference in this scene</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="/template/assets/img/sample/photo2.jpg" alt="image" class="image">
                                <h2 class="title">20 Presents That Actually Won't Get Re-Gifted</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="/template/assets/img/sample/photo3.jpg" alt="image" class="image">
                                <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="/template/assets/img/sample/photo4.jpg" alt="image" class="image">
                                <h2 class="title">Best Selling Furniture of This Year</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="/template/assets/img/sample/photo12.jpg" alt="image" class="image">
                                <h2 class="title">What is the best gift to buy for your husband?</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                    </ul>
                </div>
            </div>
            <!-- * Post Carousel -->


            <div class="divider mt-4 mb-2"></div>


            <!-- Button Carousel -->
            <div class="carousel-small splide buttonCarousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product1.jpg" alt="image">
                                </div>
                                <strong>Headphones</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product2.jpg" alt="image">
                                </div>
                                <strong>Furniture</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product3.jpg" alt="image">
                                </div>
                                <strong>Watch</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product4.jpg" alt="image">
                                </div>
                                <strong>Camera</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product5.jpg" alt="image">
                                </div>
                                <strong>Computer</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product6.jpg" alt="image">
                                </div>
                                <strong>Fruits</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="/template/assets/img/sample/product7.jpg" alt="image">
                                </div>
                                <strong>Pencil</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                    </ul>
                </div>
            </div>
            <!-- * Button Carousel -->


            <div class="divider mt-2 mb-4"></div>

            <div class="sectionTitle mb-2">
                <div class="text-muted">Overview</div>
                <div class="title">
                    <h1>Products</h1>
                    <a href="blog-category.html">View All</a>
                </div>
                <div class="lead">
                    Bitter is using modern design style. Simple and elegant design lines.
                </div>
            </div>

            <!-- item list -->
            <div class="itemList">
                <div class="item">
                    <div class="image">
                        <img src="/template/assets/img/sample/photo14.jpg" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Pinky Glasses</h4>
                        <div class="text-muted">Simple and elegant design line and has stunning looks</div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="/template/assets/img/sample/photo13.jpg" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Yellowish Headphone</h4>
                        <div class="text-muted">Perfect spacing and perfect color sheme.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="/template/assets/img/sample/photo4.jpg" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Hybrid</h4>
                        <div class="text-muted">Just what you need for perfect hybrid app design.</div>
                    </div>
                </div>
            </div>
            <!-- * item list -->

            <div class="divider mt-4 mb-4"></div>

            <div class="sectionTitle mb-2">
                <div class="text-muted">Lastest</div>
                <div class="title">
                    <h1>Blogs</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <!-- post list -->
            <div class="row">
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="/template/assets/img/sample/photo11.jpg" alt="image" class="image">
                            <div class="badge badge-warning">SPORT</div>
                        </div>
                        <h2 class="title">Juxon praises Peri’s resilience after testing week</h2>
                        <footer>
                            <img src="/template/assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                            25 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="/template/assets/img/sample/photo8.jpg" alt="image" class="image">
                            <div class="badge badge-success">TRAVEL</div>
                        </div>
                        <h2 class="title">Top 10 Travel Bloggers You Should Follow</h2>
                        <footer>
                            <img src="/template/assets/img/sample/avatar2.jpg" alt="avatar" class="avatar">
                            21 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="/template/assets/img/sample/photo3.jpg" alt="image" class="image">
                            <div class="badge badge-danger">FOODS</div>
                        </div>
                        <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                        <footer>
                            <img src="/template/assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                            15 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="/template/assets/img/sample/photo4.jpg" alt="image" class="image">
                            <div class="badge badge-info">HEALTH</div>
                        </div>
                        <h2 class="title">Check the Best Selling Furniture of This Year</h2>
                        <footer>
                            <img src="/template/assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                            12 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
            </div>
            <!-- * post list -->

            <div class="divider mt-2 mb-4"></div>

            <!-- Iconed Box -->
            <div class="row">
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-primary">
                            <i class="icon ion-ios-apps"></i>
                        </div>
                        <h4 class="title">Components</h4>
                        Use the lastest easy to use components.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-danger">
                            <i class="icon ion-ios-cut"></i>
                        </div>
                        <h4 class="title">UX Based</h4>
                        We designed Bitter UX based, simple and clean.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-success">
                            <i class="icon ion-ios-folder-open"></i>
                        </div>
                        <h4 class="title">Well Documented</h4>
                        With Bitter you can easily build and edit the theme.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-info">
                            <i class="icon ion-ios-thumbs-up"></i>
                        </div>
                        <h4 class="title">Ready to build</h4>
                        Does not require long installation.
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- * Iconed Boxes -->

            <div class="divider mt-2 mb-4"></div>

            <div class="sectionTitle mb-1">
                <div class="text-muted">Most Popular</div>
                <div class="title">
                    <h1>Profiles</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <!-- listview -->
            <div class="listView detailed">
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Carmen Beltrán</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                New York City
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar2.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Furmaan Bharyar</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                London
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar3.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Kari Granleese</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Paris
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar4.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Jurriaan van der Broek</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Kiew
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar5.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Homayoun Shakibaii</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Monterrey
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar6.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Stephanus Huggins</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Oslo
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar7.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Adhraaa Al Azimi</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Florence
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="/template/assets/img/sample/avatar8.jpg" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Malin Quist</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Tokyo
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- * listview -->


@endsection