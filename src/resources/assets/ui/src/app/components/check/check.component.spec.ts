import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CheckComponent } from './check.component';

describe('CheckComponent', () => {
  let component: CheckComponent;
  let fixture: ComponentFixture<CheckComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CheckComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CheckComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  it('should start unchecked', () => {
    component.ngOnInit();
    expect((component as any)._checked).toEqual(false);
  });

  it('should be truthy when checked', async(() => {
    component.ngOnInit();

    let check = fixture.debugElement.nativeElement.querySelector('input');
    check.click();

    fixture.whenStable().then(() => {
      expect((component as any)._checked).toEqual(true);
    });
  }));

  it('should call handler when clicked', async(() => {
    spyOn(component, 'handleChange');

    component.ngOnInit();

    let check = fixture.debugElement.nativeElement.querySelector('input');
    check.click();

    fixture.whenStable().then(() => {
      expect(component.handleChange).toHaveBeenCalled();
    });
  }));

  it('should emit update when clicked', () => {
    (component as any)._emitter.subscribe(g => {
      expect(g).toEqual(true);
    });
    component.ngOnInit();
    component.handleChange();
  });
});
