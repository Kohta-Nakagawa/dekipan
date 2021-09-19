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
      <div v-for="data in testData" :key="data.area">
        <div v-show="data.area == selected">
          <div v-for="da in data.dekitateList" :key="da.time">
            <b-container class="bv-example-row">
              <b-row>
                <b-col cols="4"
                  ><img
                    src="https://recipe.r10s.jp/recipe-space/d/strg/ctrl/3/4c0bf81c3aa55af19b929984c8488f806c6a8cd5.24.9.3.3.jpg?interpolation=lanczos-none&fit=around|716:716&crop=716:716;*,*"
                    alt=""
                    style="width: 20%;"
                /></b-col>
                <b-col cols="8">
                  <ul>
                    <li>{{ da.time }}{{ da.pan }}</li>
                    <li>@{{ da.shop }}</li>
                    <li>{{ da.address }}</li>
                  </ul>
                </b-col>
              </b-row>
            </b-container>
          </div>
        </div>
      </div>
    </div>
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
        { value: "nishiku", text: "西区" },
        { value: "sawaraku", text: "早良区" }
      ],
      testData: [
        {
          area: "sawaraku",
          dekitateList: [
            {
              time: "3:31",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            },
            {
              time: "3:42",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            },
            {
              time: "3:56",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            }
          ]
        },
        {
          area: "nishiku",
          dekitateList: [
            {
              time: "3:45",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            },
            {
              time: "3:75",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            },
            {
              time: "3:43",
              pan: "メロンパン",
              shop: "ケイズオーブン",
              address: "福岡市中央区天神1-1-1",
              image: "https://aaa.com"
            }
          ]
        }
      ]
    };
  }
  // mounted() {
  //   axios
  //     .get("https://jsonplaceholder.typicode.com/posts")
  //     .then(response => (this.shopData = response));
  // }
};
</script>
