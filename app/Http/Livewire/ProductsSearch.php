<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsSearch extends Component
{
    use WithPagination;

    public $sortby;
    public $search = '';

    public function render()
    {

        if ($this->sortby == "") {
            return view('livewire.products-search',
                ['products' => Product::search('name', $this->search)->paginate()]);
        } else{
            return view('livewire.products-search',
                ['products' => Product::search('name', $this->search)->where('product_catogory_id', $this->sortby)->paginate()]);
        }
    }
}
