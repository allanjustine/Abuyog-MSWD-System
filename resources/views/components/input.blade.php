@props(['disabled' => false])

<div class="relative">
    <input {{ $disabled ? 'disabled' : '' }} id="{{ $attributes->get('id') }}" name="{{ $attributes->get('name') }}"
        type="{{ $attributes->get('type') }}" {!! $attributes->merge([
            'class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm pr-10',
        ]) !!}>

    @if ($attributes->get('type') === 'password')
        <button type="button" onclick="togglePassword('{{ $attributes->get('id') }}', this)"
            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600" tabindex="-1">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-5 w-5 show-eye">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-5 w-5 hide-eye hidden">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7
                         a9.966 9.966 0 013.69-4.818m4.746-2.13A10.05 10.05 0 0112 5
                         c4.478 0 8.268 2.943 9.542 7a9.969 9.969 0 01-1.29 2.568M15 12
                         a3 3 0 00-3-3m0 0a3 3 0 013 3m0 0a3 3 0 01-3 3m0 0a3 3 0 003-3M4.121 4.121
                         l15.758 15.758" />
            </svg>
        </button>
    @endif
</div>

@once
    <script>
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId);
            const showIcon = button.querySelector('.show-eye');
            const hideIcon = button.querySelector('.hide-eye');

            if (input.type === 'password') {
                input.type = 'text';
                showIcon.classList.add('hidden');
                hideIcon.classList.remove('hidden');
            } else {
                input.type = 'password';
                showIcon.classList.remove('hidden');
                hideIcon.classList.add('hidden');
            }
        }
    </script>
@endonce
