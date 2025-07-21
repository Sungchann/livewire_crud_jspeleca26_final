<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4 fw-bold mb-0">All Products</h2>
        <a wire:navigate href="/product/create" class="btn px-3 py-2 fw-semibold"
           style="background-color: white; color: #6366f1; border-radius: 10px;">
            Add Product
        </a>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead">
                <tr>
                    <th class="table-header" scope="col">Code</th>
                    <th class="table-header" scope="col">Name</th>
                    <th class="table-header" scope="col">Quantity</th>
                    <th class="table-header" scope="col">Price</th>
                    <th class="table-header" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>₱{{ number_format($product->price, 2) }}</td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <a wire:navigate href="/product/view/{{ $product->id }}"
                                   class="btn btn-sm fw-semibold"
                                   style="background-color: white; color: #6366f1; border-radius: 10px;">
                                    View
                                </a>
                                <a wire:navigate href="/product/edit/{{ $product->id }}"
                                   class="btn btn-sm fw-semibold"
                                   style="background-color: white; color: #6366f1; border-radius: 10px;">
                                    Edit
                                </a>
                                <button wire:click="delete({{ $product->id }})"
                                        onclick="return confirm('Are you sure?')"
                                        class="btn btn-sm fw-semibold"
                                        style="background-color: white; color: #6366f1; border-radius: 10px;">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
