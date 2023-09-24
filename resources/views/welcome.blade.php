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
</style>

<div class="posisi2">
    <img class="card-img-overlay img-fluid" src="{{ asset('storage/images/back1.png') }}" style="width: 100%">
    <div class="text-container fw-bold" ><p style="margin-top:120px;margin-left:150px; font-size:5vw;color: white; font-family:">POTENSI ENERGI
        <br>RAMAH LINGKUNGAN<br>DARI SUMBER ORGANIK</p>
    </div>
</div>
<div style="margin-top:600px">
    <img style="width: 10%; margin-top:40px; margin-left:auto; margin-right:auto; display:block" class="" src="{{ asset('storage/images/Logo Tuyogas Tengah.png') }}" style="width: 100%">
    <p class="text-center py-5" style="font-size:30px;">“Merupakan metode penghasilan biogas dari limbah kotoran sapi yang telah <br>
         diuraikan oleh mikroorganisme dan menghasilkan energi berkelanjutan dengan <br>
         mengurangi dampak lingkungan”</p>
    <div class="posisi2">
        <img class="card-img-overlay img-fluid" src="{{ asset('storage/images/back2.png') }}" style="width: 100%">
    </div>
</div>
<div >
<div class="card" style="width: 20%; margin-top:4%; margin-bottom:4%; margin-left:18%">
    <img class="card-img-top" src="{{ asset('storage/images/tujuan.png') }}" style="width: 100%" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center" style="color:#1AA2CA;"><b>TUJUAN</b></h5>
      <p class="card-text text-center"style="color:black">Memfasilitasi informasi tentang biogas untuk masyarakat yang aman.</p>
    </div>
  </div>
  <div class="card text-center" style="width: 20%;margin-top:4%; ">
    <img class="card-img-top" src="{{ asset('storage/images/like.png') }}" style="width: 100%" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"style="color:#1AA2CA;"><b>MANFAAT</b></h5>
      <p class="card-text"style="color: black">Limbah tidak dibuang langsung ke tempat pembuangan ataupun sungai.</p>

    </div>
  </div>
  <div class="card text-center" style="width: 20%;margin-top:4%; ">
    <img class="card-img-top" src="{{ asset('storage/images/like2.png') }}" style="width: 100%" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"style="color:#1AA2CA;"><b>SASARAN</b></h5>
      <p class="card-text"style="color: black">Masyarakat Desa Pesanggrahan dan wisatawan yang berkunjung ke Dusun.</p>

    </div>
  </div>
</div>
  </div>
  <div style="margin-top:500px">
    <div class="row">
        <div class="col" style="margin-left: -300px;">
            <img style="width: 80%;" src="{{ asset('storage/images/3KG.png') }}">
        </div>
        <div class="col" style="margin-top: 150px; margin-left: -80px">
            <p style="font-size:300%; color:#1AA2CA">
                <b>LEBIH HEMAT,
                RAMAH LINGKUNGAN,
                DAN SEJAHTERA<b></p>

        </div>
    </div>
  </div>


<div class="bg-dark py-5" id="footer">
    <div class="col-lg-3">
        <a href="" class="logo text-decoration-none">
            <div class="social-links">
                <img class=" navbar-brand ms-5 h1" style="width: 200px; margin-top:50px"src="{{ asset('storage/images/tuyogas putih.png') }}" alt="image" href="">
            </div>
        </a>
    </div>
</div>
@endsection
