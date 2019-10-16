import Vue from "vue";
import ChecklistLine from "./Components/ChecklistLine";

let checklist = new Vue({
    el: 'checklist',
    template: '<div><checklist-line v-for="(line, index) in lineItems" name="line[]" :key="index" /></div>',
    components: {
        ChecklistLine
    },
    data: function() {
        return {
            lineItems: [
                {}
            ]
        }
    }
})
