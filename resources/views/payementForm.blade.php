@extends('globalCode.Layoute')
@section('contenu')
@include('Menu.Menubar')

<div class="container rounded bg-white">
    <div class="row d-flex justify-content-center pb-5 shadow mt-5 mb-5">
        <div class="col-sm-5 col-md-5 ml-1">
            <div class="py-4 d-flex flex-row">
                <h5><span class="fa fa-check-square-o"></span><b>SAMA-AUTO</b> | </h5><span class="pl-2">Pay</span>
            </div>
            <h4 class="green">85.000 fcfa</h4>
            <h4>Covoiturage</h4>
            <div class="d-flex pt-2">
                <div>
                    <p><b>Frais de paiement </b><span class="green"> 71.76 FCFA</span></p>
                </div>
               
            </div>
            <div class="rounded bg-light d-flex">
                <div class="p-2">Paiement en toute securiter</div>
                <div class="ml-auto p-2">OAP</div>
            </div>
            <hr>
            <div class="pt-2">
                <div class="d-flex">
                    <div>
                        <p><b>Prix net a payer </b><span class="green"> 13.24 FCFA</span></p>
                    </div>
                    <div class="ml-auto p-2">
                        <p class="text-primary"><i class="fa fa-plus-circle text-primary"></i></p>
                    </div>
                </div>
                <p> <span class="h4">Information :</span> Vos information monetaire sont strictement proteger contre toute malvellance </p>
                <form class="pb-3">
                    <div class="d-flex flex-row align-content-center">
                        <div class="pt-2 pr-2"><input type="radio" name="radio1" id="r1" checked></div>
                        <div class="rounded border d-flex w-100 px-2">
                            <div class="pt-2">
                                <p><i class="fa fa-cc-visa text-primary pr-2"></i>Visa Debit Card</p>
                            </div>
                            <div class="ml-auto pt-2">************3456</div>
                        </div>
                    </div>
                </form>
                <form class="pb-3">
                    <div class="d-flex flex-row w-100">
                        <div class="pt-2 pr-2"><input type="radio" name="radio2" id="r2"></div>
                        <div class="rounded d-flex w-100 px-2">
                            <div class="pt-2">
                                <p><i ><img alt="" style="    height: 40px;width: 40px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAh1BMVEX////xeDD739H7wqTydCPxcBv81sL1qoPxdSfwdSvwcSDwbxv749b1qID2roj50bz4xq3zk2D97uT99vLyik70oXXvbBL98er2sY3xfjr3uZn99/P86eD4w6f62snzl2Pxg0TvaQDzmmrxezb0nXTyjlbykFnvYwDxhUj3u5z0pHryi1D3v6WzEP9sAAAEtklEQVR4nO2c6XLiOBRGLSKMFuMF4w3MYpzQYPL+z9e610DIJJOZ6qoJDvOdqrTRYlqHK13J/MDzAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADggShG30R6L8NjM/4Wmuhehk9SfAtjH4YwhCEMYQhDGMIQhjCEIQxhCEMYwhCGMIQhDGEIQxjCEIYwhCEMYQhDGMIQhjCEIQxhCEMYwhCGMIQhDGEIQxjCEIYwhCEMYQhDGMIQhjCEIQxhCEMY/i8MlVJaKyHo7yEN2yzLdttM6CqrHtOwKgN/8uyVeent9UMa6jwOm+d10ESj5DENhYlLm0VRF0dDMdRa/+vRv+/64T59Mez8F2/jb4ZgqK2q5q0x/WDNeGyFslzQrlJreS5IY+kfUZ1b6U5dCaO0tdf+YivcTarMZLKQsTmeBmBoDvEsXaZBqGiUauX7UZ6sl6UUploERVHU8cm40W+nr5Ew0yBNi2hLu4BQ27hIi9GuXY+CjPYGHbrWNCjdLqFpp5B0vbthvriUZzRuG3heunKlhbHh8tJUurBO3LWr+3KxdSOX+3M7GYRKqEN9eaeDupm3dzY05VtFetBsyCxybpkFBV0SraZ9/ZJ/9WklXVBJMK17TTcDKupZr0kzrfRQDPWcXgVlt6KB+uZiWNRT87L2Zru8yWNXXpnesO7UmMqBFWP6+SdfN1u+I5TmyV1em7yhSfFqhmLIwxpJI/OEqg6aDWeJW0Iuj+y2Rpv8xdVElg3X0sVOUw+XY9xnUrjUqSqKamiMC2H9S2nVjFyk88EYktAzTdecQlJKNtyYc2rMZVLGozfD2FJPNlQZV7uyjdiQZoO/32w2ezKa64EYtu6DT3kwKiQDw4ZJL2iT6JJrLobmaihpmR6pbI7uVTievnvzTg3DkKfajNeM6lzV+sZQCx7ZsqbU8dGQ5/eCDWnhhXn47s3DgRgKWkOFvBpGN4aSBlZPtzk3fIwheT2xIW0uvWGUdT3Tw1BmqZ65KNHm1kdi9Waodu5FoI2Wk08NeVb7tA7HazK01D/OFWGUGsxuYel/X4zpcYDUMnU15BgdnYH5PIaKkm8hlDYHWqyhaT3KpTS91Wl8e1y9ryGPe7mzRlFCnAn93jBqlK2CTw2FpfUZnNodHwlCaSmUx9wYG3uj/WBiKBTv1/Wah+nOom+z9Jn7TGJOp58Y8nZxJZQ8rb3164reIR3Mju/OXsW1IjJC3OTS4KbvJ4bCrvq2Ja9D1e8aPWmiBmPojiTrvrgsaZ/nI8CGDasR10e04HzLJ++rYUEpxvBBvNjxbqGofP60/CGdvGljn4er+CkTPLH0YT4/tX2DOXVd0lrlqly6rU7zE2ddfZrP+cjizjzb+UHlFMspOUm5n5ThrrXvnovvbkjJz7pUc3mqvXne1/Sl4LXq2nJ+0R42nbtNjynW52mpabP4y3P/AAz/jJam6KKqKnrWKL74FuTHGhoyc4+LnGsn5u87/lhDod5+H3jxheAPNhT5PqqLoghe268Ef7KhS8PuBCqt+fqryDsa9sfk/5zmbob+dPItdME/jwUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8DD8BkDAdDrxZ8ujAAAAAElFTkSuQmCC"></i>Orange Money</p>
                            </div>
                            <div class="ml-auto pt-2">************1038</div>
                        </div>
                    </div>
                </form>
                <div> <input type="button" value="Valider mon paiement" class="btn btn-primary btn-block"> </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-4 offset-md-1 mobile">
            <div class="py-4 d-flex justify-content-end">
                <h6><a href="#">Annuler le paiement</a></h6>
            </div>
            <div class="bg-light rounded d-flex flex-column">
                <div class="p-2 ml-3">
                    <h4>Facture de paiement</h4>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Prix a payer</div>
                    <div class="ml-auto">18676 Fcfa</div>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Heure de payement</div>
                    <div class="ml-auto">0.00</div>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Date de paiement</div>
                    <div class="ml-auto">12-10-2021</div>
                </div>
               
                <div class="border-top px-4 mx-3"> </div>
               
                <div class="border-top px-4 mx-3"></div>
                
                <div class="p-2 d-flex">
                    <div class="col-8">frais de paiement <span class="fa fa-question-circle text-secondary"></span></div>
                    <div class="ml-auto"><b>7176 fcfa</b></div>
                </div>
                <div class="border-top px-4 mx-3"></div>
                <div class="p-2 d-flex pt-3">
                    <div class="col-8"><b>Montant total</b></div>
                    <div class="ml-auto"><b class="green">85.00 fcfa</b></div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

.green {
    color: rgb(15, 207, 143);
    font-weight: 680
}

@media(max-width:567px) {
    .mobile {
        padding-top: 40px
    }
}
</style>

@include('footer.footer2')
@endSection