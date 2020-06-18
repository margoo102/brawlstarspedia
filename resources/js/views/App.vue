<template>
    <div>
        <div id="header">
            <HeaderTitle/>
            <HeaderMenu/>

        </div>
        <div id="content">
            <router-view></router-view>
        </div>
        <div>
            <button @click="greet">kliknij</button>
        </div>
    </div>
</template>
<script>
    import HeaderMenu from "./HeaderMenu";
    import HeaderTitle from "./HeaderTitle";

    export default {
        components: {HeaderTitle, HeaderMenu},
        methods: {
            greet() {
                console.table("greetings", "hello");
            }
        }
    }
</script>
