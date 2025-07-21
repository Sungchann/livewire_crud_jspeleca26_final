<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Edit extends Component
{
    public $product;
    public $name, $quantity, $price, $description, $imageUrl;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->fill($this->product->only(['name', 'quantity', 'price', 'description', 'imageUrl']));
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
