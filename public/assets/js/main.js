function format_date(string_date){
    let date = new Date(string_date);
    return date.getDate() + "-" + date.getMonth() + "-" + date.getFullYear() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
}

function remove_tags(str) {
    if ((str===null) || (str===''))
        return false;
    else
        str = str.toString();

    return str.replace( /(<([^>]+)>)/ig, '');
}

function get_status_class(status){
    console.log(status);
    if(status === "completed"){
        return "success";
    } else if(status === "failed" || status === 'cancelled'){
        return "danger";
    } else if(status === 'pending'){
        return "info";
    } else {
        return "warning";
    }
}
$(document).on({
    ajaxStart: function () {
        $('.ajax-loader').css("visibility", "visible");
    },
    ajaxStop: function () {
        $('.ajax-loader').css("visibility", "hidden");
    }
});

function startLoading(){
    $('.ajax-loader').css("visibility", "visible");
}

function endLoading(){
    $('.ajax-loader').css("visibility", "hidden");
}
