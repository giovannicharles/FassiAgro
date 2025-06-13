@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-success text-white">
                    <h4>Inscription</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Nom --}}
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom complet</label>
                            <input id="nom" type="text" 
                                   class="form-control @error('nom') is-invalid @enderror" 
                                   name="nom" value="{{ old('nom') }}" required autofocus>
                            @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input id="email" type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Mot de passe --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input id="password" type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirmation mot de passe --}}
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        {{-- Choix du rôle --}}
                        <div class="mb-3">
                            <label for="role" class="form-label">Rôle</label>
                            <select id="role" name="role" class="form-select @error('role') is-invalid @enderror" required>
                                <option value="">-- Sélectionner un rôle --</option>
                                <option value="CITOYEN" {{ old('role') == 'CITOYEN' ? 'selected' : '' }}>Citoyen</option>
                                <option value="OFFICIER" {{ old('role') == 'OFFICIER' ? 'selected' : '' }}>Officier</option>
                                <option value="ADMIN" {{ old('role') == 'ADMIN' ? 'selected' : '' }}>Administrateur</option>
                            </select>
                            @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Champs Officier (masqués par défaut) --}}
                        <div id="officierFields" style="display:none;">
                            {{-- Admin responsable --}}
                            <div class="mb-3">
                                <label for="ID_Admin" class="form-label">Administrateur responsable</label>
                                <select id="ID_Admin" name="ID_Admin" class="form-select @error('ID_Admin') is-invalid @enderror">
                                    <option value="">-- Sélectionner un administrateur --</option>
                                    @foreach ($admins ?? [] as $admin)
                                        <option value="{{ $admin->ID_Admin }}" {{ old('ID_Admin') == $admin->ID_Admin ? 'selected' : '' }}>
                                            {{ $admin->Nom }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ID_Admin')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Adresse --}}
                            <div class="mb-3">
                                <label for="address" class="form-label">Adresse</label>
                                <input id="address" type="text" name="address" 
                                       class="form-control @error('address') is-invalid @enderror" 
                                       value="{{ old('address') }}">
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Téléphone --}}
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input id="telephone" type="text" name="telephone" 
                                       class="form-control @error('telephone') is-invalid @enderror" 
                                       value="{{ old('telephone') }}">
                                @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Genre --}}
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select id="genre" name="genre" class="form-select @error('genre') is-invalid @enderror">
                                    <option value="">-- Sélectionner le genre --</option>
                                    <option value="M" {{ old('genre') == 'M' ? 'selected' : '' }}>Masculin</option>
                                    <option value="F" {{ old('genre') == 'F' ? 'selected' : '' }}>Féminin</option>
                                </select>
                                @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-success">S'inscrire</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS pour afficher/masquer les champs officier --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const roleSelect = document.getElementById('role');
        const officierFields = document.getElementById('officierFields');

        function toggleOfficierFields() {
            officierFields.style.display = (roleSelect.value === 'OFFICIER') ? 'block' : 'none';
        }

        roleSelect.addEventListener('change', toggleOfficierFields);
        toggleOfficierFields(); // initialiser à l’ouverture
    });
</script>
@endsection
