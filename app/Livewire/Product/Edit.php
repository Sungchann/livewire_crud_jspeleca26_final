<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $product;
    public $code, $name, $quantity, $price, $description;
    public $imageUrl;
    public $newImage;
    public $existingImage; 

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->fill($this->product->only(['code', 'name', 'quantity', 'price', 'description']));
        $this->existingImage = $this->product->imageUrl;
    }

    public function update()
    {
        $validated = $this->validate([
            'code' => 'required|string',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'imageUrl' => 'nullable|image|max:2048',
        ]);

        if ($this->newImage) {
            $imagePath = $this->newImage->store('products', 'public');
            $validated['imageUrl'] = $imagePath; 
        }

        $this->product->update($validated);

        session()->flash('message', 'Product updated successfully.');
        return $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.product.edit')->layout('components.layouts.app', [
            "title" => "Products",
            "bodyClass" => "",
            "showNav" => true
        ]);
    }
}
