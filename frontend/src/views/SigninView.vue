<template>
  <Signin />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import Signin from '../components/Signin.vue';

export default defineComponent({
  name: 'SigninView',

  components: {
    Signin,
  },
});
</script>
