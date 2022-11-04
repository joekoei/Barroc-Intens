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
        } else if ($this->sortby == "1"){
            return view('livewire.products-search',
                ['products' => Product::search('name', $this->search)->where('stock' ,'<', 1)->paginate()]);
        } else if ($this->sortby == "0"){
            return view('livewire.products-search',
            ['products' => Product::search('name', $this->search)->where('stock', '>', 0)->paginate()]);
        }
    }
}
