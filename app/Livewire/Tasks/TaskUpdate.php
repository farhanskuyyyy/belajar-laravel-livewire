<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class TaskUpdate extends Component
{
    #[Layout('layouts.app')] // this config to use layout
    #[Title('Task Update')]  // this config to change title
    #[On('task-updated')] // event

    public function updateTimestamp()
    {
        Task::query()->update([
            'updated_at' => now()
        ]);
    }

    public function render()
    {
        return view('livewire.tasks.task-update');
    }
}
