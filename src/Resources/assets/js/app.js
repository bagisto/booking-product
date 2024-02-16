import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'

app.component("vue-cal", VueCal);

window.addEventListener("load", function (event) {
    app.mount("#app");
});