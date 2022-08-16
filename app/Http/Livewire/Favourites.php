<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Favourite;
use Illuminate\Support\Facades\Auth;

class Favourites extends Component
{
    public $product_id;

    public function add($product_id){
        $favourite = new Favourite();
        $favourite -> product_id = $product_id;
        $favourite -> user_id = Auth::id(); 
        $favourite -> save();
    }

    public function delete($product_id){
        $favourite = Favourite::where('product_id', $this->product_id)->where('user_id', Auth::id())->first();
        $favourite->delete();
    }

    public function render()
    {
        return view('livewire.favourites', [
            'favourite' => Favourite::where('product_id', $this->product_id)->where('user_id', Auth::id())->first()
        ]);
    }
}
