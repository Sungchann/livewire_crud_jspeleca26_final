<div class="max-w-3xl mx-auto px-4">
    <form wire:submit.prevent="update" class="bg-white p-4 rounded shadow w-50 mx-auto mt-3">
        @csrf
        <h2 class="text-2xl font-bold mb-2 text-center pt-3" style="color: #6366f1;">
            Edit Product
        </h2>
        <div class="mb-2">
            <label class="form-label fw-medium">Code</label>
            <input wire:model.defer="code" type="text" class="form-control">
            @error('code') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="mb-2">
            <label class="form-label fw-medium">Name</label>
            <input wire:model.defer="name" type="text" class="form-control">
            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-2">
            <label class="form-label fw-medium">Description</label>
            <textarea wire:model.defer="description" class="form-control" rows="3"></textarea>
            @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-medium">Quantity</label>
                <input wire:model.defer="quantity" type="number" class="form-control">
                @error('quantity') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-medium">Price</label>
                <input wire:model.defer="price" type="number" step="0.01" class="form-control">
                @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-medium">Upload Image</label>
            <input wire:model="newImage" type="file" class="form-control">
            @error('newImage') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        @if($existingImage)
        <div class="mb-3 text-center">
            <label class="form-label fw-medium d-block">Current Image</label>
            <img src="{{ asset('storage/' . $existingImage) }}" alt="Current Image" class="img-fluid rounded" style="max-height: 200px;">
        </div>
        @endif


        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2 me-2">Update</button>
            <a wire:navigate href="/products" class="btn btn-link text-decoration-none">Cancel</a>
        </div>
    </form>
</div>