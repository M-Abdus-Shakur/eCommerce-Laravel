<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <form wire:submit.prevent="addsubcategory">
                    @include('livewire._flash_message')
                    <div class="mb-2">
                        <label for="defaultFormControlInput" class="form-label">Subategory Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Subategory Name!"
                            wire:model="subcategory_name" />
                        @error('subcategory_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Select Category</label>
                        <select id="category_id" class="form-select" wire:model="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
