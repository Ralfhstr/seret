@extends('layouts.paa')

@section('content')
<style>

    .posisi2 {
        position: relative;
    }
    .text-container {
        position: absolute;;
    }
    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card {
        width: 18rem;
        float: left;
        margin-right: 20px;
        background-color: #ffffff;
        color: white;
    }

    .card {
        /* Add shadows to create the "card" effect */
        float: left;

        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .img{
            float: right
        }
        .img1{
            float :left
        }
</style>
<div class="posisi2">
    <img class="card-img-overlay img-fluid" src="{{ asset('storage/images/back3.png') }}">
    <div class="text-container fw-bold mx-5" ><p style="margin-top:60%;font-size:5vw;color: white; margin-left:100px">Tentang Kami</p>
    </div>
</div>
<div style="margin-top:600px">
    <img style="width: 30%; margin-top:0px; margin-bottom:5%; margin-left:20%;display:block" class="img" src="{{ asset('storage/images/sepi.png') }}">
    <p class="text" style=" text-align:justify;font-size:22px; margin-left:150px"><b>APA ITU TUYOGAS?</b><br>
        Tuyogas adalah sebuah product Biogas dari limbah kotoran sapi dengan bantuan mikroorganisme yang berasal dari Dusun Tuyomerto, Pesanggrahan, kota batu, Jawatimur.</p>

        <p class="text" style=" text-align:justify;font-size:22px; margin-bottom:100px; margin-left:150px"><b>TUJUAN TUYOGAS</b><br>
            Tuyogas sendiri bertujuan untuk mengurangi limbah kotoran sapi yang menumpuk di Dusun Tuyomerto dan menggantikan posisi kayu sebagai bahan bakar sehingga dapat melestarikan lingkungan dan dapat digunakan kembali dan menjadi sebuah energi terbarukan.</p>
</div>

<div class="bg-dark py-5" id="footer">
    <div class="col-lg-3 mb-5">
        <a href="" class="logo text-decoration-none">
            <div class="social-links">
                <img class=" navbar-brand ms-5 h1" style="width: 200px; margin-top:50px"src="{{ asset('storage/images/tuyogas putih.png') }}" alt="image" href="">
            </div>
        </a>
    </div>
</div>
@endsection
