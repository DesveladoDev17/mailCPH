<header>
        <nav class="navbar navbar-light bg-light header">
            <div class="container">
                <div class="d-flex align-items-center py-3 header">
                    
                    <h5 class="mb-0 ml-3">
                    <strong>Mailing</strong>CPH
                  </h5>
                </div>

                <div class="d-flex align-items-left py-3 header">
                  <div class="ml-auto">
                      <span class="mr-2">
                          <i class="fas fa-user"></i> 
                      </span>
                      <span>{{ Auth::user()->segdsusumod }}</span>
                  </div>
                </div>  

                {{-- <div class="form-inline">
                    <div class="dropdown">

                      <span class="dropdown-toggle language-selector" tid="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                      </span>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Arabic</a>
                        <a class="dropdown-item active" href="#">English</a>
                        <a class="dropdown-item" href="#">Russian</a>
                      </div>
                    </div>
                </div> --}}
            </div>
        </nav>
    </header>