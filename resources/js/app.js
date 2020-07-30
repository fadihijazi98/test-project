import Vue from "vue";
import AuthorizedClients from "./components/passport/AuthorizedClients";
import PersonalAccessTokens from "./components/passport/PersonalAccessTokens";
import TestComponent from "./components/TestComponent";
import Clients from "./components/passport/Clients";
require('./bootstrap');

const app = new Vue({
    el: "#app",
    components: {
      AuthorizedClients,
      PersonalAccessTokens,
      Clients,
      TestComponent,
    },
});
