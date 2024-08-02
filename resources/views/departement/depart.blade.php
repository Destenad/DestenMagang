<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    /* Custom zebra striping */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2; /* Light gray */
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: #ffffff; /* White */
    }

    /* Centering table headings */
    .table thead th {
        text-align: center;
    }

    /* Centering table data */
    .table tbody td {
        vertical-align: middle;
        text-align: center;
    }

    /* Adding padding to buttons */
    .btn-sm {
        padding: 0.25rem 0.5rem;
    }

    /* Custom styling for buttons */
    .btn-custom-edit {
        background-color: #ffc107; /* Yellow */
        border-color: #ffc107;
        color: #000;
        margin-top: 0.5rem;
        margin-right: 0.5rem;
        margin-bottom: 1.2rem;
    }
    .btn-custom-delete {
        background-color: #dc3545; /* Red */
        border-color: #dc3545;
        color: #fff;
        margin-top : 0.5rem;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departement') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Departement List</h4>
                        <a class="btn btn-primary" href="departement/tambah">
                            <i class="bi bi-plus-lg"></i> Tambah
                        </a>
                    </div>
                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departement as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->name}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="/departement/edit/{{$d->id}}" class="btn btn-custom-edit btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('departement.hapus', $d->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this departement?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-custom-delete btn-sm">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($departement->isEmpty())
                        <div class="text-center">
                            <p class="text-muted">No departements found.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
