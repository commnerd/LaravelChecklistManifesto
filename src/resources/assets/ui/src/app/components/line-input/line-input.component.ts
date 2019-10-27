import { Component, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'line-input',
  templateUrl: './line-input.component.html',
  styleUrls: ['./line-input.component.scss']
})
export class LineInputComponent implements OnInit {

  @Output() update: EventEmitter<string> = new EventEmitter<string>();
  contents: string;

  constructor() { }

  ngOnInit() {
    this.contents = "";
  }

  handleChange() {
    this.update.emit(this.contents);
  }

}
