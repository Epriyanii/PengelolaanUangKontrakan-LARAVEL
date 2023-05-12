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
    <a href="/penghunis" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Resident</a>
    <a href="/vdataps" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Deposit</a>
    <a href="/kontrakans" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  House Rent</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Recident</b></h5>
  </header>

  <div class="container">     
  <table class="table table-bordered">
    <thead class="table-active">
      <tr>
        <th>KTP</th>
        <th>NAMA LENGKAP</th>
        <th>TANGGAL MASUK</th>
        <th>STATUS PENGHUNI</th>
        <th>NO TELP</th>
        <th>NO KONTRAKAN</th>
        <th>PERINTAH</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($penghunis as $penghuni)
      <tr>
        <td>{{ $penghuni->KTP }}</td>
        <td>{{ $penghuni->nama_lengkap }}</td>
        <td>{{ $penghuni->tanggal_masuk }}</td>
        <td>{{ $penghuni->status_penghuni }}</td>
        <td>{{ $penghuni->no_telp }}</td>
        <td>{{ $penghuni->no_kontrakan }}</td>
        <td class="text-center">
          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penghunis.destroy', $penghuni->id) }}" method="POST">
            <a href="{{ route('penghunis.edit', $penghuni->id) }}" class="btn btn-sm btn-primary">EDIT</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
          </form>
          
        </td>
      </tr>
    @empty
    @endforelse
    </tbody>
  </table>
  {{ $penghunis->links()}}
  <a href="{{ route('penghunis.create') }}" class="w3-button w3-dark-grey">Tambah data  <i class="fa fa-arrow-right"></i></a>
</div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4></h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>