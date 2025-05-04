<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-CONTACT</title>
    <link rel="stylesheet" href="style.css">
    <?php require('inc/link.php'); ?>
   
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">CONTACT US</h2>
        
        <div class="h-line bg-dark">

        </div>
        <p class="text-center mt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Cupiditate fugit, voluptate distinctio vel magni  <br> esse reprehenderit voluptatem sed sit 
            voluptatum enim error similique cumque repellat ea nisi, eligendi corporis earum.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-whitye rounded shadow p-4">
                    <h5>Address</h5>
                    <a href="#">
                        <iframe class="w-100 rounded" height="320px" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.718408421564!2d104.88143487481739!3d11.572033088629263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095130ff8538af%3A0x781a871e72e881!2z4Z6f4Z624Z6A4Z6b4Z6c4Z634Z6R4Z-S4Z6Z4Z6b4Z-Q4Z6ZIOGelOGfgOGem-GelOGfkuGemuGetuGemQ!5e0!3m2!1skm!2skh!4v1746210341611!5m2!1skm!2skh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <i class="bi bi-geo-alt-fill"></i> Toul sangkae,Phnom Penh, Cambodia
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +88511831196" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +88511831196
                    </a>
                    <br>
                    <a href="email: yurin2t2t2t@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i> yurin2t2t2t@gmail.com
                    </a>
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>
                        <i class="bi bi-instagram me-1"></i>
                        <i class="bi bi-github me-1"></i>
                        </span>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-whitye rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mb-3">
                            <label  class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" style="font-weight:500;">email</label>
                            <input type="email" class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" rows="7" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark shadow-none custom-bg text-white mt-4">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('inc/footer.php'); ?>
    <?php require('inc/loginon.php'); ?>


    



    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
  </script> -->
</body>
</html>