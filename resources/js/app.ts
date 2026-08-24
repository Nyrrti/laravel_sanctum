import { createApp } from "vue";
import { router } from "./router";
import axios from "axios";
import App from "./App.vue";
import "../css/app.css";

axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;

const app = createApp(App);
app.use(router);
app.mount("#app");

