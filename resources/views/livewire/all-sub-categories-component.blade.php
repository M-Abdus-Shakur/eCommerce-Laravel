<div>

    <!-- Striped Rows -->
    <div class="card">
        <h5 class="card-header">Striped rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                @include('livewire._flash_message')
                <thead>
                    <tr>
                        <th>Subcategory Name</th>
                        <th>Category Name</th>
                        <th>Total Products</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($subcategories as $subcategory)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $subcategory->subcategory_name }}</strong>
                            </td>
                            <td>{{ $subcategory->category_name }}</td>
                            <td>{{ $subcategory->product_count }}</td>
                            {{-- <td>
                                <a class="p-2" href="{{ route('admin-dashboard-updatecategories', ['subcategory_id' => $subcategories->id]) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                <a class="p-2" href="javascript:void(0)"
                                    wire:click="deleteSubcategory({{ $subcategories->id }})"><i
                                        class="bx bx-trash me-1"></i>Delete</a>
                            </td> --}}
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->

</div>
