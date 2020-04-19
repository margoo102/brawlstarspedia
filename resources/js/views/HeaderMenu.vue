<template>
    <div id="main-nav">
        <ul>
            <li><router-link to="/">Strona Główna</router-link></li>
            <li><router-link to="/brawlers">Brawlerzy(Zadymiarze)</router-link></li>
            <li><router-link to="/maps">Mapki(TBD)</router-link></li>
            <li><router-link to="/about">O Nas</router-link></li>
        </ul>
    </div>
</template>
<style>
    ul {
        display: flex;
        text-decoration: none;
        list-style-type: none;
    }

    #main-nav {
        margin: 20px;
        overflow: auto;
        display: flex;
    }

    #main-nav li > a {
        text-decoration: none;
    }
    li > a {
        margin: 10px;
        padding: 10px;
    }
    li > a.router-link-exact-active {
        cursor: default;
        background-color: #dae0e5;
        border-bottom: 5px solid blue;
    }

</style>
<script>
    export default {
        name: 'HeaderMenu'
    }
</script>
