@extends('layouts.admin')

@section('title', 'Edit Fasilitas')

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

    .foto-preview {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
        display: block;
    }
</style>
@endsection

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h1 class="h3">Edit Fasilitas</h1>
            <p>Perbarui informasi fasilitas sekolah.</p>
        </div>

        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fasilitas</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $fasilitas->nama) }}"
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
                >{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Gambar Fasilitas</label>

                @if ($fasilitas->gambar && Storage::disk('public')->exists($fasilitas->gambar))
                    <img
                        src="{{ asset('storage/' . $fasilitas->gambar) }}"
                        alt="{{ $fasilitas->nama }}"
                        class="foto-preview"
                    >
                @endif

                <input
                    type="file"
                    name="gambar"
                    id="gambar"
                    class="form-control @error('gambar') is-invalid @enderror"
                    accept="image/*"
                >
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

@endsection