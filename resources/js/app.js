import "./bootstrap";
import { createApp } from "vue";
import { createI18n } from "vue-i18n";
import router from "./router";
import i18n from "./i18n";

import App from "./App.vue";

const app = createApp(App);

app.use(router);
app.use(i18n);

app.mount("#app");
