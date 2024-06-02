<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatibe" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layoutstyle.css')}}">
    <script src="asset/jquery/jquery-3.7.1.min.js"></script>
    @yield('header')
</head> 
<body> 
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/t1.jpg')}}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2"> Gay Quán
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav2">
                        <form class="d-flex ms-5"> 
                            <input class="form-control me-2" type="search" style="width: 300px;" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="fas fa-search"></i> 
                            </button>
                        </form>
                       <!-- Dang nhap -->
                        <div class="nav-item dropdown ms-5 mt-2"> 
                            <a style="color: white; margin-right: 30px; margin-bottom: 20px" >
                                <i class="far fa-user me-0"></i>
                                Đăng nhập
                            </a>
                            <a style="color: white;">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                Số điện thoại
                            </a>
                            
                            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <form class="px-4 py-3">
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </li>
                            </ul> -->
                        </div>
                      <!-- Dang nhap ket thuc-->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="color: white;"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-heart" style="color: white;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thực đơn của ricon
                        </a>
                        <div class="dropdown-divider"></div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Món hấp</a></li>
                            <li><a class="dropdown-item" href="#">Món xào</a></li>
                            <li><a class="dropdown-item" href="#">Món cay cho ricon</a></li>
                        </ul>
                        <div class="dropdown-divider"></div> 
                    </li> 
                    <li class="nav-item border-bottom" style="margin-left: 350px;">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        
                    </li>
                    <li class="nav-item border-bottom" >
                        <a class="nav-link" href="#">Món ăn</a>
                        
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="#">Giới thiệu</a>
                         
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="#">Điều khoản dịch vụ</a>
                        
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="#">Thắc mắc</a>
                        
                    </li>
                            
                </ul>
              </div>
            </div>
          </nav>
          
          
      <!-- Banner Section -->
      <div id="banner" style="background-image: url('{{asset('img/banner.png')}}')">
        <div class="box-left">
            <h2>
                <span>THỨC ĂN</span>
                <br>
                <span>THƯỢNG HẠNG</span>
            </h2>
            <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                hoàn hảo nhất</p>
            <button>Mua ngay</button>
        </div>
        <div class="box-right">
            <img src="{{asset('img/img_1.png')}}" alt="">
            <img src="{{asset('img/img_2.png')}}" alt="">
            <img src="{{asset('img/img_3.png')}}" alt="">
        </div>
        <div class="to-bottom">
            <a href="">
                <img src="{{asset('img/to_bottom.png')}}" alt="">
            </a>
        </div>
    </div>
    
      <!-- Products Section -->
      <div class="product">    
        <div class="row">
            <!-- Danh sách sản phẩm dọc -->
           
            <div id="wp-products">
                <h2 style="color: gray; border-bottom: 1px solid gray; ">SẢN PHẨM CỦA CHÚNG TÔI </h2>
                <ul id="list-products">
                    <div class="item">
                        <img src="{{asset('img/product_1.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
    
                    <div class="item">
                        <img src="{{asset('img/product_2.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
    
    
                    <div class="item">
                        <img src="{{asset('img/product_3.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/product_4.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
    
                    <div class="item">
                        <img src="{{asset('img/product_5.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
    
                    <div class="item">
                        <img src="{{asset('img/product_6.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/product_3.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/product_2.png')}}" alt="">
                        <div class="stars">
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                            <span>
                                <img src="{{asset('img/star.png')}}" alt="">
                            </span>
                        </div>
    
                        <div class="name">Món ăn 1</div>
                        <div class="desc">Đồ ngon</div>
                        <div class="price">500.000 VNĐ</div>
                    </div>
                </ul>
                <div class="list-page">
                    <div class="item">
                        <a href="">1</a>
                    </div>
                    <div class="item">
                        <a href="">2</a>
                    </div>
                    <div class="item">
                        <a href="">3</a>
                    </div>
                    <div class="item">
                        <a href="">4</a>
                    </div>
                </div>
            </div>
            <h2 style="color: gray; border-bottom: 1px solid gray; margin-bottom: 70px;">SẢN PHẨM MỚI </h2>
                
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_1.png')}}" class="d-block w-100" alt="Product 1">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                    <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>
                        
                          <h5>Product 1</h5>
                          <p>Short description of product 1.</p>
                       
                      </div>
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_2.png')}}" class="d-block w-100" alt="Product 2">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                            <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>
                        
                          <h5>Product 2</h5>
                          <p>Short description of product 2.</p>
                     
                      </div>
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_3.png')}}" class="d-block w-100" alt="Product 3">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                            <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>

                          <h5>Product 3</h5>
                          <p>Short description of product 3.</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_4.png')}}" class="d-block w-100" alt="Product 4">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                            <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>
                        
                          <h5>Product 4</h5>
                          <p>Short description of product 4.</p>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_5.png')}}" class="d-block w-100" alt="Product 5">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                            <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>
                        
                          <h5>Product 5</h5>
                          <p>Short description of product 5.</p>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="product-container">
                          <img src="{{asset('img/product_6.png')}}" class="d-block w-100" alt="Product 6">
                          <div class="product-overlay">
                            <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                            <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                          </div>
                        </div>
                        
                          <h5>Product 6</h5>
                          <p>Short description of product 6.</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <section class="sale-products">
              <div class="container">
                <h2 style="color: gray;border-bottom: 1px solid gray; margin-bottom: 70px; margin-top: 30px;">SẢN PHẨM GIẢM GIÁ HÔM NAY </h2>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="product-item">
                          
                              <img src="{{asset('img/product_1.png')}}" alt="Product 1" width="80" height="200">
                              <div class="product-details">
                                  <h3 style="text-decoration: none;color: grey;">Món giảm giá</h3>
                                  <p style="color: grey;" class="price">$99.99 <span class="discount">Sale - 20%</span></p>
                                  <div class="actions">
                                    <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                    <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                                  </div>
                              </div>
                          
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="product-item">
                        
                            <img src="{{asset('img/product_2.png')}}" alt="Product 1" width="80" height="200">
                            <div class="product-details">
                                <h3 style="text-decoration: none;color: grey;">Món giảm giá</h3>
                                <p style="color: grey;" class="price">$99.99 <span class="discount">Sale - 20%</span></p>
                                <div class="actions">
                                  <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                  <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                                  
                                </div>
                            </div>
                        
                    </div>
                </div>
                      <div class="col-md-4">
                        <div class="product-item">
                            
                                <img src="{{asset('img/product_5.png')}}" alt="Product 1" width="80" height="200">
                                <div class="product-details">
                                    <h3 style="text-decoration: none;color: grey;">Món giảm giá</h3>
                                    <p style="color: grey;" class="price">$99.99 <span class="discount">Sale - 20%</span></p>
                                    <div class="actions">
                                      <button class="btn add-to-cart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                      <button class="btn add-to-favorites"><i class="fas fa-heart"></i> Yêu thích</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
              </div>
          </section>
            <section class="customer-reviews">
              <h2>Customer Reviews</h2>
              <div class="review">
                  <div class="review-box animated fadeIn">
                      <h3>Minh Trí</h3>
                      <p>Giao hàng rất nhanh - Fast Delivery</p>
                      <p>Giày rất ôm chân, úp mu rất sướng. Vất cỏ tín như anh 7, rê rắt cứ như Neymar và qua người như Messi</p>
                  </div>
                  <div class="review-box animated fadeIn">
                      <h3>Công Long</h3>
                      <p>Tư vấn nhiệt tình - Friendly Support</p>
                      <p>Mua giày về mà Barca thua nên quá buồn, shop nhiệt tình đánh giá 5 sao "Mi-chê-lin" </p>
                  </div>
                  <div class="review-box animated fadeIn">
                      <h3>Trí Vỹ</h3>
                      <p>Dịch vụ rất yên tâm! - Very Reliable Service</p>
                      <p>Do đá banh với ní này mà tui phải đi cắt kính mới nên tui buồn quá, thực sự quá buồn</p>
                  </div>
                  <!-- Thêm các đánh giá khác ở đây -->
              </div>
          </section>
        </div>
        
    </div>
      <!-- Footer -->
      <footer>
        <div class="footer-links">
            <a href="#">Trang chủ</a>
            <a href="#">Sản phẩm</a>
            <a href="#">Dịch vụ</a>
            <a href="#">Liên hệ</a>
        </div>
        <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="footer-copyright">© 2024 Tên Công Ty. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const carouselElement = document.querySelector('#productCarousel');
      const carouselInstance = new bootstrap.Carousel(carouselElement, {
        interval: 3000,
        pause: 'hover'
      });
    </script>
</body>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
</html>