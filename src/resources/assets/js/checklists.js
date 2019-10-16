import Vue from "vue";
import ChecklistLine from "./Components/ChecklistLine";

let checklist = new Vue({
    el: 'checklist',
    template: '<div><checklist-line v-for="(line, index) in lineItems" name="line[]" :key="index" @line-update="update($event, index)" /></div>',
    components: {
        ChecklistLine
    },
    data: function() {
        return {
            lineItems: [
                {}
            ]
        }
    },
    methods: {
        update: function (lineItem, index) {
            console.log(this.lineItems[0]);
            this.lineItems[index] = lineItem;
            if(index == this.lineItems.length - 1 && this.lineItems[index].line.length > 0) {
                this.lineItems.push({});
                return;
            }
            if(this.lineItems.length > 1 && this.lineItems[index].line.length == 0) {
                this.lineItems.splice(index, 1);
                return;
            }
        }
    }
})
