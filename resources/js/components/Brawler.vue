<template>
<div>
    <h3 style="margin-left: 20px">Brawler: {{ more.name }} </h3>

    <BrawlerDetails :details="details"></BrawlerDetails>

    <div class="container" v-if="more.attack">
        <div>Attack name: {{more.attack.name}}</div>
        <div>Damage: {{more.attack.damage}}</div>
        <div>Range: {{more.attack.range}}</div>
        <div>Reload Speed: {{more.attack.reload_speed}}</div>
    </div>

    <div class="container" v-if="more.super">
        <div>Super name: {{more.super.name}}</div>
        <div>Damage: {{more.super.damage}}</div>
        <div>Range: {{more.super.range}}</div>
    </div>

</div>
</template>

<style>
    .container { display: flex; padding: 5px 25px; border: 1px solid blue; margin: 10px;}
    .container > div { padding: 5px; display: inline-block; margin: 10px; background-color: #dae0e5}
</style>

<script>
    import axios from 'axios';
    import BrawlerDetails from "./BrawlerDetails";

    export default {
        name: 'Brawler',
        components: {BrawlerDetails},
        data() {
        },
        mounted() {
            let category = this.$route.params.category;
            let brawler = this.$route.params.brawler;
            axios.get('/data/'+ category+'/'+ brawler+'.json')
                .then((resp => {
                    console.log(resp.data);
                    this.more = resp.data;
                }))
        }
    }
</script>
