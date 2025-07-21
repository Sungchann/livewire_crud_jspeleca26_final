<?php

namespace App\Livewire\Product;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.product.view')->layout('components.layouts.app', [
            "title" => 'Products',
            "bodyClass" => "",
            "showNav" => true
        ]);
    }
}
