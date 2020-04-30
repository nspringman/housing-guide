$('.carousel').carousel({interval: 5000});

function searchDropdown() {
    var input = document.getElementById('search-input').value.toLowerCase();
    var lis = document.getElementById("dropdown-options").getElementsByTagName("li");
    var values = [];
    for (var i = 0; i< lis.length; i++){
        values.push(lis[i].getElementsByTagName("a")[0].innerHTML);
    }
    for(var i=0; i<values.length; i++){
        if (!(values[i].toLowerCase().indexOf(input) != -1)){
            lis[i].children[0].className = "dropdown-inactive";
        }else{
            lis[i].children[0].className = "";
        }
    }
}


$(".back-link").click(function() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
    setTimeout(function(){
        $('.collapse').collapse()
        $("#dorms").dropdown('toggle');
    },1001);
});