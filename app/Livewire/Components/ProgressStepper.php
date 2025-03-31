<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ProgressStepper extends Component
{
    public $currentStep = 1; // Default step

    public function nextStep()
    {
        if ($this->currentStep < 4) {
            $this->currentStep++;
        }
    }

    public function prevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
    public function render()
    {
        return view('livewire.components.progress-stepper');
    }
}
