@extends('layouts.app')

@section('content')
    {{-- carousel --}}
    <section id="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item bg-secondary active" style="min-height: 350px">
                    <div class="carousel-caption text-start d-block mb-5">
                        <h3>Example Headline</h3>
                        <p>Some representative placeholder content for the first slide.</p>
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
                <div class="carousel-item bg-secondary" style="min-height: 350px">
                    <div class="carousel-caption text-start d-block mb-5">
                        <h3>Second Headline</h3>
                        <p>Some representative placeholder content for the first slide.</p>
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
                <div class="carousel-item bg-secondary" style="min-height: 350px">
                    <div class="carousel-caption text-start d-block mb-5">
                        <h3>Third Headline</h3>
                        <p>Some representative placeholder content for the first slide.</p>
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- /carousel --}}


    <div class="container">
        {{-- gallery --}}
        <section id="gallery">
            <div class="row py-5">
                <div class="col-md-4 mb-5 text-center">
                    <div class="rounded-circle d-block bg-secondary" style="height: 13rem; width: 13rem;margin: auto;">
                    </div>
                    <h1 class="mt-3">Heading</h1>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vero cumque explicabo, dolores
                        quisquam voluptatem ducimus fuga sint repudiandae atque.</span>
                    <br>
                    <buttont class="btn btn-secondary mt-3">View Detail</buttont>
                </div>
                <div class="col-md-4 mb-5 text-center">
                    <div class="rounded-circle d-block bg-secondary" style="height: 13rem; width: 13rem;margin: auto;">
                    </div>
                    <h1 class="mt-3">Heading</h1>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vero cumque explicabo, dolores
                        quisquam voluptatem ducimus fuga sint repudiandae atque.</span>
                    <br>
                    <buttont class="btn btn-secondary mt-3">View Detail</buttont>
                </div>
                <div class="col-md-4 mb-5 text-center">
                    <div class="rounded-circle d-block bg-secondary" style="height: 13rem; width: 13rem;margin: auto;">
                    </div>
                    <h1 class="mt-3">Heading</h1>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vero cumque explicabo, dolores
                        quisquam voluptatem ducimus fuga sint repudiandae atque.</span>
                    <br>
                    <buttont class="btn btn-secondary mt-3">View Detail</buttont>
                </div>
            </div>
        </section>
        {{-- /gallery --}}

        <hr class="my-5">

        <section id="about">
            <div class="row py-5 row-reverse">
                <div class="col-md-6 h-full d-flex align-items-center order-2 order-md-1 mt-5 mt-md-0">
                    <div class="d-block">
                        <h1 style="font-weight: normal"><strong>First Converse Chunk Taylor 90s</strong> it'll blow your
                            mind
                        </h1>
                        <span>
                            We're bringing our 1970 heritage design forward with premium comfort,<br>durability and
                            fit.
                        </span>
                        <br>
                        <button class="btn btn-primary mt-4">Discover More</button>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <img src="{{ asset('img/converse.jpg') }}" alt="converse" class="w-full h-full img-fluid">
                </div>
            </div>
        </section>

        <hr class="my-5">

        <section id="products">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2>Our Products</h2>
                </div>
            </div>
            <div class="row my-3">
                @foreach ($products as $product)
                    <div class="col-12 col-md-3 mb-4 h-100">
                        <div class="d-block">
                            <a href="" style="text-decoration: none;color: inherit;">
                                <img src="{{ asset('img/products/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="img-fluid">
                                <div class="mt-2">
                                    <h6>{{ $product->name }}</h6>
                                    <span>Rp. {{ $product->price }}</span><br>
                                    <small>{{ $product->type }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <hr class="my-5">

        <section id="rate">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Contact US</h1>
                </div>
            </div>
            <form action="" id="frmSbmt">
                <div class="row mx-5 mt-5">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required />
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required />
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="cfm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cfm-password" required />
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="w-100 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </div>


    <footer class="w-100 bg-dark mt-5 px-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-5">Contact Me</h1>
                    <hr />
                </div>
                <div class="col-12" style="padding: 5rem">
                    <div class="row">
                        <div class="col-lg-4 col-4 col-md-6 d-flex justify-content-center items-center">
                            <svg fill="#FFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px"
                                viewBox="0 0 30.667 30.667" xml:space="preserve">
                                <g>
                                    <path d="M30.667,14.939c0,8.25-6.74,14.938-15.056,14.938c-2.639,0-5.118-0.675-7.276-1.857L0,30.667l2.717-8.017
                   c-1.37-2.25-2.159-4.892-2.159-7.712C0.559,6.688,7.297,0,15.613,0C23.928,0.002,30.667,6.689,30.667,14.939z M15.61,2.382
                   c-6.979,0-12.656,5.634-12.656,12.56c0,2.748,0.896,5.292,2.411,7.362l-1.58,4.663l4.862-1.545c2,1.312,4.393,2.076,6.963,2.076
                   c6.979,0,12.658-5.633,12.658-12.559C28.27,8.016,22.59,2.382,15.61,2.382z M23.214,18.38c-0.094-0.151-0.34-0.243-0.708-0.427
                   c-0.367-0.184-2.184-1.069-2.521-1.189c-0.34-0.123-0.586-0.185-0.832,0.182c-0.243,0.367-0.951,1.191-1.168,1.437
                   c-0.215,0.245-0.43,0.276-0.799,0.095c-0.369-0.186-1.559-0.57-2.969-1.817c-1.097-0.972-1.838-2.169-2.052-2.536
                   c-0.217-0.366-0.022-0.564,0.161-0.746c0.165-0.165,0.369-0.428,0.554-0.643c0.185-0.213,0.246-0.364,0.369-0.609
                   c0.121-0.245,0.06-0.458-0.031-0.643c-0.092-0.184-0.829-1.984-1.138-2.717c-0.307-0.732-0.614-0.611-0.83-0.611
                   c-0.215,0-0.461-0.03-0.707-0.03S9.897,8.215,9.56,8.582s-1.291,1.252-1.291,3.054c0,1.804,1.321,3.543,1.506,3.787
                   c0.186,0.243,2.554,4.062,6.305,5.528c3.753,1.465,3.753,0.976,4.429,0.914c0.678-0.062,2.184-0.885,2.49-1.739
                   C23.307,19.268,23.307,18.533,23.214,18.38z" />
                                </g>
                            </svg>
                            <h6 class="ms-3 d-none d-sm-block">+62 813 9452 4240</h6>
                        </div>
                        <div class="col-lg-4 col-4 col-md-6 d-flex justify-content-center items-center">
                            <svg fill="#FFF" width="25px" height="25px" viewBox="0 0 1920 1920"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 1694.235h1920V226H0v1468.235ZM112.941 376.664V338.94H1807.06v37.723L960 1111.233l-847.059-734.57ZM1807.06 526.198v950.513l-351.134-438.89-88.32 70.475 378.353 472.998H174.042l378.353-472.998-88.32-70.475-351.134 438.89V526.198L960 1260.768l847.059-734.57Z"
                                    fill-rule="evenodd" />
                            </svg>
                            <h6 class="ms-3 d-none d-sm-block">farazrizki13@gmail.com</h6>
                        </div>
                        <div
                            class="col-lg-4 col-4 col-md-12 mt-md-5 mt-lg-0 mt-0 d-flex justify-content-center items-center">
                            <svg width="25px" height="25px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg"
                                fill="none">
                                <rect width="132" height="132" x="30" y="30" stroke="#FFF" stroke-width="12"
                                    rx="16" />
                                <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"
                                    d="M66 86v44" />
                                <circle cx="66" cy="64" r="8" fill="#FFF" />
                                <path stroke="#FFF" stroke-linecap="round" stroke-width="12"
                                    d="M126 130v-26c0-9.941-8.059-18-18-18v0c-9.941 0-18 8.059-18 18v26" />
                            </svg>
                            <h6 class="ms-3 d-none d-sm-block">Rizki Ramadhan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center pb-4">
                    <span class="text-white">Copyright @2024 Rizki Ramadhan</span>
                </div>
            </div>
        </div>
    </footer>
@endsection
