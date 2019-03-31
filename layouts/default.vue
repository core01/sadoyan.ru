<template>
  <div class="flex flex-col max-w-lg min-h-screen mx-auto text-black">
    <Header />
    <nuxt />
    <Footer />
  </div>
</template>

<style>
</style>
<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
export default {
  components: {
    Header,
    Footer
  }
}
</script>
