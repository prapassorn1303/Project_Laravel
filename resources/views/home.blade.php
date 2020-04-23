@extends('layouts.app')

@section('content')
<div class="col-md-12 col-xs-12 mt-5 pt-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imageproduct/home2.1.jpg" alt="devbanban" width="1140" height="550">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imageproduct/home3.1.jpg" alt="devbanban" width="1140" height="550">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imageproduct/home2.jpg" alt="devbanban" width="1140" height="550">
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
    
  </div>

  <div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <div class="latest-product">
                    <h1 class="section-title fontLogo"> Beer Wedding</h1>
                    <h4 class="text-indent pt-3 p" >
                      Beer Wedding  ร้านขาย - เช่าชุดเสื้อผ้าออนไลน์ ไม่ว่าจะเป็นชุดแต่งงาน ชุดงานแฟนซีต่างๆ เราก็มีให้เลือกหลากหลาย ราคาไม่แพง รวมทั้งมีเครื่องประดับมากมายให้เช่าฟรี และรับออกแบบจัดงานอีเว้นท์ต่างๆ
                      พร้อมทั้งมีบริการถ่ายพรีเวดดิ้ง โดยทีมงานมืออาชีพ
                    </h4>

                    <div class="row mt-10 pt-5">
                    <div class="product-carousel col-md-8 ">
                        
                        <img src="imageproduct/pre2.jpg" class="rounded float-left img-thumbnail page-content" width="750" height="750"> 
                  
                    </div>

                    <div class=" product-carousel col-md-4 ">

                      <h3 class=" h3"> Pre Wedding <br></h3>
                      <p class="text-indent pt-3 p" >
                         Beer Wedding มีบริการถ่ายพรีเวดดิ้ง ราคาสุดคุ้ม !!! มุมสวย ชุดสวย ผลงานคุณภาพ โดยทีมงานมืออาชีพ พร้อมทั้งมีให้เลือกหลายแพ็คเกจ 
                         มีทั้งถ่ายพรีเวดดิ้งในสตูดิโอ และนอกสตูดิโอ ซึ่งสามารถเลือกสถานที่ได้ 
                      </p>
                  </div>
                </div>

                <div class="row mt-10 pt-5">
                  
                  <div class=" product-carousel col-md-4 ">

                    <h3 class=" h3"> Clothing    <br></h3>
                    <p class="text-indent pt-3 p" >
                      Beer Wedding ขาย - เช่าชุดเสื้อผ้าออนไลน์ ไม่ว่าจะเป็นชุดแต่งงาน ชุดงานแฟนซีต่างๆ เราก็มีให้เลือกหลากหลาย ราคาไม่แพง รวมทั้งมีเครื่องประดับมากมายให้เช่าฟรี
                    </p>
                </div>

                <div class="product-carousel col-md-8 ">
                      
                  <img src="imageproduct/home10.png" class="rounded float-left img-thumbnail page-content" width="750" height="750"> 
            
              </div>
              </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->


@endsection
