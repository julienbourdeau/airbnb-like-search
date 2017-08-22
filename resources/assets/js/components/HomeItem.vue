<template>

<div class="hit col-sm-3">
    <div class="pictures-wrapper">
        <img class="picture" :src="home.picture_url">
        <img class="profile" :src="home.user_thumbnail_url">
    </div>

    <div class="infos">
        <h4 class="media-heading">
            {{ home.name }}
        </h4>
        <p>{{ home.room_type }} - {{ home.city }}, {{ home.country }}</p>
    </div>
</div>

</template>

<script>
    export default {
        props: ['home']
    }
</script>
