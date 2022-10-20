@extends('layouts.admin')

@section('content')

<div class="col-lg-9 col-md-8 col-sm-12">

    <!-- btn search,catagories,create -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control form-search" placeholder="Search Article ....." aria-label="search Article ....." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary form-search" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="dropdown">
                <button class="btn btn-white dropdown-toggle text-muted" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    categories
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <a class="btn btn-primary" href="#">Create Article <i class="bi bi-pencil-fill"></i></a>
        </div>
    </div>

    <!-- list article -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mt-3">
            <div class="card">
                <img src="{{ url('template/assets/images/article/gambar-1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="title">
                        <h5 class="card-title d-inline">Technology in 2022</h5>
                        <span class="d-inline float-end">12 Oktober 2020</span>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn text-muted btn-light">technologies</a>
                    <a href="#" class="btn text-muted btn-light">work</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 mt-3">
            <div class="card">
                <img src="{{ url('template/assets/images/article/gambar-2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="title">
                        <h5 class="card-title d-inline">Technology in 2022</h5>
                        <span class="d-inline float-end">12 Oktober 2020</span>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn text-muted btn-light">technologies</a>
                    <a href="#" class="btn text-muted btn-light">work</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 mt-3">
            <div class="card">
                <img src="{{ url('template/assets/images/article/gambar-3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="title">
                        <h5 class="card-title d-inline">Technology in 2022</h5>
                        <span class="d-inline float-end">12 Oktober 2020</span>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn text-muted btn-light">technologies</a>
                    <a href="#" class="btn text-muted btn-light">work</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 mt-3">
            <div class="card">
                <img src="{{ url('template/assets/images/article/gambar-4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="title">
                        <h5 class="card-title d-inline">Technology in 2022</h5>
                        <span class="d-inline float-end">12 Oktober 2020</span>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn text-muted btn-light">technologies</a>
                    <a href="#" class="btn text-muted btn-light">work</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection