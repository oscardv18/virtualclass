<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchCourses extends Component
{
    public $course;

    public function render()
    {
        return view('livewire.courses.search-courses', compact('courses'));
    }
}
