@extends('Layouts/front-end-layout')

@section('Content')


    <div
    class="hero page-inner overlay"
    style="background-image: url('{{ asset('assets/images/Download1.jpg') }}')" 
    >
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Download</h1>

                <nav
                    aria-label="breadcrumb"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <ol class="breadcrumb text-center justify-content-center" style="background-color: transparent">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li
                        class="breadcrumb-item active text-white-50"
                        aria-current="page"
                    >
                    Download
                    </li>
                    </ol>
                </nav>
                </div>
            </div>


        
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row" >
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="pdf1" class="btn btn-primary">Application for obtaining disaster relief (Sinhala)</a>
            </div>
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="pdf2" class="btn btn-primary">Officers of Management Service Officer Service (Administrative Division)</a>
            </div>
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="pdf3" class="btn btn-primary">Officers of Management Service Officer Service (Administrative Division) VIII</a>
            </div>
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="{{ url('#') }}" class="btn btn-primary">Download PDF 1</a>
            </div>
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="{{ url('#') }}" class="btn btn-primary">Download PDF 2</a>
            </div>
            <div class="col-md-4 mb-2" style="display: grid">
                <a href="{{ url('#') }}" class="btn btn-primary">Download PDF 3</a>
            </div>
         
        </div>
    </div>

@endsection