<template>
  <div>
    <Header />
    <p class="m-1">エリアを選択</p>
    <b-form-select
      v-model="selected"
      :options="options"
      size="sm"
      class="m-1"
    ></b-form-select>
    <div>
      <div><img src="" alt="" /></div>
    </div>
    <div>{{ shopData }}</div>
    <Footer />
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      shopData: [],
      selectedArea: "",
      selected: null,
      options: [
        { value: null, text: "エリアを選択" },
        { value: "a", text: "西新" },
        { value: "b", text: "天神" },
        { value: "c", text: "唐人町" }
      ]
    };
  },
  mounted() {
    axios
      .get("https://jsonplaceholder.typicode.com/posts")
      .then(response => (this.shopData = response));
  }
};
</script>
