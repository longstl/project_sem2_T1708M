<div id="captioned-gallery">
    <figure class="slider">
        <figure>
            <img src="http://s1.1zoom.me/b4757/639/Cats_Dogs_Juice_Two_Poodle_Glasses_Funny_526822_1280x720.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/Vm8N8ry5eikbknln4/dog-and-cat-on-a-white-background_siomhko__F0000.png" alt>
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="https://images.wallpaperscraft.com/image/dog_cat_grass_german_shepherd_65061_1280x720.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="http://s1.1zoom.me/b5050/283/Dogs_Cats_Grass_Chihuahua_Border_Collie_514094_1280x720.jpg" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
        <figure>
            <img src="https://s1-ssl.dmcdn.net/NdFtL/x720-R2F.jpgs" alt="">
            <figcaption>PET HOUSE</figcaption>
        </figure>
    </figure>
</div>
<style>
    @import url(https://fonts.googleapis.com/css?family=Istok+Web);

    @keyframes slidy {
        0% {
            left: 0%;
        }
        20% {
            left: 0%;
        }
        25% {
            left: -100%;
        }
        45% {
            left: -100%;
        }
        50% {
            left: -200%;
        }
        70% {
            left: -200%;
        }
        75% {
            left: -300%;
        }
        95% {
            left: -300%;
        }
        100% {
            left: -400%;
        }
    }

    * {
        box-sizing: border-box;
    }

    body, figure {
        margin: 0;
        font-family: Istok Web, sans-serif;
        font-weight: 100;
        text-align: center;
    }

    div#captioned-gallery {
        width: 100%;
        overflow: hidden;
    }

    figure.slider {
        position: relative;
        width: 500%;
        font-size: 0;
        animation: 30s slidy infinite;
    }

    figure.slider figure {
        width: 20%;
        height: auto;
        display: inline-block;
        position: inherit;
    }

    figure.slider img {
        width: 100%;
        height: 720px;
    }

    figure.slider figure figcaption {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        width: 100%;
        font-size: 2rem;
        padding: .6rem;
    }
</style>