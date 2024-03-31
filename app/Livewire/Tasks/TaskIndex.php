<?php

namespace App\Livewire\Tasks;


use Livewire\Component;


class TaskIndex extends Component
{
    public $tasks;
    public function render()
    {
        return view('livewire.tasks.task-index')
            ->title('Tasks - Hostinger Livewire');
    }
}
