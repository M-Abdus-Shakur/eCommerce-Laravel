<div>

    <!-- Striped Rows -->
    <div class="card">
        <h5 class="card-header">Striped rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                @include('livewire._flash_message')
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Total SubCategory</th>
                        <th>Total Products</th>
                        <th>Subcategories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($categories as $category)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $category->category_name }}</strong>
                            </td>
                            <td>{{ $category->subcategory_count }}</td>
                            <td>{{ $category->product_count }}</td>
                            <td>
                                @foreach ($category->subcategory as $subcat)
                                    <li>{{$subcat->subcategory_name}}</li>
                                @endforeach
                            </td>
                            <td>
                                <a class="p-2"
                                    href="{{ route('admin-dashboard-updatecategories', ['category_id' => $category->id]) }}"><i
                                        class="bx bx-edit-alt me-1"></i>Edit</a>
                                <a class="p-2" href="javascript:void(0)"
                                    wire:click="deleteCategory({{ $category->id }})"><i
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
