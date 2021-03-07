$(document).ready(function() {

    var arrayAds = new Array();

    $("#add").click(function() {
        
        $("#modal").show();
    });

    $("#close").click(function() {
        
        $("#modal").hide();
    });





    $("#new").click(function() {
       
        var ad = {
            text: $("input[name='text']").val(),
            contactName: $("input[name='name']").val(),
            contactPhone: $("input[name='phone']").val()
        }

        arrayAds.push(ad);

        console.log(arrayAds);
    
        renderAds();

        $("#modal").hide();
    });


    function renderAds() {
        $("#content").html('');

        arrayAds.map(ad => {
            var adHTML = 
            '<div class="Ads__box">' +
                '<div class="Box__info">' + ad.text + '</div>' +
                '<div class="Box__name">' + ad.contactName + '</div>' +
                '<div class="Box__phone">' + ad.contactPhone + '</div>' +
            '</div>';
        
            $("#content").append(adHTML);
        });
    }

});