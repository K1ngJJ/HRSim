<template>
  <div class="app">
    <!-- Nav component -->
    <Nav class="nav-component fixed-top" />

    <!-- If data fetching is not complete, we are showing a div with loading text-->
    <div v-if="!data">Loading...</div>

    <!-- If data fetching is successful and we have the data then we are showing the main component -->
    <main v-else class="main">
      <router-view
        @setGuestData="getGuestData"
        @sendGuestInfo="getGuestInfo"
        :hotelsData="data"
        :guestData="guestData"
        :allGuestInfo="allGuestInfo"
      />
    </main>
  </div>
</template>

<style scoped>
.app {
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
}
.nav-component {
  max-width: 1280px;
  margin: 0 auto;
}
</style>
