<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <form wire:submit.prevent="save" enctype="multipart/form-data" class="bg-white p-4 rounded shadow mt-3">
                @csrf
                <h2 class="text-2xl font-bold mb-1 text-center pt-3" style="color: #6366f1;">
                    Add Product
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
                    <input type="file" wire:model="imageUrl" class="form-control">
                    @error('imageUrl') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4 py-2 me-2">Add</button>
                    <a wire:navigate href="/products" class="btn btn-link text-decoration-none">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>