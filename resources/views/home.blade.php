@extends('layouts.main')

@section('About')
<header class="masthead" style="background-image: url('{{ asset('assets/img/perpus.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>In-Book</h1>
                    <span class="subheading">By IN-R</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('Books')
@foreach ($books as $book)
<div class="container px-4 px-lg-5">
    <div class="row  justify-content-center">
        @foreach ($books as $book)
            <div class="col-lg-4">
                <div class="card">
                    <img src="data:img/png;base64, {{ base64_encode($book->cover) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->nama }}</h5>
                        <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary mt-3">Lihat Buku</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection
@section('Footer')
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-6 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#about" class="nav-link p-0 text-muted">About</a></li>
                    <li class="nav-item mb-2"><a href="#books" class="nav-link p-0 text-muted">Books</a></li>
                    <li class="nav-item mb-2"><a href="#footer" class="nav-link p-0 text-muted">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <div class="flex-row"></div>
                <div class="title-top mb-1">
                    <h5 class="fw-bold">Contact Us</h5>
                </div>
                <form method="post" action="{{ route('contacts.store') }}">
                    {{ csrf_field() }}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
                        <label for="inputname">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
                        <label for="inputemail" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px"
                            name="pesan"></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </footer>
@endsection
