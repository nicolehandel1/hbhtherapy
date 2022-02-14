<style>
    .abtsection {
        background-color: transparent;
        transition: 1s ease;
    }
    .abtcolor {
      background-color: #FAF8F4;
        transition: 1s ease;
    }

    .abt-map {
        margin: auto;
    }

    #map {
        width: 80%;
        height: 0;
        padding-bottom: 55%;
        font-size: 16px;
        display: block;
        position: relative;
        background-image: url(/wp-content/uploads/2022/02/Path@2x.png);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }

    /* ===== Pins on the map ===== */

    #map li {
        /* pin's label */
        display: block;
        position: absolute;
        width: 3em;
        height: 3em;
        background-color: #F7931E;
        border: .8em solid #76559A;
        border-radius: 3em;
        cursor: pointer;
        transform: translateX(-1em) translateY(-3.2em);
        transition: .25s ease-out;
    }

    #map li:after {
        /* pin's tip */
        content: '';
        display: block;
        width: 0;
        height: 0;
        margin-top: 1.5em;
        margin-left: -.6em;
        border-left: 1.3em solid transparent;
        border-right: 1.3em solid transparent;
        border-top: 2em solid #76559A;
        transition: border-top .25s ease-out;
    }

    #map li:hover {
        background-color: #76559A;
        border-color: #F7931E;
        transform: translateX(-1em) translateY(-3.6em);
    }

    #map li:hover:after {
        border-top: 2em solid #F7931E;
    }

    .locations-wrap {
        display: flex;
        justify-content: space-between;
    }

    .location-card {
        position: relative;
        top: 0;
        width: 25%;
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #979797;
        transition: .25s ease;
    }

    .open {
        top: -200px;
        box-shadow: -2px 2px 4px -2px #4d4d4d;
        -webkit-box-shadow: -2px 2px 4px -2px #4d4d4d;
        -moz-box-shadow: -2px 2px 4px -2px #4d4d4d;
        width: 30%;
    }

    .location-card h3 {
        font-weight: 800;
        font-size: 1.5em;
    }

    .location-card .btn {
        width: 100%;
    }

    @media only screen and (max-width: 1300px) {
        #map {
            font-size: 14px;
        }

        .locations-wrap {
            flex-wrap: wrap;
            margin-top: 0px;
        }

        .location-card {
            width: 100%;
        }
        
        .open {
        top: 0px;
    }
    }

    @media only screen and (max-width: 1100px) {
        #map {
            font-size: 12px;
        }
    }

    @media only screen and (max-width: 800px) {
        #map {
            font-size: 8px;
        }
    }
</style>

<div class="section abtsection" id="offices">
    <div class="section-content">
        <ul id="map" class="abt-map">
            <li id="westSpringfield" class="location-filter" style="top: 50%; left: 28%;"></li>
            <li id="amherst" class="location-filter" style="top: 38%; left: 33%;"></li>
            <li id="wilbraham" class="location-filter" style="top: 50%; left: 35%;"></li>
            <li id="franklin" class="location-filter" style="top: 55%; left: 57%;"></li>
        </ul>

        <div class="locations-wrap">

            <div class="location-card amherst">
                <h3>Amherst</h3>
                <p class="blog-author">test</p>
                <p class="blog-author">test</p>
                <a class="btn" href="">Learn More</a>
            </div>

            <div class="location-card franklin">
                <h3>Franklin</h3>
                <p class="blog-author">test</p>
                <p class="blog-author">test</p>
                <a class="btn" href="">Learn More</a>
            </div>

            <div class="location-card wilbraham">
                <h3>Wilbraham</h3>
                <p class="blog-author">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="blog-author">test</p>
                <a class="btn" href="">Learn More</a>
            </div>

            <div class="location-card westspring">
                <h3>West Springfield</h3>
                <p class="blog-author">test</p>
                <p class="blog-author">test</p>
                <a class="btn" href="">Learn More</a>
            </div>
        </div>

    </div>
</div>

<script>
    
jQuery(document).ready(function () {
  
    $(window).scroll(function() {    
    if ($(this).scrollTop() > 50) {
        $(".abtsection").addClass("abtcolor");
    } else {
        $(".abtsection").removeClass("abtcolor");
    }
});
    
 $("#westSpringfield").on('click', function(){
    $(".westspring").addClass('open').siblings().removeClass('open');
 })
    
$("#amherst").on('click', function(){
    $(".amherst").addClass('open').siblings().removeClass('open');
 })
    
$("#wilbraham").on('click', function(){
    $(".wilbraham").addClass('open').siblings().removeClass('open');
 })
    
$("#franklin").on('click', function(){
    $(".franklin").addClass('open').siblings().removeClass('open');
 })
    
$(".location-card").hover(
  function () {
    $(this).addClass("open").siblings().removeClass('open');
  },
  function () {
    $(this).removeClass("open");
  }
);
    
});
</script>