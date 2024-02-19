@extends('layout.main')

@section('container')

<!--Products section stars-->
 <!--Font awesome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <!--custom css file link-->
 <link rel="stylesheet" href="css/style.css"> 
<section class="products" id="products">
    
    <h1 class="heading"><span>Our Products</span></h1>
    <div class="box-container">
        <div class="box">
            {{-- <span class="discount">-10%</span> --}}
            <div class="image">
                <img src="/images/plants1.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>
                </div> 
            </div>
            <div class="content">
                <h3>Phalaenopsis</h3>
                <div class="price">Rp 290.000,- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            {{-- <span class="discount">-15%</span> --}}
            <div class="image">
                <img src="/images/plants2.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#cart" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Zygocactus</h3>
                <div class="price">Rp 180.000,- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            {{-- <span class="discount">-5%</span> --}}
            <div class="image">
                <img src="/images/plants3.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a> --}}
                    {{-- <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>  
                </div> 
            </div>
            <div class="content">
                <h3>Doritaenopsis</h3>
                <div class="price">Rp 75.000,- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            {{-- <span class="discount">-20%</span> --}}
            <div class="image">
                <img src="/images/plants4.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Drago</h3>
                <div class="price">Rp 40.000,-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            {{-- <span class="discount">-17%</span> --}}
            <div class="image">
                <img src="/images/plants5.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Monstera</h3>
                <div class="price">Rp 75.000,-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            {{-- <span class="discount">-3%</span> --}}
            <div class="image">
                <img src="/images/plants6.png" alt="">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a> --}}
                    <a href="#" class="fas fa-plus" style="text-decoration: none;"></a>  
                </div>
            </div>
            <div class="content">
                <h3>Aglonema</h3>
                <div class="price">Rp 115.000,-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
</section>
@endsection  
 

<!--Products section stars-->

<!--Products section ends-->
