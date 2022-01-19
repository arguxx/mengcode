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
                    <form >
                        Title: <input type = "text" name = "first_name" />
                        <br>
                        Category: <input type = "text" name = "last_name" />
                        <br>
                        Link: <input type = "text" name = "first_name" />
                        <br>
                        Image: <input type = "text" name = "last_name" />
                        <br>
                        text: <input type = "text" name = "last_name" />
                        <br>
                        <button>Input</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- {
    id: 262,
    title: "Data Flair",
    category: "course",
    link: 'https://data-flair.training/python-course/',
    img: "./src/asset-262.jpg",
    desc: `A perfect blend of in-depth Python theoretical knowledge and strong practical skills, this Free course for Python introduces real-time Python projects to give you a headstart in learning Python and enables you to bag top Python jobs in the industry.`,
  }, --}}