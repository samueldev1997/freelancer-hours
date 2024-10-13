<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Proposals extends Component {
    public $project; 
    public int $qty = 10;

    public function mount($project) {
        $this->project = $project; 
    }

    #[Computed()]
    public function Proposals() {

        return $this->project->proposals()
        ->orderByDesc('hours')
        ->paginate($this->qty);
    }

    public function loadMore() {

        $this->qty += 10;

    }

    public function render() {
        return view('livewire.projects.proposals');
    }
}
