<template>
    <div style="padding-top: 30px">
        <h3>{{title}}: </h3>

        <ul style="padding-top: 20px">
            <BrawlerLink
                 v-for="name in names"
                 :key="name"
                 :name="name"
            ></BrawlerLink>
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
    import BrawlerLink from "./BrawlerLink";
    export default {
        name: 'BrawlersGeneric',
        components: {
            BrawlerLink
        },
        props: {
            title: {
                type: String,
                required: true
            },
            kind: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                names: []
            }
        },
        mounted() {
            axios.get('/data/brawlers.json')
                .then((resp => {
                    this.names = resp.data["brawlers"][this.kind];
                    console.log("Kind: ", this.kind, "Names: ", this.names)
                }))
        }
    }
</script>
