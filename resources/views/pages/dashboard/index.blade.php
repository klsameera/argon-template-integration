<x-app-layout>
    <x-slot name="content">
        <div class="container-fluid py-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                              <h5 class="font-weight-bolder">
                                $53,000
                              </h5>
                              <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                                since yesterday
                              </p>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                              <h5 class="font-weight-bolder">
                                2,300
                              </h5>
                              <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+3%</span>
                                since last week
                              </p>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                              <h5 class="font-weight-bolder">
                                +3,462
                              </h5>
                              <p class="mb-0">
                                <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                since last quarter
                              </p>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                              <h5 class="font-weight-bolder">
                                $103,430
                              </h5>
                              <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                              </p>
                            </div>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4 mb-lg-0">
                  <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                      <h6 class="text-capitalize">Sales overview</h6>
                      <p class="text-sm mb-0">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% more</span> in 2021
                      </p>
                    </div>
                    <div class="card-body p-3">
                      <div class="chart">
                        {{-- <canvas id="chart-line" class="chart-canvas" height="300"></canvas> --}}
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </x-slot>
</x-app-layout>



