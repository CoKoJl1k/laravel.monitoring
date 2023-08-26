console.log('i am script.js');
function imgError(n,name)
{
    if(n==1){
        document.getElementById('ch_screenshot_'+name).src="http://86.57.251.100/channels_screenshots_old/"+name+".jpg";
        document.getElementById('ch_screenshot_'+name).onerror = function(){
            imgError(2,name);
        }
    }else if(n==2){
        document.getElementById('ch_screenshot_'+name).src="http://86.57.251.100/channels_screenshots_old_old/"+name+".jpg";
        document.getElementById('ch_screenshot_'+name).onerror = function(){
            document.getElementById('ch_screenshot_div_'+name).style.backgroundColor = "#FF0000";
        }
    }
}
