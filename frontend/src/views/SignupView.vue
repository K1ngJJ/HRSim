<template>
  <Signup />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import Signup from '../components/Signup.vue';

export default defineComponent({
  name: 'SignupView',

  components: {
    Signup,
  },
});
</script>