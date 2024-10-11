<?php

namespace App\Livewire\Projects;

use Livewire\Component;

class Proposals extends Component
{
    public $project; 

    public function mount($project)
    {
        $this->project = $project; 
    }

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
