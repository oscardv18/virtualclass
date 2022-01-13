<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowCourses extends Component
{
    protected $listeners = ['render'];
    public $course;
    public function render()
    {
        $courses = DB::table('courses')->where('name', 'like', '%' . $this->course . '%')
                                       ->orWhere('period', 'like', '%' . $this->course . '%')
                                       ->get();
        return view('livewire.courses.show-courses', compact('courses'));
    }
}
