<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
    
    
    <a href="/blogshow/{{Auth::user()->id}}" > <button type="button" class="btn btn-primary">my post</button></a>
    <a href="/create/{{Auth::user()->id}}" > <button type="button" class="btn btn-primary">create post</button></a>

    
</x-app-layout>




