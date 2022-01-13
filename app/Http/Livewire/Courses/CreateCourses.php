<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CreateCourses extends Component
{
    public $open = false, $name, $period, $area_id;
    protected $rules = [
        'name' => 'required',
        'period' => 'required',
        'area_id' => 'required'
    ];

    public function insert() {
        $this->validate();

        Course::create([
            'name' => $this->name,
            'period' => $this->period,
            'area_id' => $this->area_id
        ]);

        $this->emit('render');
        $this->reset(['open', 'name', 'period', 'area_id']);
        $this->emit('alert', 'Excelente, Clase creada correctamente');
    }

    public function render()
    {
        return view('livewire.courses.create-courses');
    }
}
