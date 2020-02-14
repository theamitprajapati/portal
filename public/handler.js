var Elements = {
    get: function (id) {

    },
    post: function () {

    }
}
var Template = {
    get: function (e) {
        return (e.target.hash);   
    },
    set: function () {

    }
}

var Menu = {


}


// $(".children li a").click(function (e,v) {
//     var path = Template.get(e);
//     if(path == undefined) return true;
//     if(path.length <= 0) return false;
//     path = path.replace('#','');
//     console.log(base_url(path))
//     $.ajax(url:base_url(path),success:function (response, status, xhr) {
//         console.log('cb is fire');
//         if (status == "success") Template.set(response)//render template in html            
//         if (status == "error") Template.set(response)//render template in html            
//     });
// });
