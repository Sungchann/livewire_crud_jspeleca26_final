<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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
        $validated = $this->validate();
        
        $lastProduct = Product::orderBy('id', 'desc')->first();
        $nextId = $lastProduct ? $lastProduct->id + 1 : 1;
        $productId = 'P' . $nextId;

        if ($this->imageUrl) {
            $imagePath = $this->imageUrl->store('products', 'public');
            $validated['imageUrl'] = 'products/' . basename($imagePath);
        }

        $validated['id'] = $nextId;
        $validated['code'] = $productId;

        Product::create($validated);

        session()->flash('message', 'Product added.');
        return $this->redirect('/products', navigate: true);
    }
}
