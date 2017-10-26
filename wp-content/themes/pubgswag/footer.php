<?php wp_footer(); ?>

<div class="push"></div>
</div> <!-- end wrapper -->

<footer class="footer">
    <div id="fb-wrapper">
        <div class="fb-share-button" data-href="https://pubgswag.com" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpubgswag.com%2F&amp;src=sdkpreparse">Share</a></div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <script>
        var items = document.getElementsByClassName('item-container');


        var g = function(ASIN, item, timeout) {
            setTimeout(function() {
                jQuery.ajax("https://qe94qn53xe.execute-api.us-east-1.amazonaws.com/prod/Get-Amazon-Prices?ASIN=" + ASIN)
                    .done(function(response) {
                        try {
                            lowestPrice = f(response);
                            var price = item.getElementsByClassName("price")[0];
                            price = lowestPrice;
                        } catch (error) {
                            console.log(error);
                            var price = item.getElementsByClassName("price")[0];
                            price.innerHTML = "See Price on Amazon"
                        }
                    })
                    .fail(function(error) {
                        throw(error);
                    });
            }, timeout);
        };


        for( var i = 0; i < items.length; i++ ) {
            timeout = 100;
            var item = items[i];
            thing = items[i];
            var link = items[i].getElementsByClassName('amazon-link')[0];
            var ASIN = link.href.match(/product\/.*\//)[0].match(/\/.*\//)[0];
            ASIN = ASIN.substring(1, ASIN.length - 1);
            console.log(ASIN);
            g(ASIN, item, timeout);

            timeout += 200;
        }


        var f = function(response) {
            var lowest = 99999999;
            var lowestString = "";
            try {
                var data = response.data;
                data.forEach(function(item) {
                    item.Offers.forEach(function(offer) {
                        offer.Offer.forEach(function(offerData) {
                            offerData.OfferListing.forEach(function(listing) {
                                listing.Price.forEach(function(price) {
                                    if (parseInt(price.Amount[0]) < lowest) {
                                        lowest = parseInt(price.Amount[0]);
                                        lowestString = price.FormattedPrice[0];
                                    }
                                })
                            })
                        })
                    })
                });
            } catch (error) {
                if (lowest < 99999999) {
                    return lowestString;
                } else {
                    throw(error);
                }
            }
            return lowestString;
        };
    </script>

</footer>


</body>
</html>
