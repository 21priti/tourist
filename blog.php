
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>


    <style>
        #main{
            background-color: rgb(21, 21, 74);
        }
        #img{
            height:400px;
            width: 450px;
        }
  

        #slider-wrapper {
            position: relative;
        }


        .slider {
            display: flex;
            transition: transform 1s ease-in-out;
        }
        .container-fluid {
            flex: 0 0 100%; /* Each slide takes full width */
            
        }


        </style>
</head>
<body>
<?php
require_once "navbar.php"
?>

<div id="slider-wrapper">
<div class="slider"> 
    <div class="container-fluid p-4 mt-5 ms-3" id="main">
        <div class="row ">
            <div class="col-md-8 py-5 ps-4">
            <h1 class="text-light fw-bold">A Journey Beyond Expectations</h1>
                <p class="fs-5 fst-italic text-light mt-5">
                    "Using this website has been a breath of fresh air! The interface is clean, modern, and incredibly easy to navigate. 
                    I found everything I needed without any confusion or delays. Every detail feels thoughtfully crafted, from the layout to
                     the functionality, making it clear that customer satisfaction is at the core of what they do. 
                    It's rare to find a platform that exceeds expectations at every step, but this one does just that."
    </p>
    <a href="#" class="btn btn-warning mt-3 text-decoration-none rounded-3 fw-bold fs-4 p-2">See More</a>
</div>
<div class="col-md-4">
    <image src="./image/profilepic4.webp" class=" img-fluid rounded-5" id="img">
</div>
</div>
    </div>
<div class="container-fluid p-4 mt-5 ms-3" id="main">
<div class="row">
            <div class="col-md-8 py-5 ps-4">
            <h1 class="text-light fw-bold">What Our Customers Love About Us</h1>
                <p class="fs-5 fst-italic text-light mt-5">
                    "There’s so much to love about this platform! The customer support team is nothing short of amazing—they’re quick to 
                    respond and genuinely helpful, no matter the issue. The services offered are not only reliable but also tailored to meet my 
                    needs, which saves me so much time and effort. What stands out the most is how consistent the quality is. 
                    Whether it’s my first visit or my tenth, I’ve always had a smooth and enjoyable experience."
    </p>
    <a href="#" class="btn btn-warning mt-3 text-decoration-none rounded-3 fw-bold fs-4 p-2">See More</a>
</div>
<div class="col-md-4">
    <image src="./image/profilepic3.webp" class=" img-fluid rounded-5" id="img">
</div>
</div>
</div>
<div class="container-fluid p-4 mt-5 ms-3 " id="main">
<div class="row">
            <div class="col-md-8 py-5 ps-4">
            <h1 class="text-light fw-bold">Real Stories, Real Impact</h1>
                <p class="fs-5 fst-italic text-light mt-5">
                    "This platform has truly transformed how I approach my daily tasks. It’s not just a service—it feels like a partner that 
                    understands what I need and delivers it effortlessly. I was initially skeptical about trying something new, but from the very 
                    first use, I realized this was something special. 
                    It’s efficient, dependable, and designed with care. For anyone looking for a reliable and impactful service, this is it."
    </p>
    <a href="#" class="btn btn-warning mt-3 text-decoration-none rounded-3 fw-bold fs-4 p-2">See More</a>
</div>
<div class="col-md-4">
    <image src="./image/profilepic2.avif" class=" img-fluid rounded-5" id="img">
</div>
</div>
</div>
<div class="container-fluid p-4 mt-5 ms-3" id="main">
<div class="row">
            <div class="col-md-8 py-5 ps-4">
            <h1 class="text-light fw-bold">Your Voice, Our Inspiration</h1>
                <p class="fs-5 fst-italic text-light mt-5">
                    "What I admire most about this platform is how much they listen to their users. I’ve seen updates that directly reflect customer 
                    feedback, showing they truly value the community they serve. It feels empowering to know that my opinions matter and that they actively work to improve based on real input. This kind of connection with users is rare, and it’s 
                    one of the reasons I trust and recommend their services to everyone I know.."
    </p>
    <a href="#" class="btn btn-warning mt-3 text-decoration-none rounded-3 fw-bold fs-4 p-2">See More</a>
</div>
<div class="col-md-4">
    <image src="./image/profilepic1.avif" class=" img-fluid rounded-5" id="img">
</div>
</div>
</div>

    </div>
    </div>
<script>
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".container-fluid");
    let currentIndex = 0;

    function slideNext() {
    // Calculate the new translateX value
        const offset = -(currentIndex * 100);
        slider.style.transform = `translateX(${offset}%)`;

        // Move to the next slide, loop back if at the end
        currentIndex = (currentIndex + 1) % (slides.length-1);
}

    // Start the sliding effect with a time interval
    setInterval(slideNext, 2000); // Change slide every 3 seconds
</script>

</body>
</html>
