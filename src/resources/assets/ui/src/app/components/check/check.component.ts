import { Component, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'check',
  templateUrl: './check.component.html',
  styleUrls: ['./check.component.scss']
})
export class CheckComponent implements OnInit {

  @Output() update: EventEmitter<boolean> = new EventEmitter<boolean>();
  checked: boolean;

  constructor() { }

  ngOnInit() {
    this.checked = false;
  }

  handleChange() {
    this.checked = !this.checked;
    this.update.emit(this.checked);
  }

}
