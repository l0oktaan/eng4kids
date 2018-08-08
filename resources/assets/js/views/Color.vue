<template>
    <b-container class="bv-example-row">
        <b-row>
            <b-col>
                <div @click="clickColor()" class="color text-center"><h3>{{groupTH}} : {{groupEN}} &nbsp;<b-button @click="speakeGroup()" variant="success"><i class="fas fa-volume-up fa-lg"></i></b-button></h3></div>
            </b-col>
        </b-row>
        <b-row align-h="center">
            <router-view></router-view>
        </b-row>
    </b-container>
</template>
<script>
export default {
    data(){
        return{
            groupTH: 'หมวดหมู่สี',
            groupEN: 'color',
            color: [

            ]
        }
    },
    methods: {
        speakeGroup(){
            speakThai(this.groupTH);
            setTimeout( () => speakEng(this.groupEN), 1800);
        },
        clickColor(){
            setTimeout( () => this.$router.push('/color'), 1800);
        }
    }
}
</script>

<style scoped>
.color{
    cursor: pointer;
}
.container{
    margin-top: 20px;
}
.mybox{
    -webkit-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    width: 200px;
    height: 200px;
    padding-top: 100px;
    margin: 10px;
    cursor: pointer;
    
}
#colorLearning{
    background-image: url('/img/color/learning.jpg');
}
#colorExercise{
    background-image: url('/img/color/exercise.jpg');
}
</style>

