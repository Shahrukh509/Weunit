//https://www.npmjs.com/package/vue-color
//https://github.com/xiaokaike/vue-color
//https://github.com/xiaokaike/vue-color#readme


//Chrome Selector
new Vue({
  el: "#vue_chrome_picker",
  components: {
    ChromeColor: VueColor.Chrome
  },
  data: {
    color: "#EF5C5C"
  }
}),
//Sketch Selector
Vue.component("color-picker", VueColor.Sketch), new Vue({
  el: "#vue_sketch_picker",
  data: function() {
    return {
      colors: {
        hex: "#904DB2"
      }
    }
  },
  methods: {
    updateValue: function(o) {
      console.log(o, o.hex)
    }
  }
});