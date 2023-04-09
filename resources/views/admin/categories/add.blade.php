@extends('admin.layout')


@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Kategori Oluştur</h1>
        </div>

        <form action="{{route('admin-categories-post-create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Kategori Seç</label>
                                <select class="form-control choices-multiple" name="category_id">
                                    <option value="">Seçiniz</option>
                                    @foreach ($data['categories'] as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Kategori Adı</label>
                                <input type="text" class="form-control" name="category_name"
                                    placeholder="Kategori adı giriniz" required />
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mt-2">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
</main>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Choices.js
        new Choices(document.querySelector(".choices-multiple"));
        // Flatpickr
        flatpickr(".flatpickr-minimum");
        flatpickr(".flatpickr-datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        });
        flatpickr(".flatpickr-human", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        });
        flatpickr(".flatpickr-multiple", {
        mode: "multiple",
        dateFormat: "Y-m-d"
        });
        flatpickr(".flatpickr-range", {
        mode: "range",
        dateFormat: "Y-m-d"
        });
        flatpickr(".flatpickr-time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        });
        });
</script>

@endsection