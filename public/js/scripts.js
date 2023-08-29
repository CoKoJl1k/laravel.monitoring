/*console.log('i am script.js');*/
function imgError(name) {
    document.getElementById('ch_screenshot_div_'+name).style.backgroundColor = "#FF0000";
}

function openPopupWindow(channel_name) {
    console.log(channel_name);
    let url = "play?channel_name="+channel_name;
  //  console.log(url);
    let windowFeatures = "width=700,height=650,scrollbars=yes";
    window.open(url, "_blank", windowFeatures);
}
