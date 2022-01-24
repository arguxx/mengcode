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
                    <h1 style="color: black">Request</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">category</th>
                            <th scope="col">link</th>
                            <th scope="col">description</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($advice as $advice)   
                            <tr>
                                <th scope="row">{{ $advice->id }}</th>
                                <td>{{ $advice->title }}</td>
                                <td>{{ $advice->category }}</td>
                                <td>{{ $advice->link }}</td>
                                <td>{{ $advice->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
