
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    
    <section class="ftco-section" id="menuSection">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <div class="subheading">Specialties</div>
                    <h4 class="mb-6 mt-3" style="font-family: cursive"><i>In delicacy</i></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Breakfast
                            </p>
                        </div>
                        @foreach ($breakfast as $menu)
                            <div class="menus d-flex ftco-animate" >
                                <div class="menu-img img" style="background-image: url({{ $menu->file }}); background-size:contain"></div>
                                <div class="text">
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{ $menu->name_of_menu }}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price" >#{{ $menu->price }}</span>
                                        </div>
                                    </div>
                                    <p>{{ $menu->description }}<span></span><span>
                                        </span></p>
                                    <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                        onclick="window.location.href='order'" id="btn">Order now</button>
                                      
                                                
                                    <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                                        onclick="addToCart('{{ $menu->id }}')" id="btn"> Add to Cart</button>
                                       
                                </div>
                            </div>
                        @endforeach
                        <span class="flat flaticon-bread" style="left: 0;"></span>
                        <span class="flat flaticon-breakfast" style="right: 0;"></span>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Lunch</p>
                        </div>
                        @foreach ($lunch as $menus)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{ $menus->file }});  background-size:cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ $menus->name_of_menu }}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">#{{ $menus->price }}</span>
                                    </div>
                                </div>
                                <p>{{ $menus->description }}<span></span> <span></span></p>
                                <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                onclick="window.location.href='order'">Order now</button>
                            <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                         onclick="addToCart('{{ $menus->id }}')" id="btn"> Add to Cart</button>
                            </div>
                        </div>
                        @endforeach
                        
                        <span class="flat flaticon-pizza" style="left: 0;"></span>
                        <span class="flat flaticon-chicken" style="right: 0;"></span>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Dinner</p>
                        </div>
                        @foreach ($dinner as $menu)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{ $menu->file }}); background-size:cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ $menu->name_of_menu }}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">#{{ $menu->price }}</span>
                                    </div>
                                </div>
                                <p>{{ $menu->description }}<span></span> <span></p>
                                    <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                onclick="window.location.href='order'">Order now</button>
                            <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                            onclick="addToCart('{{ $menu->id }}')" id="btn"> Add to Cart</button>
                            </div>
                        </div>
                      @endforeach
                        <span class="flat flaticon-omelette" style="left: 0;"></span>
                        <span class="flat flaticon-burger" style="right: 0;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-2">
                <div class="col-md-3 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h4 class="mb-2 mt-3" style="font-family:cursive"><I>(Snack, Wine & drinks)</I></h4>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Snacks</p>
                        </div>
                        @foreach ($snack as $snacks)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{ $snacks->file }}); background-size:cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ $snacks->name_of_menu }}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">#{{ $snacks->price }}</span>
                                    </div>
                                </div>
                                <p>{{ $snacks->description }}<span></span> <span></p>
                                    <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                onclick="window.location.href='order'">Order now</button>
                            <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                            onclick="addToCart('{{ $snacks->id }}')" id="btn"> Add to Cart</button>
                            </div>
                        </div>
                        @endforeach
                        <span class="flat flaticon-cupcake" style="left: 0;"></span>
                        <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Wine Card</p>
                        </div>
                        @foreach ($wine as $wines)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: ur({{ $wines->file }})); background-size:cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ $wines->name_of_menu }}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">#{{ $wines->price }}</span>
                                    </div>
                                </div>
                                <p>{{ $menu->description }}<span></span> <span></p>
                                    <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                onclick="window.location.href='order'">Order now</button>
                            <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                            onclick="addToCart('{{ $wines->id }}')" id="btn"> Add to Cart</button>
                            </div>
                        </div>
                     @endforeach
                        <span class="flat flaticon-wine" style="left: 0;"></span>
                        <span class="flat flaticon-wine-1" style="right: 0;"></span>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <p style="font-family: cursive;font-size:xx-large;font-weight:900" class="text-dark">Drinks &amp; Tea</p>
                        </div>
                        @foreach ($drink as $drinks )
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{ $drinks->file }}); background-size:cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ $drinks->name_of_menu }}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">#{{ $drinks->price }}</span>
                                    </div>
                                </div>
                                <p>{{ $menu->description }}<span></span> <span></p>
                                    <button type="button" class="btn btn-sm btn-danger" style="font-family: cursive"
                                onclick="window.location.href='order'">Order now</button>
                            <button type="button" class="btn btn-sm btn-warning" style="font-family: cursive"
                               onclick="addtocart('{{ $drinks->id }}')"> Add to Cart</button>
                            </div>
                        </div>
                        @endforeach
                        <span class="flat flaticon-wine" style="left: 0;"></span>
                        <span class="flat flaticon-wine-1" style="right: 0;"></span>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</div>