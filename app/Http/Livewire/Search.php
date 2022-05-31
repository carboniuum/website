<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{
    public $query;
    public $products;
    public $highlightedIndex;

    public function mount()
    {
       $this->init();
    }

    public function init()
    {
        $this->query = '';
        $this->highlightedIndex = 0;
        $this->products = [];
    }

    public function updatedQuery()
    {
        if(!empty($this->query)) {
            $this->products = Product::where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($this->query) . '%')
                                        ->get()
                                        ->toArray();
        }
    }

    public function select()
    {
        $product = $this->products[$this->highlightedIndex] ?? null;
        if($product) {
            $this->redirect(route('product.show', ['id' => $product['id'], 'locale' => app()->getLocale()]));
        }
    }

    public function incrementHighlight()
    {
        if($this->highlightedIndex == count($this->products) - 1) {
            $this->highlightedIndex = 0;
            return;
        }
        $this->highlightedIndex++;
    }

    public function decrementHighlight()
    {
        if($this->highlightedIndex == 0) {
            $this->highlightedIndex = count($this->products) - 1;
            return;
        }
        $this->highlightedIndex--;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
