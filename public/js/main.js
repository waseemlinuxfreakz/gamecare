// News Slider
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".news-slider ul");
  const prevButton = document.querySelector(".prev-button");
  const nextButton = document.querySelector(".next-button");
  const slideWidth = slider.clientWidth;
  let currentIndex = 0;

  // Function to enable or disable both buttons
  function toggleButtons() {
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex === slider.children.length - 1;
  }

  prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
    toggleButtons();
  });

  nextButton.addEventListener("click", () => {
    if (currentIndex < slider.children.length - 1) {
      currentIndex++;
      slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
    toggleButtons();
  });

  // Initialize the button states
  toggleButtons();
});


// Sticky Header
const header = document.querySelector(".main_header");
const stickyOffset = header.offsetTop;

function handleScroll() {
    if (window.pageYOffset > stickyOffset) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

window.onscroll = handleScroll;


// Slider 
$(document).ready(function() {
    // Initialize the Slick Carousel
    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false, // Disables infinite loop
        adaptiveHeight: true, // Adjust slide height
            responsive: [
                {
                    breakpoint: 768, // Define the breakpoint where settings change
                    settings: {
                        slidesToShow: 1, // Number of slides to show at this breakpoint
                        slidesToScroll: 1, // Number of slides to scroll at this breakpoint
                    }
                },
                {
                    breakpoint: 992, // Define another breakpoint if needed
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });

    // Update the current slide and total slides
    $('.carousel').on('afterChange', function(event, slick, currentSlide) {
        $('.current-slide').text(currentSlide + 1);
    });
});

// Videos Slider
$(document).ready(function() {
    // Initialize the Slick Carousel
    $('.video_carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false, // Disables infinite loop
        adaptiveHeight: true, // Adjust slide height
            responsive: [
                {
                    breakpoint: 768, // Define the breakpoint where settings change
                    settings: {
                        slidesToShow: 1, // Number of slides to show at this breakpoint
                        slidesToScroll: 1, // Number of slides to scroll at this breakpoint
                    }
                },
                {
                    breakpoint: 992, // Define another breakpoint if needed
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });

    // Update the current slide and total slides
    $('.video_carousel').on('afterChange', function(event, slick, currentSlide) {
        $('.current-slide').text(currentSlide + 1);
    });
});

// Feature Tournaments

$(document).ready(function() {
    // Initialize the Slick Carousel
    $('.featured_t_carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false, // Disables infinite loop
        adaptiveHeight: true, // Adjust slide height
        responsive: [
                {
                    breakpoint: 768, // Define the breakpoint where settings change
                    settings: {
                        slidesToShow: 1, // Number of slides to show at this breakpoint
                        slidesToScroll: 1, // Number of slides to scroll at this breakpoint
                    }
                },
                {
                    breakpoint: 992, // Define another breakpoint if needed
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }
                // Add more breakpoints and settings as needed
            ]
        });

    // Update the current slide and total slides
    $('.featured_t_carousel').on('afterChange', function(event, slick, currentSlide) {
        $('.current-slide').text(currentSlide + 2);
    });
});

// Login Form Elements

    // Get references to the login_form and forgot_email_box elements
    const loginForm = document.querySelector('.different_area');
    const forgotEmailBox = document.querySelector('.forgot_email_box');
    const check_email = document.querySelector('.check_email');

    // Get a reference to the "Forgot your password?" link
    const forgotPasswordLink = document.getElementById('forgotPasswordLink');
    const send_email = document.getElementById('send_email');

    // Add a click event listener to the link
    forgotPasswordLink.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the link from navigating to a new page
        loginForm.style.display = 'none'; // Hide the login_form
        forgotEmailBox.style.display = 'block'; // Show the forgot_email_box
    });

    // Add a click event listener to the link
    send_email.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the link from navigating to a new page
        forgotEmailBox.style.display = 'none'; // Hide the login_form
        check_email.style.display = 'block'; // Show the forgot_email_box
    });

    $("#update_pwd").click(function(){
      $(".sign_with").hide();
      $(".success_password_message").show();
    });

document.getElementById('fileInput').addEventListener('change', function() {
    var fileInput = this;
    var selectedFiles = fileInput.files;

    if (selectedFiles.length > 0) {
        var fileName = selectedFiles[0].name;
        console.log('New input added!');
    }
});


function showDiv() {
   document.getElementById('searchDropdown').style.display = "block";
}