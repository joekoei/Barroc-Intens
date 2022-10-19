<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsSearch extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.products-search' , [
            'products' => Product::search()
        ]);
    }
}
