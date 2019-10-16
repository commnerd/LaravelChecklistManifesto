<template>
    <div class="line-item">
        <input type="checkbox" v-model="checked" />
        <input type="text" v-model="line" @keyup="updateLine()"/>
    </div>
</template>

<script>
export default {
    name: 'checklist-line',
    data: function() {
        return {
            checked: false,
            line: ''
        }
    },
    methods: {
        updateLine: function() {
            this.$emit('line-update', {
                checked: this.checked,
                line: this.line
            });
        }
    }
}
</script>
