import { CheckComponent } from './components/check/check.component';
import { TestBed, async } from '@angular/core/testing';
import { AppComponent } from './app.component';

describe('AppComponent', () => {
  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
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
});
