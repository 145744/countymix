<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SubCounty as SubCountyModel;
class SubCounty extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $subcounties = SubCountyModel::paginate(7);
        return view('livewire.sub-county',['subcounties' => $subcounties])->layout('layout');
    }
}
