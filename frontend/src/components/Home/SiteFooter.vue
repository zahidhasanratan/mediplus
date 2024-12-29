<template>
    <!-- Footer Area -->
    <footer id="footer" class="footer ">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <!-- Use v-html to render HTML content from the API -->
                            <p v-html="aboutText"></p> <!-- Dynamically display HTML content -->
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Location</h2>
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.4993006025!2d90.2548719436871!3d23.78106723990545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1726420252602!5m2!1sen!2sbd" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Newsletter</h2>
                            <p>Subscribe to our newsletter to get all our news in your inbox. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Your email address'" required="" type="email">
                                <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>© Copyright 2018 | All Rights Reserved by <a href="#" target="_blank">esoft.com.bd</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SiteFooter",
        data() {
            return {
                aboutText: "Loading...",  // Default text before API response
            };
        },
        methods: {
            fetchAboutText() {
                axios.get('https://vue1.zahid.com.bd/login/api/object2')  // Replace with the correct API endpoint
                    .then(response => {
                        const data = response.data[0];  // Assuming the response is an array of objects
                        this.aboutText = data.short || "Content not available";  // Bind the 'short' field from the API
                    })
                    .catch(error => {
                        console.error("Error fetching about text:", error);
                    });
            }
        },
        mounted() {
            // Fetch the 'about us' text when the component is mounted
            this.fetchAboutText();
        }
    };
</script>

<style scoped>
    /* Add custom styles here if necessary */
</style>
