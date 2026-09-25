@extends('layouts.admin')

@section('title', 'Tambah Jurusan')

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

    .form-control,
    .form-select {
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        padding: 10px 14px;
    }
    .form-control:focus,
    .form-select:focus {
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
            <h1 class="h3">Tambah Jurusan</h1>
            <p>Tambahkan kompetensi keahlian baru ke website sekolah.</p>
        </div>

        <a href="{{ route('admin.jurusan.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('admin.jurusan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="kode" class="form-label">Kode Jurusan</label>
                <input
                    type="text"
                    name="kode"
                    id="kode"
                    class="form-control @error('kode') is-invalid @enderror"
                    value="{{ old('kode') }}"
                    placeholder="Contoh: RPL"
                >
                @error('kode')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Jurusan</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}"
                    placeholder="Contoh: Rekayasa Perangkat Lunak"
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
                    placeholder="Penjelasan singkat mengenai jurusan ini"
                >{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="peluang_kerja" class="form-label">Peluang Kerja</label>
                <textarea
                    name="peluang_kerja"
                    id="peluang_kerja"
                    rows="3"
                    class="form-control @error('peluang_kerja') is-invalid @enderror"
                    placeholder="Contoh: Web Developer, Mobile App Developer, dll"
                >{{ old('peluang_kerja') }}</textarea>
                @error('peluang_kerja')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label">Foto / Ikon Jurusan</label>
                <input
                    type="file"
                    name="foto"
                    id="foto"
                    class="form-control @error('foto') is-invalid @enderror"
                    accept="image/*"
                >
                <small class="text-muted">Opsional. Format JPG/PNG, ukuran maksimal sesuaikan aturan server.</small>
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan Jurusan
                </button>
                <a href="{{ route('admin.jurusan.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

@endsection