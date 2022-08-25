<template>
    <div class="text-left">
        &nbsp;おすすめ：
        <v-chip
            class="ma-2"
            :color="gradeColor(target_grade)"
            text-color="white"
        >
            <v-avatar>
                <i
                    :class="gradeAvatar(target_grade)"
                    >
                </i>
            </v-avatar>
            {{ target_grade }}
        </v-chip>
    </div>
</template>

<script>
export default {
    name: "TargetgradeChip",
    data() {
        return {
            target_grade: this.target_grade,
        }
    },
    props: {
        target_grade: {
            type: String,
        }
    },
    methods: {
        gradeColor(target_grade){
            if(target_grade == "幼児"){
                return "#f3cc35";
            }
            if(target_grade == "年少"){
                return "#10CE01FA";
            }
            if(target_grade == "年中"){
                return "#0066FFFC";
            }
            if(target_grade =="年長"){
                return "#F81B1BFF";
            }
        },
        gradeAvatar(target_grade){
            if(target_grade == "幼児"){
                return "fas fa-hippo";
            }
            if(target_grade == "年少"){
                return "fas fa-cat";
            }
            if(target_grade == "年中"){
                return "fas fa-dog";
            }
            if(target_grade =="年長"){
                return "fas fa-otter";
            }
        }
    }
}

</script>

<style scoped>
/*.dog {*/
/*    color: pink;*/
/*}*/
/*.green {*/
/*    color: rgba(36, 128, 0, 0.58);*/
/*}*/
/*.blue {*/
/*    color: rgba(0, 13, 255, 0.99);*/
/*}*/
/*.red {*/
/*    color: #f81b1b;*/
/*}*/

</style>
