<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TableCourses extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $courses = DB::table('courses')->get();
        return view('livewire.courses.table-courses', compact('courses'));
    }
}
