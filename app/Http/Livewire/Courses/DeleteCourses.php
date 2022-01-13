<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DeleteCourses extends Component
{
    public $open = false, $course_id, $course_name;

    public function mount($id, $name) {
        $this->course_id = $id;
        $this->course_name = $name;
    }

    public function delete() {
        DB::table('courses')->where('id', '=', $this->course_id)->delete();

        $this->emit('render');
        $this->reset(['open', 'course_id', 'course_name']);
        $this->emit('delete-alert', 'Excelente, Clase eliminada correctamente');
    }

    public function render()
    {
        return view('livewire.courses.delete-courses');
    }
}
