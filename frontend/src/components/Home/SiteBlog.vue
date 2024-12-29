<template>
    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Medical News.</h2>
                        <img src="/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Loop through news articles and render them dynamically -->
                <div class="col-lg-4 col-md-6 col-12" v-for="(newsItem, index) in news" :key="index">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <!-- Dynamically set the image path from public/uploads/news -->
                            <img :src="getImagePath(newsItem.image)" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">{{ formatDate(newsItem.created_at) }}</div>
                                <h2><a :href="`/news/${newsItem.slug}`">{{ newsItem.title }}</a></h2>
                                <p class="text">{{ newsItem.excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SiteBlog",
        data() {
            return {
                news: []  // Holds the fetched news articles
            };
        },
        methods: {
            // Fetch news from the API
            fetchNews() {
                axios.get('https://vue1.zahid.com.bd/login/api/news')
                    .then(response => {
                        this.news = response.data;  // Assign the fetched news data
                    })
                    .catch(error => {
                        console.error('Error fetching news:', error);
                    });
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
            // Fetch news when the component is mounted
            this.fetchNews();
        }
    }
</script>

<style scoped>
    /* Add custom styles here if necessary */
</style>
