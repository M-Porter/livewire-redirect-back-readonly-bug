<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SomeForm extends Component
{
    public string $someValue = '';

    public function submit()
    {
        $this->redirect(route('another', [
            'someParam' => $this->someValue,
        ]));
    }

    public function render()
    {
        return view('livewire.some-form');
    }
}
