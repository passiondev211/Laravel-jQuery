/*****

Srinivas Tamada
http://9lessons.info
http://thewallscript.com

****/

function vanillaFadeEffect(effect, element, speed) {
var A=0;
if(effect === 'fadeOut')
A=1;

if ( ! element.style.opacity) 
{ 
element.style.opacity = parseInt(A); 
}

var start = null;
window.requestAnimationFrame(function animate(timestamp) {
start = start || timestamp;
var progress = timestamp - start;

if(effect === 'fadeOut')
element.style.opacity = 1 - progress / speed;
else
element.style.opacity = progress / speed;

if (progress >= speed) {
if(effect === 'fadeOut')  {
  element.style.display = 'none';
}
else
{
  element.style.display = '';
}

} else {
window.requestAnimationFrame(animate);
}
});

}

function vanillaGetPost(type, url, data, success)
{
  if(type=='GET')
  {
  url=url+'?'+data;
  data='';
  }
  var r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
  r.open(type, url, true);
  r.onreadystatechange = function () {
    if (r.readyState > 3 && r.status === 200){
      success(r.responseText);
    }
  };
  r.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  r.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  r.send(data);
  return r;
}