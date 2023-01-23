<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <h3><a class="navbar-brand" href="{{url('/')}}">HOME</a></h3>
    <h3><a class="navbar-brand" aria-current="page" href="{{url('code')}}">CODE</a></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        
          <h3><a class="nav-link active" aria-current="page" href="{{url('komponenTBL')}}">TABLE KOMPONEN</a></h3>
        </li>
      
        
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
                <mb-9><center><h1>UAS WEB PROGRAMING</h></center></mb-9>
                <center><img src="img/download (1).jpg" width="400px" ></center>  
    <h3> sensor heartbeat Sensor heartbeat merupakan sensor yang berfungsi untuk mendeteksi detak jantung dengan menggunakan jari tangan. Sensor imi memiliki tiga buah kaki yang terdiri dari GND, Vcc, dan signal dan memiliki infrared dan Phototransistor</h3>
    
    <h3> Skema Yang Digunakan </h3>
    <center><img src="img/skema.png" width="400px" ></center> 
    <center><img src="img/diagram.png" width="600px" ></center> 
    <h3> Jari ditempakan di antara infrared dan Phototransistor. Maka cahaya infrared yang diserap Ketika melewati aliran darah akan meningkat/menurun dan jumlah penyerapan akan juga akan meningkat/menurun secara bersamaan. Akhirnya Ketika jumlah cahaya yang tidak diserap jatuh pada phototransistor, resistansi transistor akan berubah. Yang tercermin dalam output sensor, sensor perlu terhubung dengan pin analog (Arduino) dan hasilnya akan di tampilkan di LCD
</h3>

<h3> Komponen Yang Dihunakan </h3>
<center><img src="img/Arduino_uno_prev_ui.png" width="400px" ></center> 
<center><img src="img/breadboard.png" width="400px" ></center> 
<center><img src="img/kabel jumper.png" width="400px" ></center> 
<center><img src="img/lcd.jpg" width="400px" ></center> 


<div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>RumahElektroBali.</h3>
                    <p>guadangnya elektonika</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Melayani Sensor, jaringan, elektonika!</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. I Wayan bared, Kukuh, Kerambitan, Tabanan, Bali</p>
                    <p>Kode Pos: 57365</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>Instragram: </b>Rumah Elektro Bali</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>RumahElektroBali.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>
    <div class="container text-center"></div>
   
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>

</html>