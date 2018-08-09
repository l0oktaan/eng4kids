<template>
<div>
    <b-form-group class="text-right">
        <b-form-radio-group id="btnradios1"
            buttons
            button-variant="outline-primary"
            v-model="language"
            :options="options"
            name="radiosBtnDefault" />    
    </b-form-group>    
</div>
    
</template>
<script>
export default {
    data(){
        return{
            language: 'thai',
            options: [
                { text: 'ไทย', value: 'thai' },
                { text: 'Eng', value: 'english' }                
            ],
            
        }
    },
    computed: {
        lang(){
            this.language = this.$store.state.language;
            return this.language;
        }
    },
    watch: {
        language(){
            this.$store.state.language = this.language;
            console.log('Lang:' + this.language);
        }
    },
    methods: {
        
    }
}
</script>

