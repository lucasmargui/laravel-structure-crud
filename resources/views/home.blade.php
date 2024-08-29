@extends('layouts.main')

@section('title', 'Home')

@section('content')

<style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
        height: 100vh;
    }

        .carousel-item:nth-child(1) {
            background-image: url('https://fastly.picsum.photos/id/42/3456/2304.jpg?hmac=dhQvd1Qp19zg26MEwYMnfz34eLnGv8meGk_lFNAJR3g');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://fastly.picsum.photos/id/52/1280/853.jpg?hmac=FBJ023QL6SsJpbQl8B20ExSey3BjyRH1MOw7Uo7fIMU');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://fastly.picsum.photos/id/229/2300/1533.jpg?hmac=0alSxMqKzGIx2JfShOVlM5m_IbyyA2hxDpLZ9z7_rq4');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
</style>
<!-- Carousel wrapper -->
<div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-carousel-init>
    <!-- Indicators -->
    <div class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center" data-mdb-theme="dark">
                        <h1 class="mb-3">Lorem Ipsum</h1>
                        <h5 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                        <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                            role="button" rel="nofollow" target="_blank">Getting Start</a>
                        <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="https://mdbootstrap.com/docs/standard/"
                            target="_blank" role="button">More Info</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white text-center">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique, sem et blandit gravida, eros magna accumsan mi, id pulvinar metus odio volutpat quam. Mauris faucibus dapibus justo, id iaculis tortor fringilla ut. Nulla facilisi. Donec at convallis lacus. Nam fringilla ante vitae nunc facilisis, id pulvinar libero vulputate. Duis quis venenatis felis. Nunc lacus quam, gravida nec aliquam sed, condimentum at nisi. Praesent interdum tempus urna, non porttitor augue. Suspendisse eu lacus non lorem pharetra vulputate vel in leo. In et elit augue. Sed urna sem, accumsan malesuada pulvinar posuere, finibus ut enim. Sed sagittis magna libero, sed consectetur lectus accumsan et.</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="mask" style="background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
            );
                    ">
                <div class="d-flex justify-content-center align-items-center h-100" data-mdb-theme="dark">
                    <div class="text-white text-center">
                        <h2>And cover it with any mask</h2>
                        <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init
                            href="" target="_blank" role="button">
                            Learn
                            about masks
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner -->
    <!-- Controls -->
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel wrapper -->

<!--Main Navigation-->
<!--Main layout-->
<main class="mt-5">
    <div class="container">
        <!--Section: Content-->
        <section>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                    <h4><strong>Facilis consequatur eligendi</strong></h4>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                        eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                        sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                    </p>
                    <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                        nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                        alias, unde optio accusantium soluta, iusto molestiae adipisci et?
                    </p>
                </div>
            </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Item 1</h5>
                            <p class="card-text">
                                <strong>Material:</strong> Wood<br>
                                <strong>Price:</strong> $199.99<br>
                                <strong>Description:</strong> High-quality wooden table with a sleek design.
                            </p>
                            <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Item 2</h5>
                            <p class="card-text">
                                <strong>Material:</strong> Metal<br>
                                <strong>Price:</strong> $299.99<br>
                                <strong>Description:</strong> Durable metal chair with ergonomic design and adjustable features.
                            </p>
                            <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Item 3</h5>
                            <p class="card-text">
                                <strong>Material:</strong> Glass<br>
                                <strong>Price:</strong> $149.99<br>
                                <strong>Description:</strong> Elegant glass vase, perfect for adding a touch of sophistication.
                            </p>
                            <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="mb-5">
            <h4 class="mb-5 text-center"><strong>Facilis consequatur eligendi</strong></h4>

            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="form3Example1" class="form-control" />
                                    <label class="form-label" for="form3Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="form3Example2" class="form-control" />
                                    <label class="form-label" for="form3Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="email" id="form3Example3" class="form-control" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4" data-mdb-input-init>
                            <input type="password" id="form3Example4" class="form-control" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
                            <label class="form-check-label" for="form2Example3">
                                Subscribe to our newsletter
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                            Sign up
                        </button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1" data-mdb-ripple-init>
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Section: Content-->
    </div>
</main>
<!--Main layout-->
<!--Footer-->
<footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
        <a role="button" class="btn btn-primary btn-lg m-2" data-mdb-ripple-init
           href="#" rel="nofollow" target="_blank">
            Link 1
        </a>
        <a role="button" class="btn btn-primary btn-lg m-2" data-mdb-ripple-init href="https://#.com/docs/standard/" target="_blank">
            Link 2
        </a>
    </div>

    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">
        <p>Follow on social media</p>
        <a href="" class="btn btn-primary m-1" role="button" data-mdb-ripple-init
           rel="nofollow" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
           target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
           target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
           target="_blank">
            <i class="fab fa-github"></i>
        </a>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
  
    </div>
    <!-- Copyright -->
</footer>
@endsection