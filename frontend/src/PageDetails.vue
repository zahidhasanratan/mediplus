<template>
    <site-header/>

    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ page.title }}</h2>
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
                        <div class="body-text">
                            <p v-html="page.description"></p>
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
        name: 'PageDetails',
        components: { SiteHeader, SiteFooter },
        data() {
            return {
                page: {} // Holds the fetched page data
            };
        },
        methods: {
            // Fetch page details from the API using the slug
            fetchPageDetails() {
                const slug = this.$route.params.slug; // Get the slug from the route parameters
                axios.get(`https://vue1.zahid.com.bd/login/api/page/${slug}`)
                    .then(response => {
                        this.page = response.data; // Assign the fetched page data
                        this.updateTitle(); // Update the document title
                    })
                    .catch(error => {
                        console.error('Error fetching page details:', error);
                    });
            },
            // Update the document title
            updateTitle() {
                document.title = this.page.title ? `${this.page.title} - Mediplus` : 'Mediplus'; // Set the title dynamically
            },
            // Construct the full image path with the base URL
            getImagePath(image) {
                return `https://vue1.zahid.com.bd/login/uploads/pages/${image}`; // Adjust the path as necessary
            },
            // Format the date (assuming the date comes as ISO format)
            formatDate(dateString) {
                const options = { year: 'numeric', month: 'short', day: 'numeric' };
                return new Date(dateString).toLocaleDateString(undefined, options);
            }
        },
        mounted() {
            // Fetch page details when the component is mounted
            this.fetchPageDetails();
        },
        watch: {
            '$route' () {
                // Fetch new page details when the route changes
                this.fetchPageDetails();
            }
        }
    }
</script>

<style scoped>
    /* Add your styles here */
    .pf-details {
        padding: 20px;
    }

    .pf-details h2 {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .body-text {
        font-size: 1.2em;
    }
</style>
