<template>
    <div>
<NavBar>
    <slot name="contant"/>
</NavBar>
    </div>
</template>

<script >
import NavBar from '../Components/Main/Nav.Bar.vue'
export default{
    components:{
        NavBar
    }
}
</script>

<style lang="scss" scoped>

</style>