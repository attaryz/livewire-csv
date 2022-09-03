<div class="relative z-10"

    x-data="{
    open: @entangle('open')
    }"
x-show="open">
x-cloak
    <div class="fixed inset-0"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                <div class="pointer-events-auto w-screen max-w-md">
                    <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                        <div class="py-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium">Import</h2>

                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button" class="rounded-md text-indigo-200 hover:text-indigo-300 focus:outline-none focus:ring-2 focus:ring-white" wire:click="toggle">
                                        <span class="sr-only">Close panel</span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="h-0 flex-1 overflow-y-auto">
                            <div class="flex flex-1 flex-col justify-between">
                                <div class="p-4 sm:p-6">
                                    <div>
                                        <!-- File drop -->
                                        <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file" name="file" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    CSV file up to 50MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <span class="mt-2 text-red-500 font-medium text-sm">Validation error</span>
                                    <!-- End file drop -->

                                    <!-- Column selection -->
                                    {{-- If file uloaded --}}
                                        <div class="mt-8">
                                            <h2 class="font-medium">Match columns</h2>

                                            <div class="mt-4 space-y-5">
                                                {{-- Foreach columns to map --}}
                                                    <div class="grid grid-cols-4 gap-4 items-start">
                                                        <label for="" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 col-span-1">
                                                            Column label*
                                                        </label>
                                                        <div class="mt-1 sm:mt-0 sm:col-span-3">
                                                            <select type="text" name="" id="" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                                                <option value="">Don't import</option>
                                                                {{-- Foreach file headers --}}
                                                                    <option value="">Column</option>
                                                                {{-- End foreach file headers --}}
                                                            </select>

                                                            <span class="mt-2 text-red-500 font-medium text-sm">Validation error</span>
                                                        </div>
                                                    </div>
                                                {{-- End foreach columns to map --}}
                                            </div>
                                        </div>
                                    {{-- Endif file uloaded --}}
                                    <!-- End columns selection -->
                                </div>
                            </div>
                        </div>

                        {{-- csv-imports component goes here --}}

                        <div class="flex flex-shrink-0 justify-end px-4 py-4">
                            <button type="submit" class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50" disabled="disabled">Import</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
