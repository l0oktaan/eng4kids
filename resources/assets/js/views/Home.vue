<template>
<div class="frame">
    <b-container>       
        
        <b-row align-h="center">            
            <b-col cols="4" v-for="group in groups" :key="group.id">
                <div :id="'group' + group.id" @click="clickGroup(group)" class="mybox text-center" :style="{backgroundImage: 'url(../img/group/' + group.cover + ')'}">                    
                    
                </div>
            </b-col>            
        </b-row>        
    </b-container>
    </div>
</template>
<style scoped>
.container{
    display: block;
}
.frame {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
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
.name{
    
    font-size: 1.2em;
    color: #fff;
    margin-top: 30px;
    font-weight: bold;

}
</style>

<script>
import { mapMutations } from 'vuex'
export default {
    data(){
        return{
            arrGroup: [],
            language: 'thai',
            options: [
                { text: 'ไทย', value: 'thai' },
                { text: 'Eng', value: 'english' }                
            ],
            groups: [
                {
                    id: 1,
                    thai: 'หมวดหมู่สี',
                    eng: 'Color',
                    cover: '1.jpg',
                    path: 'color'
                },
                {
                    id: 2,
                    thai: 'หมวดหมู่ตัวเลข',
                    eng: 'Number',
                    cover: '2.jpg',
                    path: 'number'
                },
                {
                    id: 3,
                    thai: 'อักษรภาษาอังกฤษ',
                    eng: 'A B C',
                    cover: '3.jpg',
                    path: 'abc'
                },
            ]
        }
    },
    methods: {
        clickGroup(group){
            //this.language == 'thai' ? speakThai(group.name) : speakEng(group.nameEN);            
            this.$store.commit('SPEAK_WORD',group);
            $('#group' + group.id).addClass('animated bounce');
            this.setTransition(group.id);
            setTimeout( () => this.$router.push({ path: '/color'}), 1600);
            
        },
        setTransition(id){
            this.groups.forEach(function(element){
                if (element.id != id){
                    $('#group' + element.id).addClass('animated bounceOut delay-2s')
                }
            });
        },
        
    },
    mounted(){
        
    },
    computed: {
        lang(){
            return this.$store.state.language;
        }
    }
}
</script>
