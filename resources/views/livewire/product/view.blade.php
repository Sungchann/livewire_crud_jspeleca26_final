<div class="max-w-3xl mx-auto px-4">
    <div class="bg-white p-4 rounded shadow w-50 mx-auto mt-3">
        <div class="mb-2">
            <a wire:navigate href="/products" class="btn btn-link text-decoration-none">
                Back to Products
            </a>
        </div>

        <h2 class="text-2xl font-bold mb-2 text-center pt-3" style="color: #6366f1;">
            Product Details
        </h2>

        <div class="mb-2">
            <label class="form-label fw-medium">Code:</label>
            <div class="form-control bg-light">{{ $code }}</div>
        </div>


        <div class="mb-2">
            <label class="form-label fw-medium">Name:</label>
            <div class="form-control bg-light">{{ $name }}</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-medium">Description:</label>
            <div class="form-control bg-light">{{ $description }}</div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-medium">Quantity:</label>
                <div class="form-control bg-light">{{ $quantity }}</div>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-medium">Price:</label>
                <div class="form-control bg-light">₱{{ number_format($price, 2) }}</div>
            </div>
        </div>

        <div class="mb-3 text-center">
            <label class="form-label fw-medium">Image:</label><br>
            @if ($imageUrl)
                <img src="{{ Storage::url($imageUrl) }}" alt="Product Image" class="img-fluid rounded" style="max-height: 200px;">
            @else
                <p class="text-muted">No image available</p>
            @endif
        </div>

        <div class="text-center mt-4">
            <a wire:navigate href="/product/edit/{{ $id }}" class="btn btn-primary px-4 py-2 me-2">Edit</a>
            <button wire:click="delete" class="btn btn-danger px-4 py-2 me-2">Delete</button>
        </div>
    </div>
</div>
