<div>
    <div class="flex items-center justify-center space-x-4">
        @for ($i = 1; $i <= 4; $i++)
            <div class="flex items-center">
                <!-- Step Circle -->
                <div class="w-5 h-5 flex items-center justify-center rounded-full
                {{ $i <= $currentStep ? 'bg-red-400 text-white' : 'bg-gray-200 text-gray-500' }}
                font-bold text-sm">
                    {{ $i }}
                </div>

                @if ($i < 4)
                    <!-- Progress Bar -->
                    <div class="w-20 h-1
                    {{ $i < $currentStep ? 'bg-red-400' : ($i == $currentStep ? 'bg-red-300' : 'bg-gray-300') }}">
                    </div>
                @endif
            </div>
        @endfor
    </div>

</div>
