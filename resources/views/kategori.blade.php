@extends('layout/main')

@section('title', 'Kategori Jasa')


@section('container')  
        <div class="container" style="max-width:30vw">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://jejakpiknik.com/wp-content/uploads/2020/08/pemandangan-terindah-di-dunia-saat-ini.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2019/06/22/3093558179.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://jejakpiknik.com/wp-content/uploads/2020/08/pemandangan-terindah-di-dunia-saat-ini.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            <div class="row" style="background-color:#E7F0FE; padding:0; margin:0">
                <div class="col" style="text-align:left">
                Kategori :
                </div>
                <div class="col" style="text-align:right">
                Dropdown
                </div>
            </div>
            <div class="row" style="background-color:#E7F0FE; padding:0; margin:0">
                <div class="col" style="text-align:left">
                Jumlah Donasi:
                </div>
                <div class="col" style="text-align:right">
                Dropdown
                </div>
            </div>
            <div class="row" style="background-color:#E7F0FE; padding:0; margin:0">
                <div class="col" style="text-align:left">
                Nomor WA
                </div>
                <div class="col" style="text-align:right">
                <input type="text"></input>
                </div>
            </div>
            <div >
                <!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
                }

                .active, .accordion:hover {
                background-color: #ccc;
                }

                .panel {
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                }
                </style>
                </head>
                <body>

                <h2 style="font-size:12px; text-align:center; font-weight: 600; background-color:#E7F0FE; margin:0; padding-bottom:20px; padding-top:20px">Program-program Laznas Dewan Da'wah</h2>
        
                <button class="accordion">Section 1</button>
                <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
                }
                </script>

                </body>
                </html>
            </div>

            <!--<div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Jasa Apa Yang Anda Perlukan?</h1>
                </div>
            </div>-->
        </div>
@endsection


