<div class="py-4 px-12 w-full">
    <div class="w-5/6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
        </svg>
        <div class="flex w-full gap-5">
            <div>
                <span>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 dark:text-white">EMPLOYEES' NET PAY</h5>
                </span>
                @if(!$payroll->processed)         
                    <p class="mb-3 font-bold  dark:text-gray-400">YET TO PROCESS</p>
                @else
                    <p class="mb-3 font-bold  dark:text-gray-400">{{$payroll->payments->sum(function ($payment) {
                        return $payment->employee->grossSalary() - $payment->deductions + $payment->bonuses;
                    })}}$</p>
                @endif
            </div>
            <div>
                <span>
                    <h5 class="mb-2 text-xl font-bold text-gray-500 tracking-tight  dark:text-white">PAYMENT DATE</h5>
                </span>
                <p class="mb-3 font-bold  dark:text-gray-400">{{$payroll->payment_date}}</p>
            </div>
            <div>
                <span>
                    <h5 class="mb-2 text-xl font-bold text-gray-500 tracking-tight  dark:text-white">NO. OF EMPLOYEES</h5>
                </span>
                <p class="mb-3 font-bold  dark:text-gray-400">{{$payroll->payments->count()}}</p>
            </div>
            @php 
                $payroll_id = $payroll->id;
            @endphp
            @if(!$payroll->processed)         
                <form class="mx-auto" method="GET" action="{{ "/payrolls/show/${payroll_id}" }}">
                    <button type="submit" class="text-white bg-[#2c3b90] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Pay Run</button>
                </form>
            @else
                <form class="mx-auto" method="GET" action="{{ "/payrolls/show/${payroll_id}" }}">
                    <button type="submit" class="text-white bg-slate-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View Pay Run</button>
                </form>
            @endif
        </div>
    </div>
</div>
