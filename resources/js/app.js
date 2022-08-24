import './bootstrap'
import Vue from 'vue'
import NameChip from "./components/NameChip";
import VideoCard from "./components/VideoCard";
import TargetgradeChip from "./components/TargetgradeChip";
import RankingChip from "./components/RankingChip";
import VideoLike from "./components/VideoLike";
import Vuetify from 'vuetify'

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    components: {
        NameChip,
        VideoCard,
        TargetgradeChip,
        RankingChip,
        VideoLike,
    }
});
