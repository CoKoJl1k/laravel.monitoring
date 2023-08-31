console.log(33333);
function imgError(name) {
    document.getElementById('ch_screenshot_div_'+name).style.backgroundColor = "#FF0000";
}

function openPopupWindow(channel_name) {
    let url = "play?channel_name="+channel_name;
    let windowFeatures = "width=700,height=650,scrollbars=yes";
    window.open(url, "_blank", windowFeatures);
}

