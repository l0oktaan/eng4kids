<template>
    <div>
        <div class="color" v-for="color in colors" :key="color.id" :style="{'backgroundColor': color.nameEN}"></div>
    </div>
</template>
<style scoped>
.color{
    width: 150px;
    height: 150px;
    
}
</style>

<script>
export default {
    data(){
        return{
            colors: [
                {
                    "id": "1",
                    "nameEN": "White",
                    "nameTH": "สีขาว"
                },
                {
                    "id": "2",
                    "nameEN": "Yellow",
                    "nameTH": "สีแหลือง"
                },
                {
                    "id": "3",
                    "nameEN": "Red",
                    "nameTH": "สีแดง"
                },
                {
                    "id": "4",
                    "nameEN": "Gray",
                    "nameTH": "สีเทา"
                },
                {
                    "id": "5",
                    "nameEN": "Purple",
                    "nameTH": "สีม่วง"
                },
                {
                    "id": "6",
                    "nameEN": "Green",
                    "nameTH": "สีเขียว"
                },
                {
                    "id": "7",
                    "nameEN": "Blue",
                    "nameTH": "สีน้ำเงิน"
                },
                {
                    "id": "8",
                    "nameEN": "Black",
                    "nameTH": "สีดำ"
                }
            ]
        }
    }
}
</script>
