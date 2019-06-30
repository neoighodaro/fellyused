<template>
  <a class="col-sm" href="/stuff">
    <div class="image">
      <img :src="good.image" :alt="good.name">
    </div>
    <div class="meta">
      <div class="title">{{ good.name }}</div>
      <div class="price">{{ good.price }}</div>
    </div>
  </a>
</template>

<script>
export default {
  name: "ListItem.vue",
  props: ['item'],
  data() {
    return { good: {}}
  },
  mounted() {
    this.good = JSON.parse(this.item)
  }
}
</script>

<style scoped>
  a.col-sm {
    text-decoration: none;
    margin-bottom: 30px;
  }

  .image img {
    border-radius: 10px 10px 0 0;
    min-width: 100%;
  }

  .meta {
    padding: 8px 15px;
    background: #f0f0f0;
    border-radius: 0 0 10px 10px;
  }

  .title {
    font-weight: bold;
    color: #555;
    font-size: 18px;
    line-height: 1.2;
  }

  .price {
    font-size: 15px;
    font-weight: 400;
    color: #333;
  }
</style>
