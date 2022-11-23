<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Livewire\WithPagination;

class Todos1 extends Component
{
   use WithPagination;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
		$count = env('TODOS1_PAGINATE')?env('TODOS1_PAGINATE'):3;
        return view('livewire.todos1', ['todos'=>Todo::orderBy('id', 'DESC')->paginate($count)]);
    }
}
