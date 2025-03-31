@if(Route::current()->getName() == 'admin')
    <x-layouts.app.sidebar :title="$title ?? null">
        <flux:main>
            {{ $slot }}
        </flux:main>
    </x-layouts.app.sidebar>
@else
    <x-layouts.app.quiz>
            {{ $slot }}
    </x-layouts.app.quiz>
@endif


