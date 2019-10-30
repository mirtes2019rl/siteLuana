<!-- Carrossel de imagens -->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <!-- mostrar banner atual -->
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>

        <!-- declaração de imagens -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid d-block" src="img/1.jpg">
                <div class="carousel-caption d-none d-md-block text-warning">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <p class="lead"> Phasellus mollis porta blandit. Vestibulum ullamcorper ex et lectus placerat.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block" src="img/2.jpg">
                <div class="carousel-caption d-none d-md-block text-warning">
                    <h1>Morbi rutrum aliquet imperdiet.</h1>
                    <p class="lead"> Sed cursus lorem et eros pellentesque, ac mollis urna vulputate. Cras gravida efficitur orci et laoreet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block" src="img/3.jpg">
                <div class="carousel-caption d-none d-md-block text-warning">
                    <h1>Phasellus mollis mollis ante.</h1>
                    <p class="lead"> Donec tristique eget metus accumsan commodo. Vivamus volutpat libero mi, non vulputate dolor interdum id.</p>
                </div>
            </div>
        </div>
        <!-- controles -->
        <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-3">Phasellus diam nibh</h1>
                <p> Nulla facilisi. Morbi tristique varius tempus. Maecenas mattis massa a elit interdum dictum. </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                <nav id="navbarVertical" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item1">Curabitur lobortis</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-3" href="#item1-1"> Duis tristique</a>
                            <a class="nav-link ml-3" href="#item1-2"> Aenean fringilla</a>
                        </nav>
                        <a class="nav-link my-2" href="#item2">Ac massa sollicitudin</a>
                        <a class="nav-link my-2" href="#item3">Proin augue diam</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-3" href="#item3-1"> Duis sit amet</a>
                            <a class="nav-link ml-3" href="#item3-2"> Nulla nec elit </a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-9">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    <h4 id="item1">Lorem ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis porta blandit. Vestibulum ullamcorper ex et lectus placerat, ut porttitor quam rutrum. Suspendisse gravida, nisl sed facilisis interdum, massa nisi luctus neque, eget commodo quam justo vitae eros. Donec eget sapien sagittis, suscipit dui id, dignissim neque. Morbi rutrum aliquet imperdiet. Sed cursus lorem et eros pellentesque, ac mollis urna vulputate. Cras gravida efficitur orci et laoreet.</p>
                    
                    <h5 id="item1-1">Phasellus mollis mollis ante.</h5>
                    <p>Phasellus mollis mollis ante. Donec tristique eget metus accumsan commodo. Vivamus volutpat libero mi, non vulputate dolor interdum id. Proin aliquam arcu ipsum, vitae facilisis augue faucibus et. Phasellus diam nibh, cursus vel eros a, aliquet lacinia nulla. Morbi nec feugiat magna. Etiam fringilla auctor velit vitae condimentum. Nulla facilisi. Morbi tristique varius tempus. Maecenas mattis massa a elit interdum dictum. Morbi malesuada vestibulum massa, nec pulvinar orci interdum sit amet. Nam diam ante, luctus elementum ipsum sed, bibendum interdum tortor. Nullam id velit purus. Aenean id elit libero. Morbi sollicitudin finibus vehicula. Aliquam aliquam eu dui ac mollis.</p>

                    <h5 id="item1-2">Curabitur lobortis ex ac massa sollicitudin</h5>
                    <p>Curabitur lobortis ex ac massa sollicitudin, quis luctus libero hendrerit. Proin augue diam, vulputate sollicitudin justo sit amet, imperdiet varius nibh. Nunc eget ex nulla. Sed eget blandit ante, nec interdum dolor. Duis tristique hendrerit magna eu viverra. Aenean ut dignissim velit. Aenean id nisi pulvinar, malesuada sapien facilisis, egestas dolor. Aenean fringilla dolor est, nec consectetur mi euismod sit amet. Cras ac eleifend augue, sit amet luctus nisi.</p>

                    <h4 id="item2">Lorem ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis porta blandit. Vestibulum ullamcorper ex et lectus placerat, ut porttitor quam rutrum. Suspendisse gravida, nisl sed facilisis interdum, massa nisi luctus neque, eget commodo quam justo vitae eros. Donec eget sapien sagittis, suscipit dui id, dignissim neque. Morbi rutrum aliquet imperdiet. Sed cursus lorem et eros pellentesque, ac mollis urna vulputate. Cras gravida efficitur orci et laoreet.</p>

                    <h4 id="item3">Lorem ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis porta blandit. Vestibulum ullamcorper ex et lectus placerat, ut porttitor quam rutrum. Suspendisse gravida, nisl sed facilisis interdum, massa nisi luctus neque, eget commodo quam justo vitae eros. Donec eget sapien sagittis, suscipit dui id, dignissim neque. Morbi rutrum aliquet imperdiet. Sed cursus lorem et eros pellentesque, ac mollis urna vulputate. Cras gravida efficitur orci et laoreet.</p>
                    
                    <h5 id="item3-1">Phasellus mollis mollis ante.</h5>
                    <p>Phasellus mollis mollis ante. Donec tristique eget metus accumsan commodo. Vivamus volutpat libero mi, non vulputate dolor interdum id. Proin aliquam arcu ipsum, vitae facilisis augue faucibus et. Phasellus diam nibh, cursus vel eros a, aliquet lacinia nulla. Morbi nec feugiat magna. Etiam fringilla auctor velit vitae condimentum. Nulla facilisi. Morbi tristique varius tempus. Maecenas mattis massa a elit interdum dictum. Morbi malesuada vestibulum massa, nec pulvinar orci interdum sit amet. Nam diam ante, luctus elementum ipsum sed, bibendum interdum tortor. Nullam id velit purus. Aenean id elit libero. Morbi sollicitudin finibus vehicula. Aliquam aliquam eu dui ac mollis.</p>

                    <h5 id="item3-2">Curabitur lobortis ex ac massa sollicitudin</h5>
                    <p>Curabitur lobortis ex ac massa sollicitudin, quis luctus libero hendrerit. Proin augue diam, vulputate sollicitudin justo sit amet, imperdiet varius nibh. Nunc eget ex nulla. Sed eget blandit ante, nec interdum dolor. Duis tristique hendrerit magna eu viverra. Aenean ut dignissim velit. Aenean id nisi pulvinar, malesuada sapien facilisis, egestas dolor. Aenean fringilla dolor est, nec consectetur mi euismod sit amet. Cras ac eleifend augue, sit amet luctus nisi.</p>
                </div>
            </div>
        </div>
        <!-- criação de cards-->
        <div class="row mb-5">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/c1.png">
                    <div class="card-body">
                        <h4 class="card-title ">Pellentesque porta ex</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Eu massa viverra, ac posuere tellus viverra</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Sed nec ullamcorper magna
                        </li>
                        <li class="list-group-item">
                            Donec aliquet nulla nec
                        </li>
                        <li class="list-group-item">
                            Nec volutpat nibh malesuada
                        </li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link">Nunc</a>
                        <a href="#" class="card-link">Nec tortor</a>
                        
                    </div>
                    <div class="card-footer text-muted">
                        Nulla placerat                            
                    </div>                     
                </div>                
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/c2.png">
                    <div class="card-body">
                        <h4 class="card-title ">Integer quis gravida metus.</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Donec sagittis sodales lectus nec tristique.</h6>
                        <p class="card-text">Sed ut libero vehicula, tempus neque in, bibendum libero.</p>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Sed risus dui, placerat
                        </li>
                        <li class="list-group-item">
                            Nulla placerat, nisl quis
                        </li>
                        <li class="list-group-item">
                            Donec tincidunt, orci eget
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Nunc</a>
                        <a href="#" class="card-link">Nec tortor</a>                        
                    </div>
                    <div class="card-footer text-muted">
                        Maecenas sodales                            
                    </div>                    
                </div>                
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="img/c3.png">
                    <div class="card-body">
                        <h4 class="card-title ">Duis vitae magna</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Tristique nec vitae nunc</h6>
                        <p class="card-text">Nullam euismod interdum ipsum in consectetur. Nunc augue purus.</p>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Suspendisse sed bibendum quam
                        </li>
                        <li class="list-group-item">
                            Fusce gravida, tortor et congue
                        </li>
                        <li class="list-group-item">
                            Quisque sed justo elit
                        </li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Nunc</a>
                        <a href="#" class="card-link">Nec tortor</a>
                        
                    </div>
                    <div class="card-footer text-muted">
                        Vestibulum ante                            
                    </div>                    
                </div>                
            </div>            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nulla non gravida turpis</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fuid">
                        <div class="row">
                            <div class="col-6">
                                <h5>Aliquam risus nisi</h5>
                                <p>Aliquam risus nisi, tempor sed aliquet eu, dictum in neque. Pellentesque euismod arcu dolor, quis ultricies est placerat vitae. Aliquam bibendum leo at ex vestibulum dignissim. Ut ac nisi ante. Fusce id dolor dictum, imperdiet sapien id, condimentum lectus. Duis bibendum est sed dolor posuere, vel consequat dui pretium. Aliquam erat volutpat. Proin non lacus vitae ipsum maximus egestas sit amet imperdiet dolor. In dictum lacus elementum tortor convallis, eu fringilla augue viverra. Quisque egestas risus imperdiet ante malesuada egestas. Praesent purus ligula, rutrum id facilisis ut, feugiat vel turpis. Sed sodales, nunc vitae interdum facilisis, neque mi imperdiet lorem, sit amet interdum mi augue at dui. Praesent vehicula congue mi, vitae aliquet urna facilisis eu. Nam facilisis massa mollis magna posuere, ut ultrices metus tristique. In pulvinar feugiat odio, et malesuada nibh ultricies non. Duis fringilla non velit non viverra.</p>
                            </div>
                            <div class="col-6">
                                <h5>Sed consequat</h5>
                                <p>Sed consequat, turpis semper interdum consequat, mi quam ultrices sapien, a egestas ex erat eget est. Vivamus molestie maximus nisi sit amet interdum. Fusce consectetur elit non arcu fermentum, vulputate ullamcorper lacus consequat. Cras non odio scelerisque, dictum nulla et, varius erat. Nullam gravida libero a leo condimentum, ut dignissim turpis elementum. Suspendisse cursus velit vitae sagittis facilisis. Cras ultrices odio vitae dui blandit dignissim. Morbi neque nisi, auctor et sem eget, laoreet pellentesque velit. Donec nec erat sit amet nibh tincidunt molestie sed feugiat neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. In hac habitasse platea dictumst. Nulla a condimentum lorem. Praesent sed mollis nisi. Vivamus tortor erat, finibus quis ultrices at, euismod ac turpis.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Nulla placerat</button>                  
                </div>
                
            </div>
            
        </div>
        
    </div>