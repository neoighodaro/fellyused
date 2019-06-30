<template>
  <div class="d-flex justify-content-between p-2 bg-danger align-content-center">
    <div class="logo-image">
      <img src="https://via.placeholder.com/150x30" alt="">
    </div>
    <div class="searchbar w-50">
      <input type="text" class="search-input w-100 h-100 border-0 p-3 px-4 rounded-pill"
             placeholder="Search anything you want">
    </div>
    <div class="buttons">
      <a class="btn btn-outline-primary" href="/login">Log in</a>
      <a class="btn btn-primary">Sign up</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "NavigationBar"
}
</script>

<style scoped>

</style>
