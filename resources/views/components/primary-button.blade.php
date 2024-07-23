<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#2c3b90] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#2c3b90]-300 focus:bg-[#2c3b90]-300 active:bg-[#2c3b90]-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
