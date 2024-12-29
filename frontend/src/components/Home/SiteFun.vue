<template>
    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <!-- Dynamic value for hospital rooms -->
                            <span class="counter">{{ funFacts.hospitalRooms }}</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <!-- Dynamic value for specialist doctors -->
                            <span class="counter">{{ funFacts.specialistDoctors }}</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <!-- Dynamic value for happy patients -->
                            <span class="counter">{{ funFacts.happyPatients }}</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <!-- Dynamic value for years of experience -->
                            <span class="counter">{{ funFacts.yearsExperience }}</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SiteFun",
        data() {
            return {
                funFacts: {
                    hospitalRooms: 0,           // Initial value before fetching from the API
                    specialistDoctors: 0,       // Initial value before fetching from the API
                    happyPatients: 0,           // Initial value before fetching from the API
                    yearsExperience: 0          // Initial value before fetching from the API
                }
            };
        },
        methods: {
            // Fetch fun facts data from the API
            fetchFunFacts() {
                axios.get('https://vue1.zahid.com.bd/login/api/objects3')
                    .then(response => {
                        const data = response.data[0];  // Assuming the API response is an array with one object

                        // Assign the fetched data to the corresponding fields
                        this.funFacts.hospitalRooms = data.title || 0;         // 'title' is for hospital rooms
                        this.funFacts.specialistDoctors = data.slug || 0;      // 'slug' is for specialist doctors
                        this.funFacts.happyPatients = data.description || 0;   // 'description' is for happy patients
                        this.funFacts.yearsExperience = data.phone || 0;       // 'phone' is for years of experience
                    })
                    .catch(error => {
                        console.error('Error fetching fun facts:', error);
                    });
            }
        },
        mounted() {
            // Fetch fun facts when the component is mounted
            this.fetchFunFacts();
        }
    };
</script>

<style scoped>
    /* Add custom styles here if necessary */
</style>
