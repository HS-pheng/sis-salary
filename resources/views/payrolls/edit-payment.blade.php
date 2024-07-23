<x-app-layout>
    <div>
        <div class="h-20 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-12 py-4">
            <div class="w-full md:w-1/2">
                <h3 class="font-bold text-xl p-0">Edit Payment Details for {{$payment->employee->full_name}}</h3>
            </div>
        </div>
    </div>
    <div class="px-12">
        <form class="flex flex-col gap-4 my-4" action="/payments/{{$payment->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-1">
                <label for="bonuses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Bonuses</label>
                <input required value="{{$payment->bonuses}}" name="bonuses" id="bonuses" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Total bonuses" required />
            </div>
            <div class="mb-1">
                <label for="deductions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Deductions</label>
                <input required value="{{$payment->deductions}}" name="deductions" id="deductions" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Total deductions" required />
            </div>
            <button type="submit" class="w-1/3 text-white bg-[#2c3b90] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save payment details</button>
        </form>
    </div>
</x-app-layout>