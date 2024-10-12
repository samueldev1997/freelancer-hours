<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component {
    
    public Project $project;
    public bool $modal = false;

    #[Validate(['required', 'email'])]
    public string $email = '';
    
    #[Validate(['required', 'numeric', 'min:1'])]
    public int $hours = 0;

       
    public function mount(Project $project) {
        $this->project = $project;
    }

    public function save() {

        $this->validate();

        $this->project->proposals()
        ->updateOrCreate(
            ['email' => $this->email],
            ['hours' => $this->hours]
        );

    }
    
     public function render() {

        return view('livewire.proposals.create');

    }
}
