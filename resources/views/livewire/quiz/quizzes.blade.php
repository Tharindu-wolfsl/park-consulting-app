
<div class="w-full flex flex-row justify-center font dm-sans-font">
    <div class="mt-[178px]">
        <div>
            <p class="text-xl text-center text-[#7D3838] font-semibold">The Park Consulting Quiz Map</p>
            <p class="text-xs text-center mt-4 text-[#6F6C90] max-w-65 mx-auto">Please fill the form below. Feel free to add as much detail as needed.</p>
        </div>
        <x-card class="w-md">
            <div class="tab-section">
                <livewire:components.progress-stepper />
{{--                break line--}}
                <div class="border mt-4 border-[#D9DBE9] opacity-30"></div>
                    <div class="form-section mt-10">
                        <p class="text-md font-semibold text-[#7D3838]">Contact details</p>
                        <p class="text-xs text-[#6F6C90] mt-1">Lorem ipsum dolor sit amet consectetur adipisc.</p>
                        <form class="mt-8 flex flex-row justify-between text-sm">
                            <div class="input-group">
                                <x-label class="text-[#7D3838]">Name</x-label>
                                <x-input class="" placeholder="John Carter" />
                            </div>
                            <div class="input-group">
                                <x-label class="text-[#7D3838]">Email</x-label>
                                <x-input class="" placeholder="John Carter" />
                            </div>
                        </form>
                    </div>
            </div>
        </x-card>
        <!-- Navigation Buttons -->
        <div class="w-full mt-6 flex flex- justify-between">
            <button  class="flex flex-row justify-center items-center px-10 py-[11px] gap-2
           border border-[#F2807F] rounded-[56px] text-[#F2807F] font-bold bg-white text-sm font-normal" {{ $currentStep == 1 ? 'disabled' : '' }}>
                Previous
            </button>
            <button class="flex flex-row justify-center items-center px-10 py-[11px] gap-2
           bg-[#F2807F] shadow-[0px_3px_12px_rgba(74,58,255,0.18)]
           rounded-[56px] text-sm font-normal text-white font-bold" {{ $currentStep == 4 ? 'disabled' : '' }}>
                Next Step
            </button>
        </div>
    </div>
</div>
