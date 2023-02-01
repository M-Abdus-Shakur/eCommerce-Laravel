<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <form wire:submit.prevent="updateProduct">
                    @include('livewire._flash_message')
                    <div class="mb-4">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Product Name!"
                            wire:model="product_name" />
                        @error('product_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="basic-icon-default-message">Product Description</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="product_des" class="input-group-text"><i class="bx bx-comment"></i></span>
                                <textarea id="product_des" class="form-control" placeholder="Enter Your Product Description"
                                    aria-describedby="product_des" wire:model="product_des"></textarea>
                                @error('product_des')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label">Product Price</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" id="price"
                                placeholder="Enter Your Product Price" wire:model="price" />
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label">Product Quantity</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" id="product_quantity"
                                placeholder="Enter Your Product Quantity" wire:model="product_quantity" />
                            @error('product_quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="product_image" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="product_image" wire:model="product_image" />
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
