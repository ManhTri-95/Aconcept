(function($){

var menu = {};
var page = {};
var index = {};
var map;
var infoWindow;
var curentPos;
$(document).ready(function() {
    page.district();
});


index.map = function() {
    map = new google.maps.Map(document.getElementById('map'), {});
    infoWindow = new google.maps.InfoWindow({
        maxWidth: 350
    });
    var latlngbounds = new google.maps.LatLngBounds();
    var LatLngList = [];
    $('.map-list-store li').each(function() {
        var latlng = $(this).find("a.link").data("latlng");
        latlng = latlng.split("-");
        var lat = Number(latlng[0]);
        var lng = Number(latlng[1]);
        
        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map,
            icon: 'assets/images/pin.png'


        });



        LatLngList.push(new google.maps.LatLng(lat, lng));
        $(this).find("a.link").click(function(e) {
            e.preventDefault();
            var latlng = $(this).data("latlng");
            latlng = latlng.split("-");
            var pos = {
                lat: Number(latlng[0]),
                lng: Number(latlng[1])
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent($(this).text());
            infoWindow.open(map);
            map.setCenter(pos);
        });
    });
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            curentPos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var marker = new google.maps.Marker({
                position: curentPos,
                map: map,
                //icon: 'assets/images/pin.png'
            });
            LatLngList.push(new google.maps.LatLng(curentPos.lat, curentPos.lng));
        });
    }
    LatLngList.forEach(function(latLng) {
        latlngbounds.extend(latLng);
    });
    map.setCenter(latlngbounds.getCenter());
    map.setZoom(13);
};
index.direction = function() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
        suppressMarkers: true,
        polylineOptions: {
            strokeColor: "#0C713D"
        }
    });
    directionsDisplay.setMap(map);
    $('.map-list-store li').each(function() {
        var latlng = $(this).find("a.link").data("latlng");
        latlng = latlng.split("-");
        var lat = Number(latlng[0]);
        var lng = Number(latlng[1]);
        $(this).children("button").click(function() {
            directionsService.route({
                origin: curentPos,
                destination: {
                    lat: lat,
                    lng: lng
                },
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        })
    });
};





var data_district = [
    {
        "id": "1",
        "name": "Tp Hồ Chí Minh",
        "lat": "10.7687085",
        "long": "106.4141728",
        "district": [
        {
            "id": "1",
            "name": "Quận 1",
            "store": [
            {
                "lat": "10.776987610178267",
                "long": "106.69783473014832",
                "name": "q 1 - 1",
                "address": "101 TÔN DẬT TIÊN, Q.7, TPHCM",
                "phone": "0123456789",
                "open": "10:00 - 22:00"
            },
            {
                "lat": "10.775090475213744",
                "long": "106.70176148414612",
                "name": "q 1 - 1",
                "address": "101 TÔN DẬT TIÊN, Q.7, TPHCM",
                "phone": "0123456789",
                "open": "10:00 - 22:00"
            },            
            {
                "lat": "10.779158761076673",
                "long": "106.70217990875244",
                "name": "q 1 -2 ",
                "address": "101 TÔN DẬT TIÊN, Q.7, TPHCM",
                "phone": "0123456789",
                "open": "10:00 - 22:00"
            }            
            ]
        },
        {
            "id": "11",
            "name": "Quận 2",
            "store": [{
                "lat": "10.779158761076673",
                "long": "106.70217990875244",
                "name": "Ô 9-10A, LẦU 22222",
                "address": "101 TÔN DẬT TIÊN, Q.7, TPHCM",
                "phone": "0123456789",
                "open": "10:00 - 22:00"
            }]
        },        
        ]
    }, {
        "id": "2",
        "name": "Hà Nội",
        "lat": "20.9088516",
        "long": "105.908203",
        "district": [{
            "id": "1",
            "name": "Đống Đa",
            "store": [{
                "lat": "21.0232779",
                "long": "105.809787",
                "name": "Ô 9-10A, LẦU 2, CRESCENT MALL",
                "address": "101 TÔN DẬT TIÊN, Q.7, TPHCM ",
                "phone": "0123456789",
                "open": "10:00 - 22:00"
            }]
            
        }]
}];





//fillCity();


page.district = function() {
    fillCity();
    loadDistrict();
    loadDistrictFirst();
    loadStore();
    index.map();
    index.direction();
    $('#slb_city').on('change', function(e) {
        loadDistrict();
        loadStore();
        index.map();
        index.direction();
    });
    $("#slb_district").on('change', function() {
        loadStore();
        index.map();
        index.direction();
    });
};

function fillCity() {
        for (var i = 0; i < data_district.length; i++) {
            $("#slb_city").append('<option value="' + data_district[i].id + '">' + data_district[i].name + '</option>');
        }            
}        

function loadDistrictFirst() {
    for (var i = 0; i < data_district.length; i++) {
        $('#slb_district').html('');
        for (var j = 0; j < data_district[0].district.length; j++) {
            $("#slb_district").append('<option value="' + data_district[0].district[j].id + '">' + data_district[0].district[j].name + '</option>');
        }
    }
}


function loadDistrict() {
    $('#slb_city').on('change', function () {
        console.log($(this).val());
        for (var i = 0; i < data_district.length; i++) {
            if (data_district[i].id == $(this).val()) {
                //$('#slb_district').html('<option value="000">-Select State-</option>');
                $('#slb_district').html('');
                for (var j = 0; j < data_district[i].district.length; j++) {
                    $("#slb_district").append('<option value="' + data_district[i].district[j].id + '">' + data_district[i].district[j].name + '</option>');
                }
            }
        }
    });
}



function loadStore() {
    var c = Number($("#slb_city").val());
    var d = Number($("#slb_district").val());
    var store = [];
    for (var i = 0; i < data_district.length; i++) {
        if (c == data_district[i].id) {
            for (var j = 0; j < data_district[i].district.length; j++) {
                if (d == data_district[i].district[j].id) {
                    store = data_district[i].district[j].store;
                    break;
                }
            }
        }
    }
    var html = "";

    for (var i = 0; i < store.length; i++) {
//        html += '<li><a target="_blank" href="http://maps.google.com/?q=' + store[i].name + '"  data-img="' + store[i].image + '" data-site="' + store[i].website + '" data-lat="' + store[i].lat + '" data-lng="' + store[i].long + '">';
        html += '<li class="row grid-space-10">';
        html += '<span class="col-3 col-sm-4 name"><a class="link" href="http://maps.google.com/?q=' + store[i].name + '" data-latlng="' + store[i].lat + '-' + store[i].long + '">' + store[i].name + '</a></span> ';
        html += '<span class="col-3 col-sm-4 address">' + store[i].address + '</span> ';
        html += '<span class="col-3 col-sm-2 phone">' + store[i].phone + '</span>';
        html += '<span class="col-3 col-sm-2 time"> ' + store[i].open + '</span>';
        html += '</li>';
    }
 
    $(".map-list-store").html(html);


}


    $(".select2-single").select2({
        theme: "bootstrap",
        placeholder: "Select a State",
        maximumSelectionSize: 6,
        containerCssClass: ':all:'
    });


})(jQuery);


