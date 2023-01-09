<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Town as TownsModel;
use Livewire\WithPagination;
class Town extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $towns = TownsModel::paginate(7);
        return view('livewire.town',['towns' => $towns])->layout('layout');
    }
}
