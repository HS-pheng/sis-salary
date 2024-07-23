<x-app-layout>
    <div>
        <div class="h-20 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-12 py-4">
            <div class="w-full md:w-1/2">
                <h3 class="font-bold text-xl p-0">Edit Employee Details</h3>
            </div>
        </div>
    </div>
    <x-edit-employee-form :employee="$employee" :campuses="$campuses" :statuses="$statuses" />
</x-app-layout>