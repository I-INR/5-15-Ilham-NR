@extends('layouts.app')
@section('title', 'Admin | Data Book')
@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Contact
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('book.update', $book->id)}}" method="post" class="" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row form-group py-2">
                                                <div class="col col-md-3">
                                                    <label for="input-title" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-title" name="title" placeholder="Books Title"
                                                        class="form-control" value="{{ $book->nama }}">
                                                </div>
                                            </div>
                                            <div class="row form-group py-2">
                                                <div class="col col-md-3">
                                                    <label for="input-descriptions" class=" form-control-label">Descriptions</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="descriptions" id="input-descriptions" rows="9" placeholder="This Books is..."
                                                        class="form-control">{{ $book->desc }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2">
                                                <div class="col col-md-3">
                                                    <label for="input-category" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-category" name="category"
                                                        placeholder="Books Category" class="form-control" value="{{ $book->kategori }}">
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
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="{{ $book->tahunterbit }}">
                                                </div>
                                            </div>
                                            <div class="row form-group py-2">
                                                <div class="col col-md-3">
                                                    <label for="input-publisher" class=" form-control-label">Publisher</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-publisher" name="publisher" placeholder="Publisher"
                                                        class="form-control" value="{{ $book->penerbit }}">
                                                </div>
                                            </div>
                                            <div class="row form-group py-2">
                                                <div class="col col-md-3">
                                                    <label for="input-author" class=" form-control-label">Author</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-author" name="author" placeholder="Author"
                                                        class="form-control" value="{{ $book->penulis }}">
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
                                            {{-- <div class="form-group">
                                                <label for="nama" class=" form-control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" value ="{{ $contact->nama}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class=" form-control-label">Email</label>
                                                <input type="email" name="email"  class="form-control" value ="{{ $contact->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="pesan" class=" form-control-label">Pesan</label>
                                                <textarea name="pesan" class="form-control">{{ $contact->pesan}}</textarea>
                                            </div> --}}
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
