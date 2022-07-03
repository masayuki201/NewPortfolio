<template>
    <div class="text-left">
        <v-chip
            class="ma-2"
            color="orange"
            text-color="white"
        >
            <v-avatar left>
                <v-icon>mdi-account-circle</v-icon>
            </v-avatar>
            {{ nickname }}
        </v-chip>
    </div>
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

<style scoped>

</style>
