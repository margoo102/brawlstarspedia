<template>
    <div style="padding-top: 30px">
        <h3>Rzadcy brawlerzy: </h3>

        <ul style="padding-top: 20px">
            <li>
                <router-link to="/brawlers/elprimo">El primo</router-link>
            </li>
            <li>
                <router-link to="/brawlers/poko">Poko</router-link>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        name: 'RareBrawlers'
    }
</script>
