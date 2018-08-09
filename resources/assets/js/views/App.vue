<template>
<div>
    <div class="home"><h3 @click="goHome()">ต้นน้ำ - ต้นหอม</h3><lang-switch></lang-switch></div>
    <transition name="slide-right">
        <router-view></router-view>
    </transition>
</div>
    
</template>
<style scoped>
.home{
    cursor: pointer;
}
h3{
    margin-top: 15px;
    text-align: center;
}
.slide-right-enter-active {
  transition: all .1s cubic-bezier(.95,.11,.93,.55)
}
.slide-right-leave-active {
  transition: all .1s cubic-bezier(.95,.11,.93,.55)
}
.slide-right-enter, .slide-right-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
.slide-left-enter-active {
  transition: all .5s cubic-bezier(.95,.11,.93,.55)
}
.slide-left-leave-active {
  transition: all .5s cubic-bezier(.95,.11,.93,.55)
}
.slide-left-enter, .slide-left-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
<script>
export default {
    data(){
        return{
            transitionName: ''
        }
    },
    methods: {
        goHome(){
            this.$router.push('/');
        }
    },
    watch: {
        '$route' (to, from) {
            const toDepth = to.path.split('/').length
            const fromDepth = from.path.split('/').length
            this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
        }
    }
}
</script>
