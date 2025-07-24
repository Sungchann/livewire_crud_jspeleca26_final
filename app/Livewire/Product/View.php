<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class View extends Component
{
    public $id, $code, $name, $description, $quantity, $price, $imageUrl;

    public function mount($id)
    {
        $this->id = $id;

        $product = Product::findOrFail($id);
        $this->code = $product->code;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->quantity = $product->quantity;
        $this->price = $product->price;
        $this->imageUrl = $product->imageUrl;
    }


    public function delete()
    {
        Product::findOrFail($this->id)->delete();
        return redirect()->to('/products');
    }

    public function render()
    {
        return view('livewire.product.view')->layout('components.layouts.app', [
            "title" => 'Product Details',
            "bodyClass" => "",
            "showNav" => true
        ]);
    }
}
