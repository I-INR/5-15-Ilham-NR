@extends('layouts.app')
@section('title', 'Admin | Data books Us')
@section('content')
    <div class="main-content">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body card-block">
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-title" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-title" name="title" placeholder="Books Title"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-descriptions" class=" form-control-label">Descriptions</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="descriptions" id="input-descriptions" rows="9" placeholder="This Books is..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-category" class=" form-control-label">Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-category" name="category"
                                            placeholder="Books Category" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-yearofpublication" class=" form-control-label">Year of
                                            Publication</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="input-yearofpublication" name="yearofpublication"
                                            placeholder="Year of Publication" class="form-control" maxlength="4"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-publisher" class=" form-control-label">Publisher</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-publisher" name="publisher" placeholder="Publisher"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-author" class=" form-control-label">Author</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-author" name="author" placeholder="Author"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group py-2">
                                    <div class="col col-md-3">
                                        <label for="input-cover" class=" form-control-label">Cover</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="input-cover" name="cover" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data Books </h2>

                            <!-- Button trigger modal -->
                            <div>
                                <button type="button" class="au-btn au-btn-icon au-btn--blue" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Books
                                </button>
                                <a href="{{ route('book.exportpdf') }}">
                                    <button type="button" class="au-btn au-btn-icon au-btn--green">
                                        Export PDF
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">

                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cover</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Tahun Terbit</th>
                                        <th>Penerbit</th>
                                        <th>Penulis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $index => $book)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <img src="data:img/png;base64, {{ base64_encode($book->cover) }}"
                                                    alt="">
                                            </td>
                                            <td>{{ $book->nama }}</td>
                                            <td>{{ $book->desc }}</td>
                                            <td>{{ $book->kategori }}</td>
                                            <td>{{ $book->tahunterbit }}</td>
                                            <td>{{ $book->penerbit }}</td>
                                            <td>{{ $book->penulis }}</td>
                                            <td style="min-width: 135px">
                                                <a href="{{ route('book.edit', $book->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                |
                                                <a href="{{ route('book.destroy', $book->id) }}"><i
                                                        class="fas fa-trash-alt" style="color: red"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $books ->links() }}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                    href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
