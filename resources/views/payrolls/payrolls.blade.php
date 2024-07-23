<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h1>h</h1>
    </x-slot>



    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <a href="{{route('payrolls.current')}}" class="inline-block p-4 {{ $current ? "text-blue-600 border-b-2 border-blue-600" : ""}} border-b-2 rounded-t-lg">Run payrolls</a>
            </li>
            <li class="me-2">
                <a href="{{route('payrolls.history')}}" class="inline-block p-4 {{ !$current ? "text-blue-600 border-b-2 border-blue-600" : ""}} rounded-t-lg active" aria-current="page">Payroll History</a>
            </li>
        </ul>
    </div>
</x-app-layout>
