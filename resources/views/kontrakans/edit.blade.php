<!DOCTYPE html>
<html>
<head>
<title>MONEY MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="/home" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Home</a>
    <a href="/penghunis" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Resident</a>
    <a href="/vdataps" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Deposit</a>
    <a href="/kontrakans" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bank fa-fw"></i>  House Rent</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> House Rent</b></h5>
  </header>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <form action="{{ route('kontrakans.update', $kontrakan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor Kontrakan</label>
                                <input type="text" class="form-control @error('no_kn') is-invalid @enderror" name="no_kn" value="{{ old('no_kn', $kontrakan->no_kn) }}" placeholder="Masukkan nomor kontrakan">
                            
                                <!-- error message untuk title -->
                                @error('no_kn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status Kontrakan</label>
                                <input type="text" class="form-control @error('status_kn') is-invalid @enderror" name="status_kn" value="{{ old('status_kn', $kontrakan->status_kn) }}" placeholder="Masukkan status kontrakan">
                            
                                <!-- error message untuk title -->
                                @error('status_kn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Harga Kontrakan</label>
                                <input type="text" class="form-control @error('harga_kn') is-invalid @enderror" name="harga_kn" value="{{ old('harga_kn', $kontrakan->harga_kn) }}" placeholder="Masukkan harga kontrakan">
                            
                                <!-- error message untuk title -->
                                @error('harga_kn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ID Penghuni</label>
                                <input type="text" class="form-control @error('id_penghuni') is-invalid @enderror" name="id_penghuni" value="{{ old('id_penghuni', $kontrakan->id_penghuni) }}" placeholder="Masukkan ID Penghuni">
                            
                                <!-- error message untuk title -->
                                @error('id_penghuni')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>


                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>