<template>
    <div style="padding-top: 30px">
        <h3>{{title}}: </h3>

        <ul style="padding-top: 20px">
            <li>
                <router-link to="/brawlers/shelly">Shelly</router-link>
            </li>
            <li>
                <router-link to="/brawlers/nita">Nita</router-link>
            </li>
            <li>
                <router-link to="/brawlers/colt">Colt</router-link>
            </li>
            <li>
                <router-link to="/brawlers/mike">Dynamike</router-link>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        name: 'TrophyBrawlers',
        props: {
            title: {
                type: String,
                required: true
            }
        }
    }
</script>
