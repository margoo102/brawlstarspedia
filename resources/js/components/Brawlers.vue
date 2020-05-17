<template>
    <div class="brawlers">
        <h1>Witajcie w brawlerowni</h1>

        <TrophyBrawlers/>

        <RareBrawlers/>

        <SuperRareBrawlers/>

        <EpicBrawlers/>

        <MythicBrawlers/>

        <LegendaryBrawlers/>

    </div>
</template>
<script>
    import TrophyBrawlers from "./TrophyBrawlers";
    import RareBrawlers from "./RareBrawlers";
    import SuperRareBrawlers from "./SuperRareBrawlers";
    import EpicBrawlers from "./EpicBrawlers";
    import MythicBrawlers from "./MythicBrawlers";
    import LegendaryBrawlers from "./LegendaryBrawlers";
    export default {
        components: {RareBrawlers, TrophyBrawlers, SuperRareBrawlers, EpicBrawlers, MythicBrawlers, LegendaryBrawlers}
    }
</script>
