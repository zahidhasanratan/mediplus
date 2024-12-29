<template>
    <SiteHeader />
    <SiteSlider />

    <SiteFun />
    <SiteWhyChoos />
    <SiteCall />

    <SiteBlog />
    <SiteClients />
    <SiteAppointment />

    <SiteFooter />
</template>

<script>
    import SiteHeader from "@/components/Home/SiteHeader";
    import SiteFooter from "@/components/Home/SiteFooter";
    import SiteAppointment from "@/components/Home/SiteAppointment";
    import SiteClients from "@/components/Home/SiteClients";
    import SiteBlog from "@/components/Home/SiteBlog";
    import SiteCall from "@/components/Home/SiteCall";
    import SiteWhyChoos from "@/components/Home/SiteWhyChoos";
    import SiteFun from "@/components/Home/SiteFun";
    import SiteSlider from "@/components/Home/SiteSlider";

    export default {
        name: 'SiteHome',
        components: {
            SiteSlider,
            SiteFun,
            SiteWhyChoos,
            SiteCall,
            SiteBlog,
            SiteClients,
            SiteAppointment,
            SiteFooter,
            SiteHeader
        },
        mounted() {
            // Set the document title when the component is mounted
            document.title = 'Mediplus'; // Set the title statically
        }
    }
</script>
