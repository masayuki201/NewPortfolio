import './bootstrap'
import Vue from 'vue'
import NameChip from "./components/NameChip";
import VideoCard from "./components/VideoCard";
import TargetgradeChip from "./components/TargetgradeChip";

const app = new Vue({
    el: '#app',
    components: {
        NameChip,
        VideoCard,
        TargetgradeChip,
    }
});
