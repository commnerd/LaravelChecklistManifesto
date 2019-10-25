import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { CheckComponent } from '../check/check.component';
import { LineItemComponent } from './line-item.component';

describe('LineItemComponent', () => {
  let component: LineItemComponent;
  let fixture: ComponentFixture<LineItemComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [
        LineItemComponent,
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
});
