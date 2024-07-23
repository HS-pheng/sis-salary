<section class="py-2">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Employee Fullname</th>
                            <th scope="col" class="px-4 py-3">Position</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">Employee Status</th>
                            <th scope="col" class="px-4 py-3">Adjust amount</th>
                            <th scope="col" class="px-4 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($approvals as $approval)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $approval->employee->full_name }}</th>
                            <td class="px-4 py-3">{{ $approval->employee->position }}</td>
                            <td class="px-4 py-3">{{ $approval->employee->email }}</td>
                            <td class="px-4 py-3">{{ $approval->employee->status->name }} </td>
                            <td class="px-4 py-3">{{ $approval->amount}} </td>
                            <td class="px-6 py-4 flex gap-3">
                                <a href="{{ '/approvals' . '/' . $approval->id . '/reject'}}" class="font-medium text-red-700 dark:text-blue-500 hover:underline">Reject</a>
                                <a href="{{ '/approvals' . '/' . $approval->id . '/approve'}}" class="font-medium text-[#2c3b90] dark:text-blue-500 hover:underline">Approve</a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>