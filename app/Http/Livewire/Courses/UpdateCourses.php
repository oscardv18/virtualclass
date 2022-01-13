<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class UpdateCourses extends Component
{
    public $open = false, $course_id, $course_name, $course_period, $area_id;
    protected $rules = [
        'course_name' => 'required',
        'course_period' => 'required',
        'area_id' => 'required'
    ];

    public function mount ($id, $name, $period, $area_id) {
        $this->course_id = $id;
        $this->course_name = $name;
        $this->course_period = $period;
        $this->area_id = $area_id;
    }

    public function edit(){

        $this->validate();

        DB::table('courses')->where('id', "=", $this->course_id)->update([
            'name' => $this->course_name,
            'period' => $this->course_period,
            'area_id' => $this->area_id,
        ]);

        $this->emit('render');
        $this->reset(['open', 'course_id', 'course_name', 'course_period', 'area_id']);
        $this->emit('update-alert', 'Clase Modificada con exito');
    }

    public function render()
    {
        return view('livewire.courses.update-courses');
    }
}
