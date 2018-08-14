<template>
    <b-container >
        <b-row>            
            <b-col md="4"
                v-for="(color,index) in colors" 
                :key="color.id">
                <div class="color"
                :id="'color' + color.id" 
                    :style="{backgroundColor: color.eng}" 
                    @click="clickColor(color.id,index)">                    
                    <span class="textcolor" 
                        :id="color.eng"
                        v-if="color.status">
                        {{color.eng}}<br>{{color.thai}}
                    </span>
                </div>
            </b-col>
        </b-row>       
    </b-container>
</template>
<style scoped>
.color{    
    height: 150px;
    margin: 10px;
    padding: 25px;
    text-align: center;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    -webkit-box-shadow: 3px 3px 18px 3px rgba(0,150,255,0.91) ;
    box-shadow: 3px 3px 18px 3px rgba(0,150,255,0.91) ;
    cursor: pointer;
}
.textcolor{    
    color: #fff;
    text-shadow: 4px 4px 6px rgba(196,196,196,0.91);
    font-size: 1.2em;
}
#White, #Yellow{
    color: rgb(49, 7, 233);
    text-shadow: 4px 4px 6px rgba(196,196,196,0.91);
}
</style>

<script>
export default {
    data(){
        return{
            colors: [
                {
                    "id": "1",
                    "eng": "White",
                    "thai": "สีขาว",
                    "status": false
                },
                {
                    "id": "2",
                    "eng": "Gray",
                    "thai": "สีเทา",
                    "status": false
                },
                {
                    "id": "3",
                    "eng": "Yellow",
                    "thai": "สีแหลือง",
                    "status": false
                },
                {
                    "id": "4",
                    "eng": "Orange",
                    "thai": "สีส้ม",
                    "status": false
                },
                {
                    "id": "5",
                    "eng": "Red",
                    "thai": "สีแดง",
                    "status": false
                },
                {
                    "id": "6",
                    "eng": "Brown",
                    "thai": "สีน้ำตาล",
                    "status": false
                },
                {
                    "id": "7",
                    "eng": "Purple",
                    "thai": "สีม่วง",
                    "status": false
                },
                {
                    "id": "8",
                    "eng": "Green",
                    "thai": "สีเขียว",
                    "status": false
                },
                {
                    "id": "9",
                    "eng": "Blue",
                    "thai": "สีน้ำเงิน",
                    "status": false
                },
                {
                    "id": "10",
                    "eng": "Black",
                    "thai": "สีดำ",
                    "status": false
                }
            ]
        }
    },
    methods:{
        clickColor(id,index){
            this.$store.commit('SPEAK_WORD',this.colors[index])  
            $('#color' + id).addClass('animated bounce');         
             
            this.toggleClick(index)
            setTimeout(() => {
                this.toggleClick(index);
                $('#color'+id).removeClass('animated bounce');
            },3000);
        },
        toggleClick(index){
            this.colors[index].status = !this.colors[index].status
        }
    }
}
</script>
