import Vue from "vue";
import Vuetify, {
    VApp,
    VAppBar,
    VNavigationDrawer,
    VToolbar,
    VContainer,
    VContent,
    VToolbarTitle,
    VAppBarNavIcon
} from "vuetify/lib";

Vue.use(Vuetify, {
    components: {
        VApp,
        VAppBar,
        VNavigationDrawer,
        VToolbar,
        VContainer,
        VContent,
        VToolbarTitle,
        VAppBarNavIcon
    }
});

const opts = {};

export default new Vuetify(opts);
