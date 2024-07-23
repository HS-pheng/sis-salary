<div class="px-12">
    <form class="flex flex-col gap-4 my-4" action={{ route('employees') . '/' . $employee->id }} method="POST">
        @csrf
        <div class="flex gap-2 m-2">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    1
            </span>
            <span class="text-[#2c3b90] font-bold">Employee Details</span>
            <svg class="w-4 inline mr-1 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                <path stroke="#2c3b90" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
            </svg>
        </div>
        <div class="mb-1">
            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
            <input required value="{{$employee->full_name}}" name="full_name" id="full_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Fullname" required />
        </div>
        <div class="mb-1">
            <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="ml-1 w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input required value="{{$employee->date_of_birth}}" name="dob" datepicker id="dob" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>
        </div>
        <div class="mb-1">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <div class="flex items-center mb-1">
                <input required {{$employee->gender == "Male" ? "checked" : ""}} id="default-radio-1" type="radio" value="Male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
            </div>
            <div class="flex items-center mb-1">
                <input required {{$employee->gender == "Female" ? "checked" : ""}} id="default-radio-2" type="radio" value="Female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
            </div>
            <div class="flex items-center">
                <input required {{$employee->gender == "Others" ? "checked" : ""}} id="default-radio-3" type="radio" value="Others" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ml-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Others</label>
            </div>
        </div>
        <div class="mb-1">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input required value={{$employee->email}} name="email" type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@paragonisc.edu.kh" required />
        </div>
        <div class="mb-1">
            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
            <input required value={{$employee->contact_number}} name="phone_number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Phone number" required />
        </div>
        <div class="mb-1">
            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
            <input required value={{$employee->position}} name="position" id="position" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Position" required />
        </div>
        <div class="mb-1">
            <label for="campus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Campus</label>
            <select required name="campus" id="campus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($campuses as $campus)
                    <option {{$employee->campus_id == $campus->id ? "selected" : ""}} value="{{ $campus->id }}">{{ $campus->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-1">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employment status</label>
            <select required name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($statuses as $status)
                    <option {{$employee->employment_status == $status->id ? "selected" : ""}} value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex gap-2 m-2">
            <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    2
            </span>
            <span class="text-[#2c3b90] font-bold">Salary Details</span>
            <svg class="w-4 inline mr-1 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                <path stroke="#2c3b90" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
            </svg>
        </div>

        <div class="mb-1">
            <label for="base_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base salary (USD)</label>
            <input required value={{$employee->salary->base_salary}}  name="base_salary" type="number" id="base_salary" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Salary per month in (USD)" required />
        </div>
        <div class="mb-1">
            <label for="housing_allowance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Housing allowance (USD)</label>
            <input required value={{$employee->salary->housing_allowance}} name="housing_allowance" type="number" id="housing_allowance" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Housing allowance per month in (USD)" required />
        </div>
        <div class="mb-1">
            <label for="transport_allowance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transport allowance (USD)</label>
            <input required value={{$employee->salary->transport_allowance}} name="transport_allowance" type="number" id="transport_allowance" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Rental allowance per month in (USD)" required />
        </div>
        <div class="mb-1">
            <label for="tax_deduction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tax deduction (USD)</label>
            <input required value={{$employee->salary->tax_deduction}} name="tax_deduction" type="number" id="tax_deduction" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Tax deduction per month in (USD)" required />
        </div>
        <div class="mb-1">
            <label for="health_insurance_deduction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Health insurance deduction (USD)</label>
            <input required value={{$employee->salary->health_insurance_deduction}} name="health_insurance_deduction" type="number" id="health_insurance_deduction" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Health insurance deduction per month in (USD)" required />
        </div>
        
        <button type="submit" class="w-1/3 text-white bg-[#2c3b90] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save information</button>
    </form>
</div>