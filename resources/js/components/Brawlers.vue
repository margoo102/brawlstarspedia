<template>
    <div class="brawlers">
        <h1>Witajcie w brawlerowni</h1>
        <BrawlersGeneric title="Z alei pucharów" kind="trophies"/>
        <BrawlersGeneric title="Rzadziacy" kind="rare"/>
        <SuperRareBrawlers/>
        <EpicBrawlers/>
        <MythicBrawlers/>
        <BrawlersGeneric title="Legendy" kind="legendary"/>
    </div>
</template>
<script>
    import BrawlersGeneric from "./BrawlersGeneric";
    import SuperRareBrawlers from "./SuperRareBrawlers";
    import EpicBrawlers from "./EpicBrawlers";
    import MythicBrawlers from "./MythicBrawlers";
    export default {
        components: {BrawlersGeneric,
            SuperRareBrawlers, EpicBrawlers, MythicBrawlers}
    }
</script>
