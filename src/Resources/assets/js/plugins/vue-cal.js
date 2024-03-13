import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'

export default {
    install: (app) => {
        app.component('vue-cal', VueCal);
    },
};
