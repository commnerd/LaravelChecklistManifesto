import { Component, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'check',
  templateUrl: './check.component.html',
  styleUrls: ['./check.component.scss']
})
export class CheckComponent implements OnInit {

  @Output() _emitter: EventEmitter<boolean> = new EventEmitter();
  private _checked: boolean;

  constructor() { }

  ngOnInit() {
    this._checked = false;
  }

  handleChange() {
    this._checked = !this._checked;
    this._emitter.emit(this._checked);
  }

}
