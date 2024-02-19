@extends('layout.main')

@section('container')

    {{-- {{-- <!DOCTYPE html> --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive  Flower Website Design Tutorials</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

    
  

     <!--Home section starts-->
     <section class="home" id="home">
        <div class="content">
            <h3>EMBRACE NATURAL SERENITY</h3>
            <span>Monstera</span>
            <p>Selamat datang di Florahunt, tempat magis yang mengundang anda merayakan setiap momen istimewa dengan keindahan tanaman. Mari bersama-sama hiasi kehidupan dengan pesona bunga yang tak terlupakan.</p>
            <a href="#products" class="btn"> Buy Now</a>
        </div>
     </section>


    <!--Home section ends-->


 
<!-- About section starts -->

<!-- About section starts -->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="content">
            <div class="centered-text">
                <h3>Best Selling Plants</h3>
                <a href="#products" class="btn">Learn More</a>
            </div>
        </div>
        <div class="image-grid">
            <!-- Grid Item 1 -->
            <div class="grid-item">
                <img src="/images/1.1.png" alt="Plant 1">
            </div>
            <!-- Grid Item 2 -->
            <div class="grid-item">
                <img src="/images/1.2.png" alt="Plant 2">
            </div>
            <!-- Grid Item 3 -->
            <div class="grid-item">
                <img src="/images/1.3.png" alt="Plant 3">
            </div>
            <!-- Grid Item 4 -->
            <div class="grid-item">
                <img src="/images/1.4.png" alt="Plant 4">
            </div>
        </div>
    </div>
</section>
<!--About section ends-->


<!--icons section starts-->

<section class="icons-container">
    <div class="icons">
        <img src="/images/icon-1.png" alt="">
        <div class="info">
            <h3>Free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gits</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="/images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
</section>

<!--icons section ends-->

<!--Products section stars-->

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

        {{-- <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="/images/img-7.jpg" alt=""> --}}
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            <div class="content">
                <h3>Tulip Orange</h3>
                <div class="price">Rp. 102.500 <span>Rp. 125.000</span></div>
            </div>
        </div> --}}

        {{-- <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="/images/img-8.jpg" alt=""> --}}
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            <div class="content">
                <h3>Tulip Merah</h3>
                <div class="price">Rp. 112.500 <span>Rp. 125.000</span></div>
            </div>
        </div> --}}

        {{-- <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="/images/img-9.jpg" alt=""> --}}
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            <div class="content">
                <h3>Tulip Merah</h3>
                <div class="price">Rp. 118.750 <span>Rp. 125.000</span></div>
            </div>
        </div> --}}
{{-- 
        <div class="box">
            <span class="discount">-11%</span>
            <div class="image">
                <img src="/images/img-10.png" alt=""> --}}
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            <div class="content">
                <h3>Rustic Peony</h3>
                <div class="price">Rp. 102.350 <span>Rp. 115.000</span></div>
            </div>
        </div> --}}

        {{-- <div class="box">
            <span class="discount">-9%</span>
            <div class="image">
                <img src="/images/img-11.png" alt="">
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            <div class="content">
                <h3>Tulip Pink</h3>
                <div class="price">Rp. 113.750 <span>Rp. 125.000</span></div>
            </div>
        </div>  --}}

        {{-- <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="/images/img-12.png" alt="">
                {{-- <div class="icons">
                    <a href="#" class="fas fa-heart" style="text-decoration: none;"></a>
                    <a href="#" class="cart-btn" style="text-decoration: none;">add to cart</a>
                    <a href="#" class="fas fa-share" style="text-decoration: none;"></a>  
                </div> --}}
            {{-- </div>
            {{-- {{-- <div class="content">
                <h3>Mawar ungu</h3>
                <div class="price">Rp. 156.750 <span>Rp. 165.000</span></div>
            </div> 
        </div> --}}
    </div>
</section>
<!--Products section ends-->


<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading">What Our Clients <span>Say About Us</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Never regret ordering flowers here because the delivery is fast so the flowers are still fresh."</p>
            <div class="user">
                <img src="/images/pic-1.png" alt="">
                <div class="user-info">
                    <h3>@Mazeluv</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"The flowers here are very fresh and the price is very affordable besides that the admin is also very friendly."</p>
            <div class="user">
                <img src="/images/pic-2.png" alt="">
                <div class="user-info">
                    <h3>@Ditto</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        {{-- <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Website Hanza Florist memberikan pengalaman belanja bunga yang tak terlupakan; kualitas produk yang luar biasa, desain yang indah, dan pelayanan pelanggan yang ramah membuat setiap kunjungan online saya menjadi momen istimewa."</p>
            <div class="user">
                <img src="/images/pic-3.png" alt="">
                <div class="user-info">
                    <h3>Abdullahi Ali</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>"Hanza Florist tidak hanya menawarkan bunga yang cantik, tetapi juga menyuguhkan pengalaman berbelanja yang menyenangkan; saya sangat terkesan dengan kemudahan pesanannya, pilihan rangkaian yang menawan, dan ketepatan waktu pengirimannya."</p>
            <div class="user">
                <img src="/images/pic-4.jpg" alt="">
                <div class="user-info">
                    <h3>Sofia wick</h3>
                    <span>Happy Customers</span>
                </div>
            </div> --}}
            {{-- <span class="fas fa-quote-right"></span>
        </div> --}}
    </div>
</section>

<!--review section ends-->



</body>
</html> 
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pesanan</title>
</head>
<body>

    <h2 class="fw-bold">Kotak Pesanan</h2>
    <form method="post" action="{{route('contacts.store')}}" onsubmit="return validateForm()">
        {{csrf_field()}}
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="inputnama" placeholder="Nama" name="nama">
            <label for="inputname">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email"> 
            <label for="inputemail" class="form-label">Email</label> 
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px;" name="kotaksaran"></textarea>
            <label for="floatingTextarea2">Pesanan</label>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form> --}}

    {{-- <script>
        function validateForm() {
            var nama = document.getElementById('inputnama').value;
            var email = document.getElementById('inputemail').value;
            var pesan = document.getElementById('floatingTextarea2').value;

            if (nama === "" || email === "" || pesan === "") {
                alert('Harap isi semuanya sebelum mengirim formulir!');
                return false;
            }

            return true;
        }
    </script> --}}

    
<!DOCTYPE html>
<html>
<head>
	{{-- <!-- *******  Link To CSS Style Sheet  ******* -->
	<link rel="stylesheet" type="text/css" href="style.css"> --}}

	<!-- *******  Font Awesome Icons Link  ******* -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- *******  Link To Goggle Fonts  *******  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Section</title>
</head>
<body>
	<div class="container">
		<main class="row">
			
			<!--  *******   Left Section (Column) Starts   *******  -->

			<section class="col left">
				
				<!--  *******   Title Starts   *******  -->

				<div class="contactTitle">
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>+00 110 111 00</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>name.tutorial@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>X Street, Y Road, San Fransisco</span>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->

				<div class="socialMedia">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>

				<!--  *******   Social Media Ends   *******  -->

			</section>

			<!--  *******   Left Section (Column) Ends   *******  -->

			<!--  *******   Right Section (Column) Starts   *******  -->

			<section class="col right">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm">
					
					<div class="inputGroup halfWidth">
						<input type="text" name="" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" name="" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="text" name="" required="required">
						<label>Subject</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea required="required"></textarea>
						<label>Say Something</label>
					</div>

					<div class="inputGroup fullWidth">
						<button>Send Message</button>
					</div>

				</form>

				<!--  *******   Form Ends   *******  -->
			</section>

			<!--  *******   Right Section (Column) Ends   *******  -->

		</main>
	</div>
</body>
</html>


@endsection 
       

{{-- untuk memasukkan home florist serta form saran --}}