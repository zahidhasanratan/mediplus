<template>
    <site-header/>

    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ news.title }}</h2>
                        <ul class="bread-list">
                            <li><router-link to="/">Home</router-link></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{ news.title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pf-details section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content">
                        <div class="image-slider">
                            <div class="pf-details-slider">
                                <img :src="getImagePath(news.image)" alt="#">
                            </div>
                        </div>
                        <div class="date">
                            <ul>
                                <li><span>Date :</span> {{ news.sub_title }}</li>
                            </ul>
                        </div>
                        <div class="body-text">
                            <p v-html="news.description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <site-footer/>
</template>

<script>
    import axios from 'axios';
    import SiteHeader from "@/components/Home/SiteHeader";
    import SiteFooter from "@/components/Home/SiteFooter";

    export default {
        name: 'SiteNewsDetail',
        components: { SiteFooter, SiteHeader },
        data() {
            return {
                news: {} // Holds the fetched news article
            };
        },
        methods: {
            // Fetch news details from the API using the slug
            fetchNewsDetails() {
                const slug = this.$route.params.slug; // Get the slug from the route parameters
                axios.get(`https://vue1.zahid.com.bd/login/api/news/${slug}`)
                    .then(response => {
                        this.news = response.data; // Assign the fetched news data
                        this.updateTitle(); // Update the document title
                    })
                    .catch(error => {
                        console.error('Error fetching news details:', error);
                    });
            },
            // Update the document title
            updateTitle() {
                document.title = this.news.title ? `${this.news.title} - Mediplus` : 'Mediplus'; // Set the title dynamically
            },
            // Construct the full image path with the base URL
            getImagePath(image) {
                return `https://vue1.zahid.com.bd/login/uploads/news/${image}`;
            },
            // Format the date (assuming the date comes as ISO format)
            formatDate(dateString) {
                const options = { year: 'numeric', month: 'short', day: 'numeric' };
                return new Date(dateString).toLocaleDateString(undefined, options);
            }
        },
        mounted() {
            // Fetch news details when the component is mounted
            this.fetchNewsDetails();
        },
        watch: {
            '$route' () {
                // Fetch new news details when the route changes
                this.fetchNewsDetails();
            }
        }
    }
</script>
