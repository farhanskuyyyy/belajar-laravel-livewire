<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

class TaskIndex extends Component
{
    #[Layout('layouts.app')] // this config to use layout
    #[Title('Task Create')]  // this config to change title

    public $tasks;

    #[Rule(['required','max:10','string'])] // rules for name , field on below
    public $name;

    // same as conscruct
    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }

    // called when component is hydrated with data from the server
    public function hydreate()
    {

    }

    // called at the beginning of every request
    public function boot()
    {

    }

    // called before livewire update the components
    public function update()
    {

    }

    // called after livewire components data updated
    public function rendering($view , $data)
    {
        // dd($view);
        // $data['name'] = 'farhan';
        // dd($data);
    }

    // called after render method is called
    public function rendered($view , $html)
    {
        // dd($html);
    }

    // called at the end of every component request
    public function dehydrate()
    {
        // convert collection to array
        // $this->tasks = $this->tasks->toArray();
        // dd($this->tasks);
    }

    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        session()->flash('message','Task succesfully created'); // flash message

        $this->dispatch('task-updated'); // event

        return $this->redirect(route('task'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->with([
            'button' => 'New Task'
        ]);
    }
}
