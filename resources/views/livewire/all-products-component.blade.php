<div>

    <!-- Striped Rows -->
    <div class="card">
        <h5 class="card-header">Striped rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                @include('livewire._flash_message')
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($products as $product)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $product->product_name }}</strong>
                            </td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <img src="{{ Storage::url($product->product_image) }}" alt="Product Image"
                                    class="rounded-circle" width="85px" height="85px" />

                            </td>
                            <td>{{ $product->product_category_name }}</td>
                            <td>{{ $product->product_subcategory_name }}</td>
                            <td>
                                <a class="p-2"
                                    href="{{ route('admin-dashboard-updateproducts', ['product_id' => $product->id]) }}"><i
                                        class="bx bx-edit-alt me-1"></i>Edit</a>
                                <a class="p-2" href="javascript:void(0)"
                                    wire:click="deleteProduct({{ $product->id }} , {{ $product->product_category_id }} , {{ $product->product_subcategory_id }})"><i
                                        class="bx bx-trash me-1"></i>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->

</div>
