<template>
    <div class="container">        
        <div class="row">
            <div class="col">
                <my-slide :data="questions"></my-slide>
            </div>
        </div>
    </div>           
        
            
</template>
<style scoped>
.toHide{
    visibility: hidden;
}
</style>

<script>

   
import questions from '../../assets/data/colorexercise.json'

export default {
    data(){
        return{
            next: '<i class="fas fa-arrow-alt-circle-right fa-2x"></i>',
            previous: '<i class="fas fa-arrow-alt-circle-left fa-2x"></i>',
            slide: 0,
            sliding: null,
            questions
        }
    },
    methods: {
        onSlideStart (slide) {
        this.sliding = true
        },
        onSlideEnd (slide) {
        this.sliding = false
        },
        handleSlideClick(dataset){
            console.log(dataset.index, dataset.name)
        }
    },
    watch: {
        slide(val){

            if (val===this.questions.length-1){
                $('.carousel-control-next').addClass("toHide");
            }
        }
    }
}
</script>
