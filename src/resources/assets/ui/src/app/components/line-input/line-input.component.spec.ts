import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LineInputComponent } from './line-input.component';

describe('LineInputComponent', () => {
  let component: LineInputComponent;
  let fixture: ComponentFixture<LineInputComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LineInputComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LineInputComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  it('should emit update when updated', () => {
    (component as any).update.subscribe(g => {
      expect(g).toEqual("a");
    });
    component.ngOnInit();
    (component as any).contents = "a";
    component.handleChange();
  });
});
