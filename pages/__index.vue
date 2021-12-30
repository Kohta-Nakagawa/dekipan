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
      <div v-for="data in testData" :key="data.id">
        <div v-if="selected == null">
          <div>
            <b-container class="bv-example-row">
              <b-row>
                <b-col cols="4"><img width="20%" :src="data.image"/></b-col>
                <b-col cols="8">
                  <ul>
                    <li>{{ data.time }}{{ data.pan }}</li>
                    <li>@{{ data.shop }}</li>
                    <li>{{ data.address }}</li>
                  </ul>
                </b-col>
              </b-row>
            </b-container>
          </div>
        </div>
        <div v-else>
          <div v-show="selected == data.area">
            <b-container class="bv-example-row">
              <b-row>
                <b-col cols="4"><img width="20%" :src="data.image"/></b-col>
                <b-col cols="8">
                  <ul>
                    <li>{{ data.time }}{{ data.pan }}</li>
                    <li>@{{ data.shop }}</li>
                    <li>{{ data.address }}</li>
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
// import axios from "axios";
export default {
  data() {
    return {
      shopData: [],
      selectedArea: "",
      selected: null,
      options: [
        { value: null, text: "全て" },
        { value: "nishiku", text: "西区" },
        { value: "sawaraku", text: "早良区" }
      ],
      testData: {
        dekitateList: [
          {
            id: "8392830",
            area: "sawaraku",
            time: "3:31",
            pan: "メロンパン2",
            shop: "ケイズオーブン2",
            address: "福岡市中央区天神1-1-1",
            image: "https://www.hokuo-tokyo.jp/upfiles/L1506066493_46-whole.jpg"
          },
          {
            id: "8dg2830",
            area: "nishiku",
            time: "10:42",
            pan: "ウインナーパン",
            shop: "オーブンオーブン",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://media-01.creema.net/user/245416/exhibits/3840354/1_7c71e56d0352b4aabf03780a5a7715a0_500.jpg"
          },
          {
            id: "839gddde30",
            area: "nishiku",
            time: "3:56",
            pan: "コッペパン",
            shop: "ここに決めた",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://coubic-images.s3.amazonaws.com/resources/265675/p1280x1280_61881c5d.JPG"
          },
          {
            id: "839ge30",
            area: "nishiku",
            time: "1:56",
            pan: "チョココロネ",
            shop: "ふじや",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://takatsuki-scramble.com/wp-content/uploads/2015/06/IMG_3868.jpg"
          },
          {
            id: "83gegew29ge30",
            area: "sawaraku",
            time: "4:59",
            pan: "食パン",
            shop: "美味しいパン屋",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPV8Gg52EG6k9khkXaYRWwnHHuvoAvEdkp5g&usqp=CAU"
          },
          {
            id: "83argh9ge30",
            area: "nishiku",
            time: "5:34",
            pan: "あんぱん",
            shop: "パン屋A",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStvhVhukN4zD10o25PiCZQ_BF0CRQVZkW2Rg&usqp=CAU"
          },
          {
            id: "839efege30",
            area: "sawaraku",
            time: "9:45",
            pan: "揚げパン",
            shop: "揚げパンや",
            address: "福岡市中央区天神1-1-1",
            image:
              "https://petit-mall.jp/hbrecipe/wp-content/uploads/yakiin2.jpg"
          }
        ]
      }
    };
  },
  computed: {
    // 配列の要素順番を逆順にする
    sortItems() {
      return this.shopData.dekitateList.sort((a, b) => {
        return a.time < b.time ? -1 : a.time > b.time ? 1 : 0;
      });
    }
  },
  mounted() {
    axios
      .get("https://tsukulab.xsrv.jp/api/top")
      .then(response => (this.shopData = response));
  }
};
</script>
