<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <button type="button" 
                    class="btn btn-outline-primary" 
                    :disabled="ifFirst()"
                    @click="prevClick()">
                    <i class="fas fa-arrow-alt-circle-left fa-lg"></i>
                </button>
            </div>                
            <div class="col-10">                
                <div :id="'q' + q.id" v-for="(q,qindex) in data" :key="q.id" v-if="toShow[qindex]">
                    <div>{{q.thai}}</div>
                    <div class="row">
                        <div class="col-6" v-for="(choice,index) in q.choices" :key="index">
                            <div 
                            
                            class="choice" 
                            :style="{backgroundColor:choice, color:isWhite(choice)}" 
                            @click="choiceClick(qindex,q.eng,choice)"
                        ><span class="align-middle" v-show="correct[qindex]">{{choice}}</span></div>
                        </div>
                        
                        
                    </div>                    
                    
                </div>
            </div>
            <div class="col-1">
                <button type="button" 
                    class="btn btn-outline-primary" 
                    :disabled="ifLast()"
                    @click="nextClick()">
                    <i class="fas fa-arrow-alt-circle-right fa-lg"></i>
                </button>
            </div>
            {{toShow}}{{correct}}
        </div>
    </div>
</template>
<script>
export default {
    props: ['data'],
    data(){
        return {
            currentIndex: 0,
            total: 0,
            toShow: [],
            correct: []
        }
    },
    created(){
        this.createArray();
    },
    methods: {
        createArray(){
            this.toShow = [];
            this.correct = [];
            let i = 0;
            this.toShow.push(true);
            this.correct.push(false);
            for (i=1; i < this.data.length; i++){
                this.toShow.push(false);
                this.correct.push(false);
            }
            this.total = this.data.length;
        },
        ifFirst(){
            if (this.currentIndex == 0){
                return true;
            }else{
                return false;
            }
        },
        ifLast(){
            if (this.currentIndex == this.total-1){
                return true;
            }else{
                return false;
            }
        },
        nextClick(){
            
            if (this.currentIndex < this.total-1){
                
                this.toShow[this.currentIndex]=false;
                this.currentIndex++;    
                this.toShow[this.currentIndex]=true;
            }
            
        },
        prevClick(){
            
            if (this.currentIndex > 0){
                
                this.toShow[this.currentIndex]=false;
                this.currentIndex--;
                this.toShow[this.currentIndex]=true;
            }
        },
        choiceClick(index,select,answer){
           
            if (this.correct[index] == false){
                 
                if (select == answer){
                    console.log('correct :' + index + select + answer);
                    this.correct[index] = true;
                    this.$forceUpdate();
                }else{
                    console.log('uncorrect :' + index + select + answer);
                    this.correct[index] = false;
                }
            }
            
        },
        isWhite(color){
            
            if (color.toLowerCase()=='white' || color.toLowerCase()=='yellow'){
                return 'blue';
            }else{
                return '';
            }
        }
    }
}
</script>
<style scoped>
.col{
    padding-left: 0px;
    padding-right: 0px;
}
.navBtn{
    cursor: pointer;
}
.choice{    
    cursor: pointer;
    width: 100%;
    height: 100px;
    margin: 5px;
    padding-top: 30px;
    text-align: center;
    -webkit-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
    border-radius: 5px;
    color: #fff;
    font-size: 1.2em;
}
</style>
