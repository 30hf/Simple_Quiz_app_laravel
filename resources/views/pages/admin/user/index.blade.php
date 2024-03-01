@extends('layouts.admin')
@section('content')
<h4 class="text-dark mb-5">Pengguna Quizz</h4>

<div class="card border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key=>$item)
                        
                    <tr class="align-middle">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <form action="{{ route('pengguna.destroy', $item->id) }}">
                                    @csrf  @method('DELETE')
                                    <button class="btn btn-sm btn-light"onclick="return confirm('Apakah ingin menghapus??')">
                                        <i class="bx bx-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection