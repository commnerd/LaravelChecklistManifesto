import { LineItemComponent } from './components/line-item/line-item.component';
import { LineInputComponent } from './components/line-input/line-input.component';
import { CheckComponent } from './components/check/check.component';
import { TestBed, async } from '@angular/core/testing';
import { AppComponent } from './app.component';

describe('AppComponent', () => {
  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        LineInputComponent,
        LineItemComponent,
        CheckComponent,
        AppComponent
      ],
    }).compileComponents();
  }));

  it('should create the app', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.debugElement.componentInstance;
    expect(app).toBeTruthy();
  });

  it('should throw exception without defined name', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.debugElement.componentInstance;
    let tag = (app as any).ref.nativeElement.tagName.toLowerCase();

    (app as any).name = undefined;
    (app as any).api = "/path/to/api";

    expect(function() { app.ngOnInit() }).toThrow(new Error(tag.charAt(0).toUpperCase() + tag.slice(1) + " tags must contain a name property."));
  });

  it('should throw exception without defined api', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.debugElement.componentInstance;
    let tag = (app as any).ref.nativeElement.tagName.toLowerCase();

    (app as any).name = 'checklist name';
    (app as any).api = undefined;

    expect(function() { app.ngOnInit() }).toThrow(new Error(tag.charAt(0).toUpperCase() + tag.slice(1) + " tags must contain an api property."));
  });

  it('should start with blank line item', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.debugElement.componentInstance;
    let tag = (app as any).ref.nativeElement.tagName.toLowerCase();

    (app as any).name = 'checklist name';
    (app as any).api = '/path/to/api';

    app.ngOnInit();

    expect((app as any).lineItems).toEqual([new LineItemComponent]);
  });
});
