import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { CheckComponent } from './components/check/check.component';
import { LineItemComponent } from './components/line-item/line-item.component';

@NgModule({
  declarations: [
    AppComponent,
    CheckComponent,
    LineItemComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
