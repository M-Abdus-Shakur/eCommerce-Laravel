<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user-home') }}">
                                        <i class="bx bx-home-alt"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start product detail-->
        <section class="py-4">
            <div class="container">
                <div class="product-detail-card">
                    <div class="product-detail-body">
                        <div class="row g-0">
                            <div class="col-12 col-lg-5">
                                <div class="image-zoom-section">
                                    <div class="product-gallery owl-carousel owl-theme border mb-3 p-3"
                                        data-slider-id="1">
                                        <div class="item">
                                            <img src="{{ Storage::url($product->product_image) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                        <button class="owl-thumb-item">
                                            <img src="{{ Storage::url($product->product_image) }}" class=""
                                                alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="product-info-section p-3">
                                    <h3 class="mt-3 mt-lg-0 mb-0">{{ $product->product_name }}</h3>
                                    <div class="product-rating d-flex align-items-center mt-2">
                                        <div class="rates cursor-pointer font-13"> <i
                                                class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-light-4"></i>
                                        </div>
                                        <div class="ms-1">
                                            <p class="mb-0">(24 Ratings)</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 gap-2">
                                        {{-- <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5> --}}
                                        <h4 class="mb-0">{{ $product->price }}</h4>
                                    </div>
                                    <div class="mt-3">
                                        <h6>Short Discription :</h6>
                                        <p class="mb-0">{{ Str::limit($product->product_des, 150) }}</p>
                                    </div>
                                    <dl class="row mt-3">
                                        <dt class="col-sm-3">Product Stock</dt>
                                        <dd class="col-sm-9">{{ $product->product_quantity }}</dd>
                                        <dt class="col-sm-3">Delivery</dt>
                                        <dd class="col-sm-9">World</dd>
                                    </dl>
                                    <div class="row row-cols-auto align-items-center mt-3">
                                        <div class="col">
                                            <label class="form-label">Quantity</label>
                                            <select class="form-select form-select-sm">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="javascript:;" class="btn btn-white btn-ecomm"> <i
                                                class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;"
                                            class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to
                                            Wishlist</a>
                                    </div>
                                    <hr />
                                    <div class="product-sharing">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"> <a href="javascript:;"><i
                                                        class='bx bxl-facebook'></i></a>
                                            </li>
                                            <li class="list-inline-item"> <a href="javascript:;"><i
                                                        class='bx bxl-linkedin'></i></a>
                                            </li>
                                            <li class="list-inline-item"> <a href="javascript:;"><i
                                                        class='bx bxl-twitter'></i></a>
                                            </li>
                                            <li class="list-inline-item"> <a href="javascript:;"><i
                                                        class='bx bxl-instagram'></i></a>
                                            </li>
                                            <li class="list-inline-item"> <a href="javascript:;"><i
                                                        class='bx bxl-google'></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </section>
        <!--end product detail-->
        <!--start product more info-->
        <section class="py-4">
            <div class="container">
                <div class="product-more-info">
                    <ul class="nav nav-tabs mb-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#discription" role="tab"
                                aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-uppercase fw-500">Description</div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="discription" role="tabpanel">
                            <p>
                                {{ $product->product_des }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product more info-->
    </div>
</div>
