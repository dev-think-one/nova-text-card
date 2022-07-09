<template>
    <Card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3"
             v-html="card.content"
        />
    </Card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
};
</script>
