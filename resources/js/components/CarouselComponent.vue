<template>
    <carousel :perPage="1">
      <slide v-for="item in items" v-bind:key="item">
        <h1>{{ item.title }}</h1>
        <img :src="item.image">
      </slide>
    </carousel>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';
    export default {
      props: ['items'],
        components: {
          Carousel,
          Slide
        }
    }
</script>
