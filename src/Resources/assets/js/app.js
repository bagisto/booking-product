/**
 * This will track all the images and fonts for publishing.
 */
import.meta.glob(["../images/**"]);

import VueCal from "vue-cal";

window.app.directive("vue-cal", VueCal);
