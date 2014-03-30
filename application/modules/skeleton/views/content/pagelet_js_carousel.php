<p>Via data attributes: <code>data-target="#carousel"</code> <code>data-slide</code> <code>data-slide-to</code> <code>data-ride</code></p>
<p>Via Javascript: <code>$('.carousel').carousel()</code></p>

<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.carousel.slide</strong></p>
    <div class="carousel slide" id="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel"></li>
            <li data-slide-to="1" data-target="#carousel"></li>
            <li data-slide-to="2" data-target="#carousel"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+" alt="First slide">
                <div class="carousel-caption">
                    .carousel-inner .item
                    <h3>&gt; .carousel-caption h3</h3>
                    <p>
                        &gt; Paragraph
                        <button class="btn btn-default btn-sm" type="button">...btn-sm</button>
                    </p>
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==" alt="Second slide">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojMzMzO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+" alt="Third slide">
                </a>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" data-slide="prev" href="#carousel">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" data-slide="next" href="#carousel">
            <span class="icon-next"></span>
        </a>
    </div>
</div><br>

<p>Options: <code>interval: 5000</code> <code>pause: hover</code> <code>wrap: true|false</code></p>
<p>Methods: <code>.carousel('cycle')</code> <code>.carousel('pause')</code> <code>.carousel(number)</code> <code>.carousel('prev')</code> <code>.carousel('next')</code></p>
<p>Events: <code>slide.bs.carousel</code> <code>slid.bs.carousel</code></p>