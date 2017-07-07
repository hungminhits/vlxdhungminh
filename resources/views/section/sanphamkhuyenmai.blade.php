<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>
    <style>
        .menu {
            text-align: center;
        }
        
        .slick-prev:before, .slick-next:before  {
            color: gray ! important;
        }
    </style>
    
<section class="awe-section-7"> 
  <section class="list_style_product ">
      <div class="new_title_color center" style="margin-bottom: 120px;">
          <h2>
            <span>
              
            </span>
            <a href="san-pham-khuyen-mai" title="Sản phẩm khuyến mãi">Sản phẩm khuyến mãi</a
            ><span>
              
            </span>
          </h2>
      </div>
      <div class="container">
        <div id="featured-slider-2" class="row">
          <div class="slider-items slider-width-col4 owl-carousel owl-theme" style="opacity: 1; display: block;">
              
             
                  <div class="slideshow">
                    @foreach($products  as $product)
                      <div class="owl-item" style="width: 200px"><img src="image/{{$product->image}}" style="padding-right: 20px">{{$product->name}}</div>
                         

                    @endforeach
                  </div>
              
              <div class="owl-controls clickable">
                  <div class="owl-buttons">
                      <div class="owl-prev">
                          <i class="fa fa-angle-left"></i>
                      </div>
                      <div class="owl-next">
                          <i class="fa fa-angle-right"></i>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </section>
</section>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"/></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".slideshow").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
    $(".menu a").click(function(e){
        e.preventDefault();
        slideIndex = $(this).index();
        $( '.slideshow' ).slickGoTo( parseInt(slideIndex) );
    });
    $('.fa fa-angle-left').click(function()
    {
        $( '.slideshow' ).css('right',1000)
        
    });
     $('.fa fa-angle-right').click(function()
    {
        $( '.slideshow' ).css('right',1000)
        
    });
    
});
</script>