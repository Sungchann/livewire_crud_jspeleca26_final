<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{   
    public $products;

    public function mount()
    {
        $this->products = Product::latest()->get();
    }

    public function render()
    {
        return view('livewire.product.index')->layout('components.layouts.app', [
            "title" => 'Products',
            'bodyClass' => '',
            'showNav' => true,
        ]);
    }
    
    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        session()->flash('message', 'Product deleted.');
        return $this->redirect('/products', navigate:true);
    }
}
