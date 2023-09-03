<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Livewire\WithPagination;

class CategoriesList extends Component
{
    use WithPagination;
    public function render(): View
    {   
        $categories = Category::paginate(10);
        return view('livewire.categories-list', ['categories' => $categories]);
    }
}
