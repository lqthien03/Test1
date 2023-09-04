<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
class ProductsList extends Component
{
    use WithPagination;
    public $search = '';

    function searching(){
        // dd($this->search);

    }

    public function render()
    {
        $Products =  Product::where('name','LIKE','%'.$this->search.'%')->orwhere('category_id',$this->search)->orderBy('id','DESC')->paginate(10);
        $Category = Category::paginate(10);
        //  if(!empty($this->search)){
        //     $Products->where('name','like', '%'.$this->search.'%');
           
        // }
        // dd($this->search);
      
        return view('livewire.products-list',compact('Products','Category'));
        // return view('livewire.products-list',[
        //     'Products' => Product::when($this->search,function($query,$search){
        //     return  $query->where('tensp','LIKE',"%$search%");
        // })]);
       
    }
    
}
