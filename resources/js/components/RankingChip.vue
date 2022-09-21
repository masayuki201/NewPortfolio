<template>
    <div class="text-left">
        <span class="font-weight-bold">&nbsp;再生回数：</span>
        <v-chip
            class="ma-2 font-weight-bold"
            color="red"
            text-color="white"
        >
            <v-avatar left>
                <i class="fab fa-youtube"></i>
            </v-avatar>
            {{ id }}
        </v-chip>
        <span class="font-weight-bold">回視聴</span>
    </div>

</template>

<script>
export default {
    name: "RankingChip",
    date() {
        return {
            id :this.id,
        }
    },
    props: {
        id: {
            type: String,
        }
    },
    //TODO:再生回数をカンマ仕様に！
    // filters: {
    //     formatNumber: function (value) {
    //         return value.toLocaleString()
    //     }
    // },
}
</script>

