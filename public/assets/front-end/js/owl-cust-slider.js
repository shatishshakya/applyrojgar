
$('#owl-carouselsss').owlCarousel({
    loop: true,
    items: 5,
    slideSpeed: 1500,
    nav: true,
    responsiveClass: true,
    autoplay: true, 
    dots: true,
    loop: true,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    responsive: {
        768: {
          items: 3,
        }
    }
})

jQuery("#owl-carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 0,
    responsiveClass: true,
    autoHeight: true,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
  
      600: {
        items: 3
      },
  
      1024: {
        items: 4
      },
  
      1366: {
        items: 5
      }
    }
  });

    