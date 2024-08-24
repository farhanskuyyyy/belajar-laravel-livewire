<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class TaskShow extends Component
{
    #[Layout('layouts.app')] // this config to use layout
    #[Title('Task Show')]  // this config to change title

    public Task $task;
    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.tasks.task-show');
    }
}
