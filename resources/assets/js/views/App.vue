<template>
    <b-container>
        <b-row align-v="end">
            <b-col col v-for="group in groups" :key="group.id">
                <div :id="'group' + group.id" @click="ani(group.id)" class="mybox text-center" :style="{backgroundImage: 'url(../img/group/' + group.cover + ')'}">                    
                    
                </div>
            </b-col>
            
        </b-row>
        <b-row>
            <b-col><router-view></router-view></b-col>
        </b-row>
    </b-container>
</template>
<style scoped>
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
export default {
    data(){
        return{
            groups: [
                {
                    id: 1,
                    name: 'สี',
                    nameEN: 'Color',
                    cover: '1.jpg'
                },
                {
                    id: 2,
                    name: 'ตัวเลข',
                    nameEN: 'Number',
                    cover: '2.jpg'
                },
                {
                    id: 3,
                    name: '',
                    nameEN: 'A to Z',
                    cover: '3.jpg'
                },
            ]
        }
    },
    methods: {
        ani(id){
            $('#group' + id).addClass('animated bounce');
            setTimeout(function(){
                $('#group' + id).removeClass('animated bounce');
            },1000);
        }
    }
}
</script>
