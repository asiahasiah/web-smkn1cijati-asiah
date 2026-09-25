@extends('layouts.admin')

@section('title', 'Tambah Guru')

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
</style>
@endsection

@section('content')

    <div class="mb-4">
        <h1 class="h3">Tambah Guru</h1>
        <p class="text-muted">Isi data guru baru di bawah ini.</p>
    </div>

    <div class="bg-white form-card">
        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="form-control @error('nama') is-invalid @enderror"
                    placeholder="Nama lengkap guru"
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
                    value="{{ old('nip') }}"
                    class="form-control @error('nip') is-invalid @enderror"
                    placeholder="Nomor Induk Pegawai"
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
                    value="{{ old('mapel') }}"
                    class="form-control @error('mapel') is-invalid @enderror"
                    placeholder="Contoh: Guru Bahasa Inggris"
                >
                @error('mapel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Foto</label>
                <input
                    type="file"
                    name="foto"
                    accept="image/*"
                    class="form-control @error('foto') is-invalid @enderror"
                >
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan
                </button>
                <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary text-white">
                    Batal
                </a>
            </div>
        </form>
    </div>

@endsection