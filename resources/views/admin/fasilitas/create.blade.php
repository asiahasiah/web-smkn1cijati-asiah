@extends('layouts.admin')

@section('title', 'Tambah Fasilitas')

@section('styles')
<style>
    .page-header h1 {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 4px;
    }
    .page-header p {
        color: #6b7280;
        margin-bottom: 0;
    }

    .form-card {
        background: #fff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(17, 24, 39, 0.06);
        padding: 28px;
    }

    label.form-label {
        font-weight: 600;
        color: #374151;
        font-size: 0.92rem;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 10px 14px;
    }
    .form-control:focus {
        border-color: #4338ca;
        box-shadow: 0 0 0 3px rgba(67, 56, 202, 0.12);
    }

    .invalid-feedback {
        display: block;
    }

    .btn-success {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px 20px;
        border: none;
        box-shadow: 0 4px 12px rgba(25, 135, 84, 0.25);
    }
    .btn-secondary {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px 20px;
    }
</style>
@endsection

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h1 class="h3">Tambah Fasilitas</h1>
            <p>Tambahkan fasilitas baru ke website sekolah.</p>
        </div>

        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fasilitas</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}"
                    placeholder="Contoh: Laboratorium Komputer"
                >
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea
                    name="deskripsi"
                    id="deskripsi"
                    rows="4"
                    class="form-control @error('deskripsi') is-invalid @enderror"
                    placeholder="Penjelasan singkat mengenai fasilitas ini"
                >{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Gambar Fasilitas</label>
                <input
                    type="file"
                    name="gambar"
                    id="gambar"
                    class="form-control @error('gambar') is-invalid @enderror"
                    accept="image/*"
                >
                <small class="text-muted">Opsional. Format JPG/PNG/WEBP, maksimal 2MB.</small>
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan Fasilitas
                </button>
                <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

@endsection