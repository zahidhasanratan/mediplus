<template>
    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <!-- Dynamic Title and Content from API -->
                        <h3>{{ whoWeAreTitle }}</h3>
                        <p v-html="whoWeAreContent"></p>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SiteWhyChoose",
        data() {
            return {
                whoWeAreTitle: "Loading...",    // Initial placeholder value for the title
                whoWeAreContent: "Loading...",  // Initial placeholder value for the content
            };
        },
        methods: {
            fetchWhoWeAreContent() {
                axios.get('https://vue1.zahid.com.bd/login/api/object1')  // API endpoint for dynamic content
                    .then(response => {
                        const data = response.data[0];  // Assuming the response is an array with one object
                        this.whoWeAreTitle = data.title || "Default Title";      // Fetching the 'title' field
                        this.whoWeAreContent = data.short || "Default Content";  // Fetching the 'short' field
                    })
                    .catch(error => {
                        console.error("Error fetching data:", error);
                    });
            }
        },
        mounted() {
            // Fetch the 'Who We Are' content when the component is mounted
            this.fetchWhoWeAreContent();
        }
    };
</script>

<style scoped>
    /* Add any necessary styles here */
</style>
