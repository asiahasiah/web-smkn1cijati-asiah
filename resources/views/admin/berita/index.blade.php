@extends('layouts.admin')

@section('title', 'Kelola Berita')

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

    .btn-success {
        border-radius: 10px;
        font-weight: 600;
        padding: 10px 18px;
        box-shadow: 0 4px 12px rgba(25, 135, 84, 0.25);
        border: none;
    }
    .btn-success:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(25, 135, 84, 0.32);
    }

    .alert-success {
        border: none;
        border-radius: 10px;
        background: #e8f8ee;
        color: #1e7e42;
        font-weight: 500;
    }

    .card-table {
        border: none;
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(17, 24, 39, 0.06);
        overflow: hidden;
    }

    .table {
        margin-bottom: 0;
    }
    .table thead th {
        background: #fafbfd;
        color: #6b7280;
        font-size: 0.78rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        border-bottom: 1px solid #eef0f4;
        padding: 16px 20px;
    }
    .table tbody td {
        padding: 14px 20px;
        border-bottom: 1px solid #eef0f4;
        vertical-align: middle;
    }
    .table tbody tr:last-child td {
        border-bottom: none;
    }
    .table tbody tr {
        transition: background 0.15s ease;
    }
    .table tbody tr:hover {
        background: #f7f9fd;
    }

    .judul-berita {
        font-weight: 600;
        color: #1f2937;
    }
    .tanggal-text {
        color: #6b7280;
        font-size: 0.9rem;
    }

    .foto-thumb {
        width: 90px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .foto-kosong-thumb {
        width: 90px;
        height: 60px;
        background: #eef1f5;
        border: 1px dashed #cbd3dd;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: #9aa3af;
        text-align: center;
    }

    .aksi-group .btn {
        border-radius: 8px;
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin-left: 6px;
    }
    .btn-outline-primary:hover {
        background: var(--primary);
        border-color: var(--primary);
    }

    .empty-state {
        padding: 60px 20px;
        text-align: center;
        color: #6b7280;
    }
    .empty-state i {
        font-size: 2.5rem;
        color: #cbd3dd;
        margin-bottom: 12px;
        display: block;
    }

    @media (max-width: 576px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px;
        }
    }
</style>
@endsection

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h1 class="h3">Kelola Berita</h1>
            <p>Daftar semua berita yang dipublikasikan di website sekolah.</p>
        </div>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> Tambah Berita
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center gap-2">
            <i class="fa fa-circle-check"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="table-responsive bg-white card-table">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th style="width: 110px;">Foto</th>
                    <th>Judul</th>
                    <th style="width: 160px;">Tanggal</th>
                    <th style="width: 140px;" class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $berita)
                    <tr>
                        <td>
                            @if ($berita->foto)
                                @php
                                    $namaFoto = basename(str_replace('\\', '/', $berita->foto));
                                @endphp

                                @if (file_exists(public_path('images/berita/' . $namaFoto)))
                                    <img
                                        src="{{ asset('images/berita/' . $namaFoto) }}"
                                        alt="{{ $berita->judul }}"
                                        class="foto-thumb"
                                    >
                                @else
                                    <div class="foto-kosong-thumb">Tidak ada</div>
                                @endif
                            @else
                                <div class="foto-kosong-thumb">Tidak ada</div>
                            @endif
                        </td>

                        <td class="judul-berita">{{ $berita->judul }}</td>

                        <td class="tanggal-text">
                            {{ $berita->created_at ? $berita->created_at->format('d F Y') : '-' }}
                        </td>

                        <td class="text-end aksi-group">
                            <a
                                href="{{ route('admin.berita.edit', $berita->id) }}"
                                class="btn btn-sm btn-outline-primary"
                                title="Edit"
                            >
                                <i class="fa fa-pen"></i>
                            </a>

                            <form
                                action="{{ route('admin.berita.destroy', $berita->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus berita ini?');"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-0">
                            <div class="empty-state">
                                <i class="fa fa-inbox"></i>
                                Belum ada berita.
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection