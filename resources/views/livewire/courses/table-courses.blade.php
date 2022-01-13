<div class="p-4 bg-white rounded-lg shadow-lg">
    <h1 class="text-base font-bold">Table</h1>
    <div class="mt-4">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto">
                <div class="inline-block min-w-full py-2 align-middle">
                    <div
                        class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">ID</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">Name</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">Period</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">Area ID</span>
                                        </div>
                                    </th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                        <div class="flex cursor-pointer">
                                            <span class="mr-2">Acciones</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($courses as $course)
                                    <tr>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <p>{{ $course->id }}</p>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <p>{{ $course->name }}</p>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <div class="flex">
                                                <p>{{ $course->period }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <div class="flex">
                                                <p>{{ $course->area_id }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                            <div class="flex space-x-4">
                                                @livewire('courses.update-courses', ['id' => $course->id, 'name' => $course->name, 'period' => $course->period, 'area_id' => $course->area_id], key($course->id))
                                                @livewire('courses.delete-courses', ['id' => $course->id, 'name' => $course->name], key($course->id))
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
