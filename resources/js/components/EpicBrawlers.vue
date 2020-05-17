<template>
    <div style="padding-top: 30px">
        <h3>Epiccy brawlerzy: </h3>

        <ul style="padding-top: 20px">
            <li>
                <router-link to="/brawlers/bibi">Bibi</router-link>
            </li>
            <li>
                <router-link to="/brawlers/frank">Frank</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "EpicBrawlers"
    }
</script>

<style scoped>

</style>
