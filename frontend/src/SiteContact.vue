<template>
    <SiteHeader />

    <ContactPage />
    <SiteFooter />
</template>

<script>

    import SiteHeader from "@/components/Home/SiteHeader";
    import SiteFooter from "@/components/Home/SiteFooter";
    import ContactPage from "@/components/Page/ContactPage";


    export default {
        name: 'SiteContact',
        components: {
            ContactPage,
            SiteFooter,
            SiteHeader
        }
    }
</script>
