<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lessons List') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <section class="text-gray-700 body-font">
                <div class="container px-8 mx-auto pt-36 lg:px-4">
                <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                    <h2 class="mb-1 text-xs font-semibold tracking-widest text-blue-600 uppercase title-font">a great
                        header right here</h2>
                    <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-blue-800 sm:text-6xl title-font">
                       A Long headline
                        <br class="">
                        to convey your users.
                    </h1>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-700 lg:w-2/3">Whatever cardigan
                        tote bag tumblr hexagon brooklyn
                        asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of
                        them man
                        bun deep.</p>
                        <div class="flex items-end justify-center w-full mx-auto mt-12 lg:w-1/2">
                            <div class="relative w-2/4 mr-4 text-left lg:w-full xl:w-1/2 md:w-full">
                                <input type="text" id="hero-field" name="hero-field"
                                    class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-purple-700 bg-gray-100 border border-gray-400 rounded-lg focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white">
                            </div>
                            <button
                                class="flex items-center px-4 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 hover:-translate-y-1 hover:scale-110 focus:shadow-outline focus:outline-none">Action</button>
                        </div>
                        <p class="w-1/3 mx-auto mt-6 mb-8 text-sm text-gray-600 ">It enables developers to host Jamstack websites and web services that deploy instantly.</p>
                </div>
            </section>
        </div>
    </div>
</x-patient-layout>
