<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todos1 extends Component
{
   public $todos, $title, $description, $todo_id;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->todos = Todo::orderBy('id', 'DESC')->get ();
        return view('livewire.todos1');
    }
  
}
