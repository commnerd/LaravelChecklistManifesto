<template>
    <div class="line-item">
        <input type="checkbox" :name="id" v-model="checked" />
        <input type="text" :value="line" />
    </div>
</template>

<script>
export default {
    name: 'checklist-line',
    props: ['checked'],
    data: function() {
        return {
            checked: false,
            line: ''
        }
    }
}
</script>
