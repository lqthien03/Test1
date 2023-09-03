<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesList extends Component
{
    public function index()
    {
        return view('livewire.categories-list');
    }
    use WithPagination; 
    
    public Category $category;

    public bool $showModal = false;

    public function openModal(){
        $this->showModal = true;

        $this->category = new Category();
    }

    public array $active = []; 
    public function render(): View
    {
        $categories = Category::paginate(10); 
        
        $this->active = $categories->mapWithKeys(
            fn (Category $item) => [$item['id'] => (bool) $item['is_active']]
        )->toArray();
        return view('livewire.categories-list', [
            'categories' => $categories, 
        ]);
    }
    public function toggleIsActive($categoryId) 
    {
        Category::where('id', $categoryId)->update([
            'is_active' => $this->active[$categoryId],
        ]);
    } 

    // update
    public int $editedCategoryId = 0; 
    public function editCategory($categoryId)
    {
        $this->editedCategoryId = $categoryId;
 
        $this->category = Category::find($categoryId);
    }
    public function delete($id)
    {
        Category::findOrFail($id)->delete();
    }
}
