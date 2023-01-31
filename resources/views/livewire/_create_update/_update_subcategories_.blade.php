<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <form wire:submit.prevent="updatesubcategory">
                    @include('livewire._flash_message')
                    <div class="mb-2">
                        <label for="defaultFormControlInput" class="form-label">Subategory Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Subategory Name!"
                            wire:model="subcategory_name" />
                        @error('subcategory_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
