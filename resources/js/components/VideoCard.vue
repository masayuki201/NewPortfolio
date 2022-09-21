<template>
    <v-card
        class="mx-auto"
        max-width="344"
        elevation="11"
    >
        <name-chip
            :nickname="`${nickname}`"
        >
        </name-chip>

        <iframe
            width="290"
            height="163.125"
            :src="`https://www.youtube.com/embed/${url}`"
            frameborder="0"
            allow="accelerometer;
            autoplay;
            clipboard-write;
            encrypted-media;
            gyroscope;
            picture-in-picture"
            allowfullscreen
        >
        </iframe>

       <targetgrade-chip
           :target_grade="`${target_grade}`"
           >
       </targetgrade-chip>

        <ranking-chip
            v-if="`${id}` > 0"
            :id="`${id}`"
        >
        </ranking-chip>
    </v-card>
</template>

<script>
import NameChip from "./NameChip";
import TargetgradeChip from "./TargetgradeChip";
import RankingChip from "./RankingChip";
export default {
    name: "VideoCard",
    components: {
        NameChip,
        TargetgradeChip,
        RankingChip,
    },
    data() {
        return {
            url: this.url,
            nickname: this.nickname,
            Target_grade: this.Target_grade,
            id:this.id,
        }
    },
    props: {
        url: {
            type: String,
        },
        nickname: {
            type:String,
        },
        target_grade: {
            type:String,
        },
        id: {
            type:String,
        },
    },
}
</script>
