<template>
    <div style="padding-top: 30px">
        <h3>Legendarni brawlerzy: </h3>

        <ul style="padding-top: 20px">
            <li>
                <router-link to="/brawlers/sandy">Sandy</router-link>
            </li>
            <li>
                <router-link to="/brawlers/crow">Crow</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "LegendaryBrawlers"
    }
</script>

<style scoped>

</style>
