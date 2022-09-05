import './bootstrap'
import Vue from 'vue'
import Vuetify from 'vuetify'
import NameChip from "./components/NameChip";
import VideoCard from "./components/VideoCard";
import TargetgradeChip from "./components/TargetgradeChip";
import RankingChip from "./components/RankingChip";
import VideoLike from "./components/VideoLike";
import FollowButton from "./components/FollowButton";

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
        FollowButton,
    }
});
