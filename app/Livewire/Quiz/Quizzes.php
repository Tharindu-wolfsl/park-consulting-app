<?php

namespace App\Livewire\Quiz;

use Livewire\Component;

class Quizzes extends Component
{
    public $currentStep = 1; // Default step

    public function render()
    {
        return view('livewire.quiz.quizzes');
    }
}
