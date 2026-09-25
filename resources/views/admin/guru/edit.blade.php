@extends('layouts.admin')

@section('title', 'Edit Guru')

@section('styles')
<style>
    .form-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(17, 24, 39, 0.06);
        padding: 28px;
    }
    .form-label {
        font-weight: 600;
        color: #1f2937;
    }
    .btn-success {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px 18px;
        border: none;
    }
    .btn-secondary {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px 18px;
        border: none;
    }
    .foto-preview {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')

    <div class="mb-4">
        <h1 class="h3">Edit Guru</h1>
        <p class="text-muted">Perbarui data guru di bawah ini.</p>
    </div>

    <div class="bg-white form-card">
        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $guru->nama) }}"
                    class="form-control @error('nama') is-invalid @enderror"
                >
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input
                    type="text"
                    name="nip"
                    value="{{ old('nip', $guru->nip) }}"
                    class="form-control @error('nip') is-invalid @enderror"
                >
                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Mata Pelajaran / Jabatan</label>
                <input
                    type="text"
                    name="mapel"
                    value="{{ old('mapel', $guru->mapel) }}"
                    class="form-control @error('mapel') is-invalid @enderror"
                >
                @error('mapel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label d-block">Foto</label>

                @if ($guru->foto && file_exists(public_path('images/guru/' . $guru->foto)))
                    <img
                        src="{{ asset('images/guru/' . $guru->foto) }}"
                        alt="{{ $guru->nama }}"
                        class="foto-preview"
                    >
                @endif

                <input
                    type="file"
                    name="foto"
                    accept="image/*"
                    class="form-control @error('foto') is-invalid @enderror"
                >
                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Perbarui
                </button>
                <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary text-white">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection