<x-app-layout>
    <div>
        <div class="h-20 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-12 py-4">
            <div class="w-full md:w-1/2">
                <h3 class="font-bold text-xl p-0">Employee management</h3>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href={{ route('employees.create' )}} class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add Employee
                </a>
            </div>
        </div>
        <x-employee-table :employees="$employees" :total="$total_employees"/>
    </div>
</x-app-layout>
