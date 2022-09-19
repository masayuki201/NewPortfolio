<template>
    <a :href="`/list/${nickname}/detail`" class="text-white">
        <v-chip
            class="ma-2"
            color="orange"
            text-color="white"
            x-large
        >
            <a :href="`/list/${nickname}/detail`" class="text-white">
                <v-avatar left>
                    <v-icon
                        x-large
                    >
                        mdi-account-circle
                    </v-icon>
                </v-avatar>
                {{ nickname }}
            </a>
        </v-chip>
    </a>
</template>

<script>
export default {
    name: "NameChip",
    data() {
        return {
            nickname: this.nickname,
        }
    },
    props: {
        nickname: {
            type: String,
        }
    }
}

</script>

