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
                    <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <p style="color: black">Title</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="title">
                        </div>
                        <p style="color: black">Category</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="category">
                        </div>
                        <p style="color: black">Link</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="link">
                        </div>
                        <p style="color: black">desc</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="description">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" id="formFile" name="src" />
                        </div>

                        <button type="submit" class="btn btn-success">Success</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</x-app-layout>