<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class TaskCreate extends Component
{
    #[Layout('layouts.app')] // this config to use layout
    #[Title('Task Create')]
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
