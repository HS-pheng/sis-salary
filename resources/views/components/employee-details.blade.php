<div class="px-12">
    <div class="flex flex-col gap-4 my-4">
        <div class="w-full max-w-3xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow rounded-lg p-5">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Personal details</h2>
            <address class="relative bg-gray-50 dark:bg-gray-700 dark:border-gray-600 p-4 rounded-lg border border-gray-200 not-italic grid grid-cols-2">
                <div class="space-y-2 text-gray-500 dark:text-gray-400 leading-loose hidden sm:block">
                    Fullname <br />
                    Date of Birth <br />
                    Gender <br />
                    Email <br />
                    Phone number <br />
                    Position <br />
                    Campus <br /> 
                    Employment status <br />
                </div>
                <div id="contact-details" class="space-y-2 text-gray-900 dark:text-white font-medium leading-loose">
                    {{$employee->full_name}} <br />
                    {{$employee->date_of_birth}} <br />
                    {{$employee->gender}} <br />
                    {{$employee->email}} <br />
                    {{$employee->contact_number}} <br />
                    {{$employee->position}} <br />
                    {{$employee->campus->name}} <br />
                    {{$employee->status->name}} <br />
                </div>
            </address>
        </div>
    </div>
    <div class="flex flex-col gap-4 my-4">
        <div class="w-full max-w-3xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow rounded-lg p-5">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Salary details</h2>
            <address class="relative bg-gray-50 dark:bg-gray-700 dark:border-gray-600 p-4 rounded-lg border border-gray-200 not-italic grid grid-cols-2">
                <div class="space-y-2 text-gray-500 dark:text-gray-400 leading-loose hidden sm:block">
                    Base Salary <br />
                    Housing Allowance <br />
                    Transport Allowance <br />
                    Tax Deduction <br />
                    Health Insurance Deduction <br />
                </div>
                <div id="contact-details" class="space-y-2 text-gray-900 dark:text-white font-medium leading-loose">
                    {{$employee->salary->base_salary}} <br />
                    {{$employee->salary->housing_allowance}} <br />
                    {{$employee->salary->transport_allowance}} <br />
                    {{$employee->salary->tax_deduction}} <br />
                    {{$employee->salary->health_insurance_deduction}} <br />
                </div>
            </address>
        </div>
    </div>
</div>