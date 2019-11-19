import { Component, OnInit, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'line-item',
  templateUrl: './line-item.component.html',
  styleUrls: ['./line-item.component.scss']
})
export class LineItemComponent implements OnInit {

  @Output() checkUpdate = new EventEmitter<boolean>();
  @Output() contentsUpdate = new EventEmitter<string>();
  checkType: string;
  checked: boolean = false;
  contents: string = "";

  constructor() { }

  ngOnInit() {
  }

  updateCheck(checked: boolean) {
      this.checkUpdate.emit(checked);
  }

  updateContents(contents: string) {
      this.contentsUpdate.emit(contents);
  }

}
