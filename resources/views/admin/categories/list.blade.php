@extends('admin.layout')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Kategori Listesi</h1>
        </div>

        <div class="card">
            <div class="card-header pb-0">
                <div class="card-actions float-end">
                    <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="align-middle" data-feather="more-horizontal"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{route('admin-categories-create')}}">Kategori Ekle</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Kategoriler</h5>
            </div>
            <div class="card-body">
                <table id="datatables-orders" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Adı</th>
                            <th>Ana Kategori</th>
                            <th>Oluşturma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['categories'] as $key => $item )
                        <tr>
                            <td><strong>{{$key + 1}}</strong></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->main_name}}</td>
                            <td><span class="badge badge-success-light">{{$item->created_at}}</span></td>
                            <td>
                                <a href="{{route('admin-categories-edit', ['id' => $item->id])}}"
                                    class="btn btn-primary btn-sm">Düzenle</a>
                                <a href="{{route('admin-categories-delete', ['id' => $item->id])}}"
                                    class="btn btn-danger btn-sm">Sil</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
<script src="{{asset('admin-asset/js/datatable.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#datatables-orders').DataTable();
    } );
</script>
@endsection