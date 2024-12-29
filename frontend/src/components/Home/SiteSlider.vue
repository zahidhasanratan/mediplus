<template>
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider" :style="{ transform: `translateX(-${activeIndex * 100}%)` }">
            <!-- Start Single Slider -->
            <div
                v-for="(slider, index) in sliders"
                :key="index"
                class="single-slider"
                :style="{ backgroundImage: 'url(https://vue1.zahid.com.bd/login/uploads/slider/' + slider.image + ')' }">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>
                                    We Provide <span class="highlight">Medical</span> Services That You Can
                                    <span class="highlight">Trust!</span>
                                </h1>
                                <p>{{ slider.title }}</p>
                                <div class="button">
                                    <router-link to="/contact" class="btn btn-primary">Contact Us</router-link>
                                    <router-link to="/contact" class="btn btn-dark">About Us</router-link>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>

        <!-- Arrows for navigation -->
        <button @click="prevSlide" class="arrow-left">&#10094;</button>
        <button @click="nextSlide" class="arrow-right">&#10095;</button>
    </section>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SiteSlider",
        data() {
            return {
                sliders: [],  // This will store the data fetched from the API
                activeIndex: 0  // To track the current slide
            };
        },
        mounted() {
            this.getSliders();  // Fetch slider data when the component is mounted
            this.startAutoSlide();  // Start the slider
        },
        methods: {
            getSliders() {
                axios.get('https://vue1.zahid.com.bd/login/api/slider') // Adjust the URL if necessary
                    .then(response => {
                        this.sliders = response.data;  // Store the API response in the sliders array
                    })
                    .catch(error => {
                        console.error("Error fetching slider data:", error);
                    });
            },
            startAutoSlide() {
                setInterval(() => {
                    this.activeIndex = (this.activeIndex + 1) % this.sliders.length;  // Cycle through the slides
                }, 3000);  // Change slide every 3 seconds
            },
            prevSlide() {
                this.activeIndex = (this.activeIndex - 1 + this.sliders.length) % this.sliders.length;  // Go to previous slide
            },
            nextSlide() {
                this.activeIndex = (this.activeIndex + 1) % this.sliders.length;  // Go to next slide
            }
        }
    };
</script>

<style scoped>
    .slider .single-slider .text {
        margin-top: 180px !important;
    }
    .slider {
        position: relative;
        height: 600px;
        overflow: hidden;
    }

    .hero-slider {
        display: flex;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease-in-out;  /* Slide transition */
    }

    .single-slider {
        flex: 0 0 100%;  /* Each slide takes 100% of the width */
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .text {
        position: absolute;
        top: 60%; /* Adjust this value to move the text lower */
        transform: translateY(-50%);
        color: #333;
        max-width: 600px;
        margin: 0 auto; /* Center the text */
        padding: 20px; /* Add padding to give breathing room */
    }

    .text h1 {
        font-size: 50px;
        line-height: 1.2;
        color: #333;
        font-weight: bold;
        margin-bottom: 20px; /* Add margin for spacing */
    }

    .text h1 .highlight {
        color: #007bff; /* Blue color for highlighted text */
    }


    .text p {
        margin: 20px 0;
        font-size: 18px;
        color: #666;
    }

    .button a {
        margin-right: 10px;
        padding: 10px 30px;
        border-radius: 50px;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-dark {
        background-color: #333;
        color: #fff;
    }

    /* Arrow Buttons */
    .arrow-left, .arrow-right {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);  /* Semi-transparent background */
        color: #fff;
        font-size: 24px;
        border: none;
        cursor: pointer;
        padding: 10px;
        z-index: 10;
        transition: background-color 0.3s;
    }

    .arrow-left {
        left: 10px;
    }

    .arrow-right {
        right: 10px;
    }

    .arrow-left:hover, .arrow-right:hover {
        background-color: rgba(0, 0, 0, 0.7);  /* Darker on hover */
    }
</style>
