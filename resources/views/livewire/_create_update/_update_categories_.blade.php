<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">ssss
                <form>
                    @include('livewire._flash_message')
                    <div class="mb-2">
                        <label for="defaultFormControlInput" class="form-label">Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Category Name!" wire:model="category_name" />
                        @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </form>
                <button type="submit" wire:click.prevent="updateCategory" class="btn btn-primary">Update</button>
                <button wire:click="cancelUpdate" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
