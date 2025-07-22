<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $code;
    public $name;
    public $description;
    public $quantity;
    public $price;
    public $imageUrl;

    public function render()
    {
        return view('livewire.product.create')->layout('components.layouts.app', [
            "title" => "Products",
            "bodyClass" => "",
            "showNav" => true
        ]);
    }

    public function save()
    {
        $validated = $this->validate([
            'code' => 'required|string|unique:products,code',
            'name' => 'required|string',
            'quantity' => 'integer|required',
            'price' => 'numeric|required',
            'description' => 'nullable|string'
        ]);
        

        // if ($this->imageUrl) {
        //     $imagePath = $this->imageUrl->store('products', 'public');
        //     $validated['imageUrl'] = 'products/' . basename($imagePath);
        // }
        Product::create($validated);

        session()->flash('message', 'Product added.');
        return $this->redirect('/products', navigate: true);
    }
}
