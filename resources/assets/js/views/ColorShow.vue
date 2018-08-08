<template>
<b-container class="bv-example-row">
    <b-row align-h="center">
        <b-col cols="4">
            <div id="colorLearning" @click="clickLearning()" class="mybox text-center">                    
                
            </div>                
        </b-col>
        <b-col cols="4">
            <div id="colorExercise" @click="clickExercise()" class="mybox text-center">                    
                
            </div>
        </b-col>
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
        clickLearning(){
            setTimeout( () => this.$router.push('/color/learning'), 1800);
        },
        clickExercise(){
            setTimeout( () => this.$router.push('/color/exercise'), 1800);
        }
    }
}
</script>

<style scoped>
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

