<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class FeedbackTable extends Component
{
public $feedbacks;

public function mount()
{
$this->feedbacks = Feedback::latest()->take(10)->get(); // Get the 10 latest feedback entries
}

public function render()
{
return view('livewire.feedback-table');
}
}
