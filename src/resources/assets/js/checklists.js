import Vue from "vue";
import ChecklistLine from "./Components/ChecklistLine";

new Vue({
    el: 'checklist',
    template: '<div><checklist-line v-for="(line, index)" :key="index" /></div>',
    components: {
        ChecklistLine
    }
})
