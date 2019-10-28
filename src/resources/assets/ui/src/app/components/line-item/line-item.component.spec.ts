import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { CheckComponent } from '../check/check.component';
import { LineInputComponent } from '../line-input/line-input.component';
import { LineItemComponent } from './line-item.component';

describe('LineItemComponent', () => {
  let component: LineItemComponent;
  let fixture: ComponentFixture<LineItemComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        LineItemComponent,
        LineInputComponent,
        CheckComponent
      ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LineItemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  it('should propagate check update', () => {
    component.checkUpdate.subscribe(g => {
      expect(g).toEqual(true);
    });
    component.ngOnInit();
    component.updateCheck(true);
  });

  it('should propagate contents update', () => {
    component.contentsUpdate.subscribe(g => {
      expect(g).toEqual("a");
    });
    component.ngOnInit();
    component.updateContents("a");
  });
});
