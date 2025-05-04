<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-HOME</title>
    <link rel="stylesheet" href="style.css">
    <?php require('inc/link.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="container-fluid px-lg-4 mt-4">
        
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/IMG_15372.png" class="w-100 d-block"  />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_62045.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_93127.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_99736.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <div class="container availability-form" >
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-item-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select  shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mb-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h2 class=" pt-4 mb-4 text-center fw-bold ">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="img/IMG_11892.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Bathrom
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span> 
                            
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room heater
                            </span> 

                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        <!-- <p class="card-text">Some quick examptext to build on the card title and make up the bulk of the card's content.</p> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="img/IMG_11892.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Bathrom
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span> 
                            
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room heater
                            </span> 

                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        <!-- <p class="card-text">Some quick examptext to build on the card title and make up the bulk of the card's content.</p> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="img/IMG_11892.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">$200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Bathrom
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span> 
                            
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room heater
                            </span> 

                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        <!-- <p class="card-text">Some quick examptext to build on the card title and make up the bulk of the card's content.</p> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>

                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-blod shadow-none ">More Rooms >>></a>
            </div>
        </div>
    </div>

    <h2 class=" pt-4 mb-4 text-center fw-bold ">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <!-- <i class="bi bi-wifi" class="wifi" >Wi-Fi</i> -->
                <img src="img/features/wifi-logo.svg" width="80px">
                <h5>Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <!-- <i class="bi bi-wifi" class="wifi" >Wi-Fi</i> -->
                <img src="img/features/free-star-icon-346-thumb.png" width="80px">
                <h5>Star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <!-- <i class="bi bi-wifi" class="wifi" >Wi-Fi</i> -->
                <img src="img/features/wifi-logo.svg" width="80px">
                <h5>Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <!-- <i class="bi bi-wifi" class="wifi" >Wi-Fi</i> -->
                <img src="img/features/wifi-logo.svg" width="80px">
                <h5>Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <!-- <i class="bi bi-wifi" class="wifi" >Wi-Fi</i> -->
                <img src="img/features/wifi-logo.svg" width="80px">
                <h5>Wi-Fi</h5>
            </div>
        </div>
    </div>

    <h2 class=" pt-4 mb-4 text-center fw-bold ">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonails">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="img/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa,  
                            Sed laborum aliquid enim voluptates quaerat numquam?
                        </p>
                        <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="img/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa,  
                            Sed laborum aliquid enim voluptates quaerat numquam?
                        </p>
                        <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="img/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa,  
                            Sed laborum aliquid enim voluptates quaerat numquam?
                        </p>
                        <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
    </div>

    <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold ">REACH US</h2>
    <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.718408421564!2d104.88143487481739!3d11.572033088629263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095130ff8538af%3A0x781a871e72e881!2z4Z6f4Z624Z6A4Z6b4Z6c4Z634Z6R4Z-S4Z6Z4Z6b4Z-Q4Z6ZIOGelOGfgOGem-GelOGfkuGemuGetuGemQ!5e0!3m2!1skm!2skh!4v1746210341611!5m2!1skm!2skh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +88511831196" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +88511831196
                    </a>
                    <br>
                    <a href="tel: +88511831196" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +88511831196
                    </a>
                    
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                        
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram"></i>Instagram
                        </span>
                        
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-github"></i>Github
                        </span>
                    </a>

                    
                </div>
            </div>
    </div>

    
    <?php require('inc/footer.php'); ?>
    <?php require('inc/loginon.php'); ?>


    <!-- <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <!-- <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/IMG_15372.png" class="w-100 d-block"  />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_62045.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_93127.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="img/IMG_99736.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div> --> -->



    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay: 3500,
        disableOnInteraction:false,
      }
    });

    var swiper = new Swiper(".wiper-testimonails", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>