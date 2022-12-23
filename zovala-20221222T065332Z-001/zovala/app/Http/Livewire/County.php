<?php

namespace App\Http\Livewire;

use App\Models\County as ModelsCounty;
use Livewire\Component;
use Livewire\WithPagination;

class County extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $counties = ModelsCounty::paginate(7);
        return view('livewire.county',['counties' => $counties])->layout('layout');
    }
}
