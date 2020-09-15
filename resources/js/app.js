require("./bootstrap");
import Vue from "vue";

Vue.component("popup", require("./components/ModalComponent.vue"));

// start app
new Vue({
    el: "#app"
});
