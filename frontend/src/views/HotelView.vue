<template>
  <Hotel />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import Hotel from '../components/Hotel.vue';

export default defineComponent({
  name: 'HotelView',

  components: {
    Hotel,
  },
});
</script>
