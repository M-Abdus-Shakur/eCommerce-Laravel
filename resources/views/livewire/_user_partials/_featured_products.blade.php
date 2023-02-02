<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">FEATURED PRODUCTS</h5>
            <a href="{{route('user-all-products')}}" class="btn btn-dark btn-ecomm ms-auto rounded-0">More Products<i
                    class='bx bx-chevron-right'></i></a>
        </div>
        <hr />
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card rounded-0 product-card">
                            <div class="card-header bg-transparent border-bottom-0">
                                <div class="d-flex align-items-center justify-content-end gap-3">
                                    <a href="javascript:;">
                                        <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="product-details.html">
                                <img src="{{ Storage::url($product->product_image) }}" class="card-img-top"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="javascript:;">
                                        <p class="product-catergory font-13 mb-1">{{ $product->product_category_name }}
                                        </p>
                                    </a>
                                    <a href="javascript:;">
                                        <h6 class="product-name mb-2">{{ $product->product_name }}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-1 product-price">
                                            {{-- <span class="me-1 text-decoration-line-through">{{ $product->discounted_price }}</span> --}}
                                            <span class="fs-5">{{ $product->price }}</span>
                                        </div>
                                        <div class="cursor-pointer ms-auto">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i
                                                    class='bx bxs-cart-add'></i>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
