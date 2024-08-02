<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departement') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Edit Departement') }}</div>
                        <div class="card-body">
                            <a href="/departement" class="btn btn-secondary mb-4">Kembali</a>
                            <form method="post" action="/departement/update/{{ $departement->id }}">
                                @csrf
                                @method('GET')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Departement .." value="{{ $departement->name }}">
                                    @if($errors->has('name'))
                                    <div class="text-danger mt-1">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
