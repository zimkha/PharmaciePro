import { TestBed } from '@angular/core/testing';

import { VehivuleService } from './vehivule.service';

describe('VehivuleService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: VehivuleService = TestBed.get(VehivuleService);
    expect(service).toBeTruthy();
  });
});
