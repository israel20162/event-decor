<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Livewire\Component;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class FeedbackChart extends Component
{
   // public $chartModel;
    public function hydrate(LineChartModel $chartModel)
    {
        $feedbacks = Feedback::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get()
            ->pluck('count', 'date');

        $chartModel->setTitle('Feedbacks per Day')
            ->setSmoothCurve()
            ->setDataLabelsEnabled(true);

        foreach ($feedbacks as $date => $count) {
            $chartModel->addPoint($date, $count);
        }

        return view('livewire.feedback-chart');
    }
}
