<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Edit extends Component
{
    public $product;
    public $code, $name, $quantity, $price, $description, $imageUrl;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->fill($this->product->only(['code', 'name', 'quantity', 'price', 'description', 'imageUrl']));
    }
    
    public function update()
    {
        $validated = $this->validate([
            'code' => 'required|string',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'imageUrl' => 'nullable|string',
        ]);

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
