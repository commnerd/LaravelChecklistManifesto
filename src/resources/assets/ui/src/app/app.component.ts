import { Component, Input, OnInit, ElementRef } from '@angular/core';

@Component({
  selector: 'checklist,scaffolding',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  protected tag: string
  @Input() name: string
  @Input() api: string

  constructor(private ref: ElementRef) {}

  ngOnInit() {
    let tag = this.ref.nativeElement.tagName.toLowerCase();
    this.tag = tag;

    if(this.name == undefined) {
      throw new Error(tag.charAt(0).toUpperCase() + tag.slice(1) + " tags must contain a name property.");
    }

    if(this.api == undefined) {
      throw new Error(tag.charAt(0).toUpperCase() + tag.slice(1) + " tags must contain an api property.");
    }
  }
}
