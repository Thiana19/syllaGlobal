import './bootstrap';

// Initialize Revolution Slider with split layout
$(document).ready(function() {
    if($('.rev_slider_wrapper #rev_slider_one').length){
        $("#rev_slider_one").revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            delay:5000,
            navigation: {
                arrows:{enable:true} 
            },
            responsiveLevels:[1920,1280,1024,768,480],
            gridwidth:[1170,950,780,600,320],
            gridheight:[550,550,500,600,600], // Adjusted for better mobile experience
            disableProgressBar:"on",
            startDelay:0,
            onHoverStop:"off"
        });
    }
    
    // Handle responsive layout adjustments
    function adjustMobileLayout() {
        if ($(window).width() <= 991) {
            // On mobile, ensure the first slide shows image first then text
            $('.slider-container').each(function(index) {
                var $container = $(this);
                var $imageSide = $container.find('.image-side');
                var $colorSide = $container.find('.color-side');
                
                // Always show image first on mobile
                $container.prepend($imageSide);
                $container.append($colorSide);
            });
        } else {
            // On desktop, restore original order
            $('.slider-container').each(function(index) {
                var $container = $(this);
                var $imageSide = $container.find('.image-side');
                var $colorSide = $container.find('.color-side');
                
                // Second slide should have color side first
                if (index % 2 !== 0) {
                    $container.prepend($colorSide);
                    $container.append($imageSide);
                } else {
                    $container.prepend($imageSide);
                    $container.append($colorSide);
                }
            });
        }
    }
    
    // Run on page load and window resize
    adjustMobileLayout();
    $(window).resize(function() {
        adjustMobileLayout();
    });
});


$(document).ready(function() {
    $(".sponsors-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        smartSpeed: 500, // Faster animation speed
        autoplay: true,
        autoplayTimeout: 2000, // Faster autoplay (2 seconds instead of default 5)
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2 // Show 2 items on mobile
            },
            600: {
                items: 3 // Show 3 items on tablet
            },
            768: {
                items: 4 // Show 4 items on small desktop
            },
            992: {
                items: 5 // Show 5 items on larger screens
            },
            1200: {
                items: 6 // Show 6 items on extra large screens
            }
        }
    });
});