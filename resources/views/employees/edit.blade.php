<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/employees" class="btn btn-secondary mb-4">Kembali</a>
                    <form method="post" action="/employees/update/{{ $employee->id }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama Employee ..." value="{{ old('name', $employee->name) }}" required>
                            @if($errors->has('name'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Alamat ..." value="{{ old('address', $employee->address) }}" required>
                            @if($errors->has('address'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="departement_id" class="form-label">Departement</label>
                            <select id="departement_id" name="departement_id" class="form-select" required>
                                <option value="" disabled>Select Departement</option>
                                @foreach ($departements as $departement)
                                    <option value="{{ $departement->id }}" {{ $departement->id == old('departement_id', $employee->departement_id) ? 'selected' : '' }}>
                                        {{ $departement->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('departement_id'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('departement_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="genderMale" name="gender" value="Male" {{ old('gender', $employee->gender) == 'Male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderMale">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="genderFemale" name="gender" value="Female" {{ old('gender', $employee->gender) == 'Female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderFemale">
                                    Female
                                </label>
                            </div>
                            @if($errors->has('gender'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('gender') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telepon</label>
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Telepon ..." value="{{ old('phone', $employee->phone) }}" required>
                            @if($errors->has('phone'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email ..." value="{{ old('email', $employee->email) }}" required>
                            @if($errors->has('email'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="is_active" class="form-label">Status</label>
                            <select id="is_active" name="is_active" class="form-select" required>
                                <option value="1" {{ old('is_active', $employee->is_active) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('is_active', $employee->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @if($errors->has('is_active'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
